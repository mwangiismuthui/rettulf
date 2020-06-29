<?php

namespace App\Http\Controllers;

use App\Balance;
use App\Withdrawal;
use Illuminate\Http\Request;

use Yajra\Datatables\Datatables;
class WithdrawalController extends Controller
{
    function __construct()
    {
         $this->middleware('role:Super-Admin')->except('sellerWithdrawal');
    }
    public function sellerWithdrawal(Request $request, $id)
    {
        $balance = Balance::where('user_id', $id)->pluck('balance')->first();
        Balance::where('user_id', $id)->update([
            'balance' => 0,
        ]);
        $withdrawal = new Withdrawal();
        $withdrawal->user_id = $id;
        $withdrawal->amount = $balance;
        $withdrawal->status = 0;
        if ($withdrawal->save()) {

            return redirect()->back()->with('message', 'We have recieved your withdrawal request and are working on it');
        } else {

            return redirect()->back()->with('error', 'Something went wrong !');
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
