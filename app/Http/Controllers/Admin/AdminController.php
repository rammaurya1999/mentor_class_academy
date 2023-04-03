<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
use App\Models\Student_user;
use App\Models\Mentor;

class AdminController extends Controller
{
    public function adminLogin(){
        return view('Admin.login');
    }
    public function loginSuccess(Request $request){
        $user_name = $request->name;
        $password = $request->password;
        $admin_login = DB::table('_admin')->where(['admin_name'=>$user_name,'enable_password'=>$password])->first();
        if($admin_login !='') {
            session::put('admin_id',$admin_login->id);
            session::put('adminUser',$admin_login->admin_name);
            session::put('adminPassword', $admin_login->admin_password);
            echo "done";
        } else {
            echo "error";
        }
    }
    public function dashboard() {
        $data['user'] = DB::table('tbl_user')->get();
        $data['user_count']=Student_user::where('Status',1)->count();
        $data['mentor_count']=Mentor::where('Status',1)->count();
        return view('Admin.dashboard',$data);
    }
    public function Studentdata() {
        $data['student'] = DB::table('tbl_user')->get();
        return view('Admin.user.Studentdata',$data);
    }

    public function Mentordata() {
        // $data['mentor'] = DB::table('user')->where('user_type',2)->get();
        $data['mentor']=Mentor::all();
        return view('Admin.mentor.Mentordata',$data);
    }
    public function changestatusmentor(Request $request){
        $id = $request->mentor_id;
        // echo "<pre>";print_r($id);die();
        $status = Mentor::find($id);
        // echo "<pre>";print_r($status);die();
        if($status->Status==1) {
            $data=[
                'status'=>0
            ];
        } else {
            $data =[
                'status'=>1
            ];
        }
         // echo "<pre>";print_r($data);die();
        Mentor::where('id',$id)->update($data);
        return redirect('Mentordata');
    }

    public function deletementor($mentor_id){
        DB::table('user')->where('id',$mentor_id)->delete();
        return redirect('Mentordata');
    }

    public function changestatusstudent(Request $request){
        $student_id = $request->students_id;
        $student_status = DB::table('tbl_user')->where('id',$student_id)->first();
        if($student_status->Status==1){
            $data =[
                'status'=>0
            ];
        } else {
            $data =[
                'status'=>1
            ];
        }
        DB::table('tbl_user')->where('id',$student_id)->update($data);
        return redirect('Studentdata');
    }
    public function deleteStudent($std_id){
        DB::table('tbl_user')->where('id',$std_id)->delete();
        return redirect('Studentdata');
    }
    public function admin_profile(Request $request){
        $id = $request->session()->get('admin_id');
        $data['admin_data'] = DB::table('_admin')->where('id',$id)->first();
        return view('Admin.admin_profile',$data);
    }

    public function adminUpdateProfile(Request $request){
        $admin_id = $request->admin_id;
        if($request->hasFile('image')){
            $image = $request->file('image');
            $fileimage = time().'.'.$image->getClientOriginalExtension();
            $image->move('admin_logo/',$fileimage);
        } else {
            $fileimage = $request->editimage;
        }
        $data = [
            'image'=>$fileimage,
            'admin_name'=>$request->name,
            'admin_email'=>$request->email,
            'mobile_number'=>$request->mobile,
            'address'=>$request->address,
        ];
        DB::table('_admin')->where('id',$admin_id)->update($data);
        
        return redirect('admin/Profile');
    }

    public function logout(){
        session::flush();
        return redirect('adminLogin');
    }

    public function changePass(){
        return view('Admin.changepass');
    }

    public function updatePass(Request $request) {
        $admin_id = session()->get('admin_id');
        $oldpass = $request->oldpass;
        $checkOldPass = DB::table('_admin')->where('enable_password',$oldpass)->where('id',$admin_id)->count();
        if($checkOldPass> 0){
            $data = [
                'admin_password'=>md5($request->newpass),
                'enable_password'=>$request->newpass,
            ];
            DB::table('_admin')->where('id',$admin_id)->update($data);
            echo "0";
        } else {
            echo "1";
        }
    }

    public function mentorform() {
        return view('Admin.mentor.mentorform');
    }

    public function add_mentor(Request $request) {
        $id=base64_decode($request->key);
        $data['mentor']=Mentor::find($id);
        return view('Admin.mentor.add_mentor',$data);
    }

    public function mentorDataInsert(Request $request){
        
        $id=$request->id;
        
        if($request->hasFile('myfile')){
            $image = $request->file('myfile');
            $fileimage = rand().'.'.$image->getClientOriginalExtension();
            $image->move('admin_logo/',$fileimage);
        }
        else
        {
            $fileimage=$request->editimage;
        }
        $data =[
            'mentor_image'=>$fileimage,
            'mentor_name'=>$request->name,
            'mentor_email'=>$request->email,
            'mentor_password'=>$request->Password,
            'mentor_phone_number'=>$request->mobile,
            'mentor_address'=>$request->address,
            'mentor_function'=>$request->job,
        ];
        $check=Mentor::find($id)->count();
        
        if($check>0)
        {
            Mentor::where('id',$id)->update($data);
             return redirect('Mentordata');
        }
        else
        {
            Mentor::insert($data);
            return redirect('Mentordata');    
        }
        
    }
}
        
