<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\User;
use App\Student;
use Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function myaccountupdate(Request $request){

        $user = User::findOrFail(Auth::user()->id);
        if($request->name != ''){
            $user->name = $request->name;
        }
        if($request->id_no != ''){
            $user->email = $request->id_no;
        }
        if($request->password != ''){
            $user->password = Hash::make($request->password);
        }
        $user->save();

        $student = Student::where('id_no', $request->id_no)->update(['access_key'=>$request->password]);

        Session::flash('UpdatedAccount');

        return redirect('home');
        
    }
}
