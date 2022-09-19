<?php

namespace App\Http\Controllers\Admin;

use App\Models\Newsletter;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;

class NewsletterController extends Controller
{

    //list of all newsletter
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Newsletter::select();

            return DataTables::of($data)
                    ->addIndexColumn()
                    ->editColumn('created_at', function($row){
                        return strftime('%d %B %Y',strtotime($row->created_at));
                    })
                   
                    ->rawColumns(['created_at'])
                    ->make(true);
        }


        return view('admin.newsletter.index');
    }
}