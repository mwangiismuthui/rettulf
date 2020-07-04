<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Balance;
use App\Withdrawal;
use Illuminate\Http\Request;
use App\Jobs\BulkEmailSender;
use App\User;
use Yajra\Datatables\Datatables;
class WithdrawalController extends Controller
{
    function __construct()
    {
         $this->middleware('role:Super-Admin')->except('sellerWithdrawal');
    }
    public function sellerWithdrawal(Request $request, $id)
    {
        $withdrawalAmount = $request->amount;
        $balance = Balance::where('user_id', $id)->pluck('balance')->first();
        if ($withdrawalAmount<=$balance) {
            
        $newBalance= $balance-$withdrawalAmount;
        }else{

            return response([
                'error' => 'Withdrawal Amount cannot be more than the balance',
            ], \Symfony\Component\HttpFoundation\Response::HTTP_OK);
        }
     
        Balance::where('user_id', $id)->update([
            'balance' => $newBalance,
        ]);
        $withdrawal = new Withdrawal();
        $withdrawal->user_id = $id;
        $withdrawal->amount = $withdrawalAmount;
        $withdrawal->status = 0;
        if ($withdrawal->save()) {

            $data = array(
                'subject' =>"Withdrawal Request Recieved",
                
            );
            $recipient_emails=User::where('id',$id)->pluck('email')->first();
            BulkEmailSender::dispatch($recipient_emails,$data)->delay(Carbon::now()->addSeconds(5));
            return response([
                'success' => 'We have recieved your withdrawal request and are working on it',
            ], \Symfony\Component\HttpFoundation\Response::HTTP_OK);
        } else {

            return response([
                'error' => 'Something went wrong',
            ], \Symfony\Component\HttpFoundation\Response::HTTP_OK);
        }
    }
    public function allWithdrawalRequests(Request $request)
    {

        if ($request->ajax()) {
            $allWithdrawalRequests = Withdrawal::join('users','users.id','=','withdrawals.user_id')
            ->where('status', '=', '0')
            ->select([
                'withdrawals.id as id',
                'users.name as name',
                'users.email as email',
                'amount as amount',
            ])
            ->get();
            return Datatables::of($allWithdrawalRequests)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    return '<a class="btn btn-outline-warning btn-round waves-effect waves-light name="edit" href="' . route('createPayment',$data->id) . '" id="' . $data->id . '" ><i class="ti-money"></i>Pay</a>
                    
                    '
                    ;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
       
        return view('admin.withdrawal.index');
    }
}
