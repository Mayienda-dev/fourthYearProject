<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Support\Facades\Session;





class AdminController extends Controller
{
    // Admin Login
    public function login(Request $request){
        if($request->isMethod('post')){

            $data=request()->all();
            // echo "<pre>"; print_r($data); die;

            $rules = [
                'email' => 'required|email|max:255',
                'password' => 'required|max:40'
            ];

            $customMessages = [
                'email.email' => 'Valid email is required',
                'email.required' => 'Email is required',
                'password.required' => 'password is required'
            ];

            $this->validate($request, $rules, $customMessages);
            if(Auth::guard('admin')->attempt(['email'=>$data['email'], 'password'=>$data['password']])){
                // Remember Admin email and password 
                if(isset($data['remember'])&&!empty($data['remember'])){
                    setcookie("email", $data['email'],time()+3600);
                    setcookie("password",$data['password'],time()+3600);
                }else{
                    setcookie("email", "");
                    setcookie("password","");
                }

                return redirect('admin/dashboard');
            }else{
                return redirect()->back()->with('error_message', 'Invalid Email or password');
            }

        }
       return view('admin.login');
    } 
   
    
    // Admin Dashboard
    public function adminDashboard(){

        Session::put('page', 'dashboard');
        // echo "<pre>"; print_r(Auth::guard('admin')->user()); die;
        
        return view('admin.dashboard');
    }

    // Admin Logout
    public function logout(){
        Auth::guard('admin')->logout();

        return redirect('admin/login');
    }

    //Update Admin Password
    public function updatePassword(Request $request){
        Session::put('page', 'update-password');
        if($request->isMethod('post')){
            $data = $request->all();

            // Check if current password is correct
            if(Hash::check($data['current_pwd'], Auth::guard('admin')->user()->password)){
                // Check if new password and confirm password
                if($data['new_pwd']==$data['confirm_pwd']){

                    // Update new password
                    Admin::where('id', Auth::guard('admin')->user()->id)->update(['password'=>bcrypt($data['new_pwd'])]);

                    return redirect()->back()->with('success_message', 'Password has been updated Succesfully');

                }else{
                    return redirect()->back()->with('error_message','New Password and Confirm Password do not match');
                }

            }else{
                return redirect()->back()->with('error_message','Your current password is incorrect');
            }
        }
        return view('admin.settings.update_password');
    } 

    // Check current password
    public function checkCurrentPassword(Request $request){
        $data = $request->all();
        
        if(Hash::check($data['current_pwd'], Auth::guard('admin')->user()->password)){
            return "true";
        }else{
            return "false";
        }

    }

    // Update Admin Details
    public function updateDetails(Request $request){
        Session::put('page', 'update-details');
      if($request->isMethod('post')){
        
        $data = $request->all();
       
        $rules = [
            'admin_name' => 'required|max:255',
            'admin_mobile' => 'required|numeric|digits:10',
            'admin_image' => 'image',
        ];

        $customMessages = [
            
            'admin_name.required' => 'Name is required',
            'admin_mobile.required' => 'Mobile is required',
            'admin_mobile.numeric' => 'Valid phone number is required',
            'admin_mobile.digits' => 'Valid phone number is required',
            'admin_image.image' => 'Valid image is required',
            
        ];

        $this->validate($request, $rules, $customMessages);

        if($request->hasFile('admin_image')){
            $manager = new ImageManager(new Driver());

            $image_tmp = $request->file('admin_image');
            if($image_tmp->isValid()){
                // Get image extension

                $extension = $image_tmp->getClientOriginalExtension();

                // Generate new image name
                $imageName = rand(111,99999).'.'.$extension;
                $image_path = 'admin/images/photos/'.$imageName;
                
                $image = $manager->read($image_tmp);
                $image->scale(width: 300);
                $image->toPng()->save($image_path);
            }

        }elseif (!empty($data['current_image'])) {
            $imageName = $data['current_image'];
        }else{
            $imageName = "";
        }
        
       

        // Update Admin details
        Admin::where('email', Auth::guard('admin')->user()->email)->update(['name'=>$data['admin_name'],'mobile'=>$data['admin_mobile'],'image'=>$imageName]);

        
        return redirect()->back()->with('success_message', 'Admin Details updated Succesfully');


      }  
      return view('admin.settings.update_details');
    }
}
   
   

