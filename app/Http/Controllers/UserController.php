<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\User;
use DataTables;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
  
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = DB::table('users')
                    ->select('id','name','num_hp',)
                    ->get();
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
                           $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View</a>
                           <a href="javascript:void(0)" class="edit btn btn-danger btn-sm">Delete</a>';
                        //    $btn = $btn. '<a href="javascript:void(0)" class="edit btn btn-secondary btn-sm">Delete</a>';
                        //    $btn = $btn. '<a href="javascript:void(0)" class="edit btn btn-success btn-sm">Edit</a>';
                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        
        return view('users');
    }
}