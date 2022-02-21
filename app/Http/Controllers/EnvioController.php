<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use App\Role;
use Validator;
use Session;
use Auth;
use Route;
use Sentinel;
use Activation;
use DB;
use Hash;
use Mail;
use Carbon\Carbon;
use Symfony\Component\HttpFoundation\Response;
use App\Mail\MyMail;


class EnvioController extends Controller
{
    public function update(Request $request, $id)
    {
        
      
        $update_user = Validator::make($request->all(), [
            'first_name' => 'min:2|max:35|string',
            'last_name' => 'min:2|max:35|string',            
            'email' => Sentinel::inRole('Admin')?'required|email|min:3|max:50|string':(Sentinel::check()?'required|email|min:3|max:50|string|unique:users,email,'.$id:'required|email|min:3|max:50|unique:users|string'),
        ]);

        if ($update_user->fails()) {
            return redirect()->back()
                        ->withErrors($update_user)
                        ->withInput();
        }

        $user = User::find($id);
        if ($user) {

              if($request->first_name){
              $user->first_name=$request->first_name;
              }
              if($request->last_name){
              $user->last_name=$request->last_name;
              }
              if($request->email){
              $user->email=$request->email;
              }
              if($request->new_password  ){
               
                $user->password=bcrypt($request->new_password);
                
              }
              $user->update();
            if ($request->role) {
              $user->roles()->sync([$request->role]);
            }
            Session::flash('message', 'Success! User is updated successfully.');
            Session::flash('status', 'success');
            
        } 
        return redirect()->route('backEnd.users.user.viewqrcode');
}
}