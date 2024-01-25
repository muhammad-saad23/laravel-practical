<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\studentmodel; 

class studentcontroller extends Controller
{
    public function register(){
        return view('/register');
    }
    
    public function create(Request $request){
        $request-> validate([
        'name'=> 'required',
        'email'=> 'required|email',
        'password'=> 'required'
        ]);
    }
    public function insert(Request $request){
        $std_data=new studentmodel();
        $std_data->name=$request['name'];
        $std_data->email=$request['email'];
        $std_data->password=$request['password'];
        $std_data->save();
        return redirect('/register');

    }
    public function select(){
        $data=studentmodel::all();
        $std_Data=compact('data');
        return view('view')->with($std_Data);
    }
    public function delete($id){
        $user_data=studentmodel::find($id);
        if (!is_null($user_data)) {
            $user_data->delete($id);
            return view('/view');
        }
        else{
            return view('/view');
        }
    }
}
