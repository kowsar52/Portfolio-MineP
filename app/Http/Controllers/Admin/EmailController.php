<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\EmailTemplate;
use DataTables;
use Carbon\Carbon;

class EmailController extends Controller
{
    //index
    public function index(Request $request){
        if ($request->ajax()) {
            $data = EmailTemplate::select();

            return DataTables::of($data)
                    ->addIndexColumn()
                    ->editColumn('created_at', function($row){
                        return strftime('%d %B %Y',strtotime($row->created_at));
                    })
                    ->addColumn('action', function($row){
                        $btn = '<div aria-label="..." role="group" class="btn-group btn-group"><a href="'.url('/admin/email-template/'.$row->id).'" class="btn btn-success btn-sm  kt-font-light editBtn" ><i class="flaticon-edit"></i>&nbsp;'.__('Edit').'</a></div>';
                        return $btn;
                    })
                    ->rawColumns(['action', 'created_at'])
                    ->make(true);
        }


        return view('admin.email_template.index');
    }


    //edit
    public function edit($id){
        $data = EmailTemplate::find($id);

        return view('admin.email_template.edit',compact('data'));
    }

    public function emailTemplateUpdate(Request $request)
    {
        $data = EmailTemplate::where('id',$request->id)->update([
            'email_subject' => $request->email_subject,
            'email_body' => $request->email_body,
        ]);

        return back()->with('success',__('Email Template Updated Successfully!'));
    }
}
