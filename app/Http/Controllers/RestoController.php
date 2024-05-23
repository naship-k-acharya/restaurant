<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\restaurants;
use App\Models\users;
use App\User;
use Crypt;
class RestoController extends Controller
{
    //
     function index()
    {
        return view('home');
    }
    function list(){
        $data= restaurants::all();
        return view('list',["data"=>$data]);
    }
    function add(Request $req)
    {
        // return $req->input();
        $resto= new restaurants;
        $resto->name=$req->input('name');
        $resto->email=$req->input('email');
        $resto->address=$req->input('address');
        $resto->save();
        $req->session()->get('status', 'resturent submitted successfully');
        return redirect('list');
    }
    function delete($id){
        
        restaurants::find($id)->delete();
        session()->get('status', 'resturent deleted successfully');
        return redirect('list');

    }
    function register(Request $req ){
        // echo encrypt('123abc');
        // return $req->input();
        $user= new users;
        $user->name=$req->input('name');
        $user->email=$req->input('email');
        $user->password=encrypt($req->input('password'));
        $user->contact=$req->input('contact');
        $user->save();
        $req->session()->put('user', $req->input('name'));
        return redirect('/');
        
        


    }
    function login(Request $req)
{
    $user = users::where("email", $req->input('email'))->first();

    if ($user && decrypt($user->password) == $req->input('password')) {
        $req->session()->put('user', $user->name); 
        return redirect('/');
    } else {
        echo 'Incorrect email or password. Please try again.';
    }
}
    function logout(Request $req)
{
    $req->session()->forget('user'); 
    return redirect('/');
}

}

