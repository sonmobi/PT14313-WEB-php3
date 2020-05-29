<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index(){
        $query = DB::table('users');
        $query->orderBy('id','desc');

        $bangU = $query->get();
        return view('user.index', ['listU' => $bangU]);
    }
    public function add(){
        return view('user.add');
    }
    public function saveNew(Request $request){
        print_r( $request->all());
    }
}
