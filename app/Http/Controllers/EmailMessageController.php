<?php

namespace App\Http\Controllers;

use App\EmailMessage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\DataTables;
use Validator;

class EmailMessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $emailMessage = EmailMessage::all();
            return Datatables::of($emailMessage)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    return '<a class="btn btn-outline-warning btn-round waves-effect waves-light name="edit" href="' . route('emailMessageEdit', $data->id) . '" id="' . $data->id . '" ><i class="ti-pencil"></i>Edit</a>';
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        $isSet = EmailMessage::count();

        return view('admin.emails.messages.index', compact('isSet'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public
    function store(Request $request)
    {
        $rules = [
            'identifier' => 'required',
        ];
        $error = Validator::make($request->all(), $rules);

        if ($error->fails()) {
            return response([
                'errors' => $error->errors()->all(),
            ], \Symfony\Component\HttpFoundation\Response::HTTP_OK);
        }
        $status = EmailMessage::where('identifier', $request->identifier)->count();
        if ($status > 0) {
            return response([
                'error' => True,
                'message' => $request->identifier . ' Email Message already exists.',
            ], Response::HTTP_OK);
        } else {
            $emailMessage = new EmailMessage();
            $emailMessage->identifier = $request->identifier;
            $emailMessage->subject = $request->subject;
            $emailMessage->message = $request->message;
            $emailMessage->from_email = $request->from_email;
            $emailMessage->company_name = $request->company_name;
            if ($emailMessage->save()) {
                return response([
                    'success' => True,
                    'message' => $request->identifier . ' Email Message Configuration saved.',
                ], Response::HTTP_OK);
            } else {
                return response([
                    'error' => true,
                    'message' => $request->identifier . ' Email Message Configuration not saved.',
                ], Response::HTTP_OK);
            }
        }
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\EmailMessage $emailMessage
     * @return \Illuminate\Http\Response
     */
    public
    function edit(EmailMessage $emailMessage, $id)
    {
        $emailMessage = EmailMessage::find($id);
        return view('admin.emails.messages.edit', compact('emailMessage'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\EmailMessage $emailMessage
     * @return \Illuminate\Http\Response
     */
    public
    function update(Request $request, EmailMessage $emailMessage)
    {
        $emailMessage = EmailMessage::find($request->id);
//        $emailMessage->identifier = $request->identifier;
//        $emailMessage->subject = $request->subject;
//        $emailMessage->message = $request->message;
//        $emailMessage->from_email = $request->from_email;
//        $emailMessage->company_name = $request->company_name;
        if ($emailMessage->update($request->all())) {
            return response([
                'success' => True,
                'message' => $request->identifier . ' Email Message Configuration updated.',
            ], Response::HTTP_OK);
        } else {
            return response([
                'error' => true,
                'message' => $request->identifier . ' Email Message Configuration not updated.',
            ], Response::HTTP_OK);
        }
    }

}
