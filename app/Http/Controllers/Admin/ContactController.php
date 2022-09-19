<?php

namespace App\Http\Controllers\Admin;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;

class ContactController extends Controller
{
    //all category
    public function index(Request $request){

        if ($request->ajax()) {
            $data = Contact::select();

            return DataTables::of($data)
                    ->addIndexColumn()
                    ->editColumn('created_at', function($row){
                        return $row->created_at->diffForHumans();
                    })
                    ->addColumn('action', function($row){
                        $btn = '<div class="d-flex justify-content-start flex-shrink-0">
                        <a href="javascript:;" onclick="view('.$row->id.')"  class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                            <span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo2/dist/../src/media/svg/icons/General/Visible.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24"/>
                                <path d="M3,12 C3,12 5.45454545,6 12,6 C16.9090909,6 21,12 21,12 C21,12 16.9090909,18 12,18 C5.45454545,18 3,12 3,12 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                <path d="M12,15 C10.3431458,15 9,13.6568542 9,12 C9,10.3431458 10.3431458,9 12,9 C13.6568542,9 15,10.3431458 15,12 C15,13.6568542 13.6568542,15 12,15 Z" fill="#000000" opacity="0.3"/>
                            </g>
                            </svg><!--end::Svg Icon--></span>
                        </a>
                        <a href="mailto:'.$row->email.'" class="btn btn-success btn-sm  kt-font-light editBtn" >
                        '.__('Reply').'
                        </a>
                    </div>';
                        return $btn;
                    })
                    ->rawColumns(['action', 'created_at'])
                    ->make(true);
        }


        return view('admin.contact.index');
    }

       //getContact
       public function getContact($id){
        $data = Contact::find($id);
        return response($data);
    }

}
