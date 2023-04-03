<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
use App;

class HomeController extends Controller
{
    public function index(){
        return view('Frontend.registration');
    }

    public function userRegistration(Request $request){
       
        // if($request->hasFile('user_image')){
        //     $image = $request->user_image;
        //     $fileimage = time().'.'.$image->getClientOriginalExtension();
        //     $image->move('admin_logo/',$filename);
            

        // }
        if ($request->hasFile('user_image')) {
        
            $image = $request->file('user_image');
            $name = time().'.'.$image->getClientOriginalExtension();
            
            $image->move('admin_logo/', $name);
    
    
            $imageName = $name;
              
            }
        
        //  print_r($imageName);die();
         $data = [
            'user_image'=>$imageName,
            'user_name'=>$request->user_name,
            'user_city'=>$request->user_city,
            'user_function'=>$request->user_function,
            'user_summary'=>$request->user_summary,
            'user_password'=>$request->user_password,
            'user_password_md'=>md5($request->user_password),
            'hash_key'=>$this->random_password_token(),

        ];
        DB::table('tbl_user')->insert($data);
        session()->flash('msg','Your Registration successfully ');
        return redirect('index');
    }

    function random_password_token() 
    {
        $alphabet = 'ab3210cdef456sdfghijkssfdlmnopqrs0tuvwx4560yzABCDdfgE0FGHIJKs456d0fLMN456OPQ0RSTUVWXYsfdZ1234s0df5678sdf4690';
        $pass = array();
        $alphaLength = strlen($alphabet) - 1; 
        for ($i = 0; $i < 25; $i++) 
        {
            $n = rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
        }
        $pass =  implode($pass); 
        $pass = $pass.date("Ymdhis");
        return $pass;
    }

    public function login()
    {
        echo 1;
    }

    public function userLogin(){
        return view('Frontend.login');
    }

    public function loginsuccess(Request $request){
        $name = $request->name;
        $password = $request->password;
        $login = DB::table('tbl_user')->where(['user_name'=>$name,'user_password'=>$password])->first();
        if($login!=""){
            session::put('user_id',$login->id);
            session::put('username',$login->user_name);
            session::put('userPassword', $login->user_password);
            return redirect('/');
        } else{
            session()->flash('msg','Please Enter the Correct details');
            return redirect('userLogin');

        }
    }

    public function userlogout(){
        session::flush();
        return redirect('userLogin');
    }

    public function change(Request $request)
    {
        App::setLocale($request->lang);
        session()->put('locale', $request->lang);
        // return view('Frontend.index');
        return redirect()->back();
    }
    
}
