<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;
use App\Models\AdminsRole;
use App\Models\Vendors;
use App\Models\VendorsBusinessDetail;
use App\Models\VendorsPaymentDetail;
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

    // Update Vendor Details
    public function updateVendorDetails(Request $request, $slug){
        if($slug=="personal"){

            if($request->isMethod('post')){
                $data = $request->all();

                // echo "<pre>"; print_r($data); die;
                $rules = [
                    'vendor_name' => 'required|max:255',
                    'vendor_mobile' => 'required|numeric|digits:10',
                    'vendor_county' => 'required',
                    'physical_address' => 'required',
                    'vendor_niche' => 'required',
                    'vendor_image' => 'image',
                ];
        
                $customMessages = [
                    
                    'vendor_name.required' => 'Name is required',
                    'vendor_mobile.required' => 'Mobile is required',
                    'vendor_mobile.numeric' => 'Valid phone number is required',
                    'vendor_mobile.digits' => 'Valid phone number is required',
                    'vendor_county.required' => 'County is required',
                    'physical_address.required' => 'Physical address is required',
                    'vendor_niche.required' => 'Niche is required',
                    'vendor_image.image' => 'Valid image is required',
                    
                ];
        
                $this->validate($request, $rules, $customMessages);
        
                if($request->hasFile('vendor_image')){
                    $manager = new ImageManager(new Driver());
        
                    $image_tmp = $request->file('vendor_image');
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
                
               
        
                // Update in Admin Table
                Admin::where('id', Auth::guard('admin')->user()->id)->update(['name'=>$data['vendor_name'],'mobile'=>$data['vendor_mobile'],'image'=>$imageName]);

                // Update in Vendors Table
                Vendors::where('id', Auth::guard('admin')->user()->vendor_id)->update(['name'=>$data['vendor_name'], 'mobile'=>$data['vendor_mobile'], 'county'=>$data['vendor_county'], 'physical_address' => $data['physical_address'], 'niche'=>$data['vendor_niche']]);
        
                
                return redirect()->back()->with('success_message', 'Admin Details updated Succesfully');
        
            }
            $vendorDetails = Vendors::where('id', Auth::guard('admin')->user()->vendor_id)->first()->toArray();


        }elseif($slug=="business"){
            $vendorDetails = VendorsBusinessDetail::where('vendor_id', Auth::guard('admin')->user()->vendor_id)->first()->toArray();
            // dd($vendorDetails);
            if($request->isMethod('post')){
                $data = $request->all();

                // echo "<pre>"; print_r($data); die;
                $rules = [
                    'garage_name' => 'required|max:255',
                    'garage_address' => 'required',
                    'garage_county' => 'required',
                    'garage_mobile' => 'required|numeric',
                    'garage_email' => 'required|email',
                    'address_proof' => 'required',
                    'service' => 'required',
                    'address_proof_image' => 'image',
                ];
        
                $customMessages = [
                    
                    'garage_name.required' => 'Name is required',
                    'garage_mobile.required' => 'Mobile is required',
                    'garage_mobile.numeric' => 'Valid phone number is required',
                    
                    'garage_county.required' => 'County is required',
                    'garage_address.required' => 'Physical address is required',
                    'garage_email.required' => 'Garage/Mechanic email is required',
                    'garage_email.email' => 'Valid Email is required', 
                    'garage_niche.required' => 'Niche is required',
                    'address_proof.required' => 'Address Proof Choice is required',
                    'service.required' => 'Service field is required',
                    'address_proof_image.image' => 'Valid image is required',
                    
                    
                ];
        
                $this->validate($request, $rules, $customMessages);
        
                if($request->hasFile('address_proof_image')){
                    $manager = new ImageManager(new Driver());
        
                    $image_tmp = $request->file('address_proof_image');
                    if($image_tmp->isValid()){
                        // Get image extension
        
                        $extension = $image_tmp->getClientOriginalExtension();
        
                        // Generate new image name
                        $imageName = rand(111,99999).'.'.$extension;
                        $image_path = 'admin/images/proofs/'.$imageName;
                        
                        $image = $manager->read($image_tmp);
                        $image->scale(width: 300);
                        $image->toPng()->save($image_path);
                    }
        
                }elseif (!empty($data['current_address_image'])) {
                    $imageName = $data['current_address_image'];
                }else{
                    $imageName = "";
                }
                
               
        


                // Update in Vendors Table
                VendorsBusinessDetail::where('vendor_id', Auth::guard('admin')->user()->vendor_id)->update(['garage_name'=>$data['garage_name'], 'service'=>$data['service'], 'garage_mobile'=>$data['garage_mobile'], 'garage_county'=>$data['garage_county'], 'garage_address' => $data['garage_address'], 'garage_email'=>$data['garage_email'], 'address_proof' => $data['address_proof'] , 'address_proof_image' => $imageName]);
        
                
                return redirect()->back()->with('success_message', 'Business details updated succesfully');
        
            }


        }else if($slug=="payment"){
            if($request->isMethod('post')){
                $data = $request->all();

                // echo "<pre>"; print_r($data); die;
                $rules = [
                    'mpesaname' => 'required|max:255',
                    'mpesamobile' => 'required|numeric',
                    
                ];
        
                $customMessages = [
                    
                    'mpesaname.required' => 'Mpesa name is required',
                    'mpesamobile.required' => 'Mpesa mobile number is required',
                    'mpesamobile.numeric' => 'Valid phone number is required',
                    
                    
                ];
        
                $this->validate($request, $rules, $customMessages);
        
                
               
        


                // Update in Vendors Table
                VendorsPaymentDetail::where('vendor_id', Auth::guard('admin')->user()->vendor_id)->update(['mpesaname'=>$data['mpesaname'], 'mpesamobile'=>$data['mpesamobile']]);
        
                
                return redirect()->back()->with('success_message', 'Payment details updated succesfully');
        
            }

            $vendorDetails = VendorsPaymentDetail::where('vendor_id', Auth::guard('admin')->user()->vendor_id)->first()->toArray();
          

        }
        return view('admin.settings.update_vendor_details')->with(compact('slug', 'vendorDetails'));

    }
    // Display Sub admins
    public function subadmins(){
        Session::put('page', 'subadmins');
       $subadmins = Admin::where('type','subadmin')->get();
       
       return view('admin.subadmins.subadmins')->with(compact('subadmins'));
    }

    // Update subadmin status
    public function updateSubadminStatus(Request $request){
        if($request->ajax()){
            $data = $request->all();

            if($data['status']=="Active"){
                
                $status = 0;

            }else{
                $status =1;
            }

            Admin::where('id', $data['subadmin_id'])->update(['status'=>$status]);
            return response()->json(['status'=>$status, 'page_id'=>$data['subadmin_id']]);

        }
    }

    // Add Edit Subadmin
    public function addEditSubadmin(Request $request, $id=null){
        if($id==""){
            $title = "Add subadmin";
            $subadmindata = new Admin;
            $message = "Sub admin added succesfully";
        }else{
            $title = "Edit subadmin";
            $subadmindata = Admin::find($id);
            $message = "Sub admin updated succesfully";

        }
        if($request->isMethod('post')){
            $data = $request->all();
            // echo "<pre>"; print_r($data); die;

            if($id == ""){
                $subadminCount = Admin::where('email', $data['email'])->count();
                if($subadminCount>0){
                    return redirect()->back()->with('error_message', 'Subadmin already exists');
                }
            }
            // Sub Admin Validation
            $rules = [
                'name' => 'required',
                'mobile' => 'required|numeric',
                'image' => 'image'
            ];

            $customMessages=[
                'name.required' => 'Name is required',
                'mobile.required' => 'Mobile is required',
                'mobile.numeric' => 'Valid phone number is required',
                'image.image' => 'Valid Image is required'

            ];

            $this->validate($request, $rules, $customMessages);
      
        if($request->hasFile('image')){
            $manager = new ImageManager(new Driver());

            $imageTmp = $request->file('image');

            if($imageTmp->isValid()){

                $extension = $imageTmp->getClientOriginalExtension();

                $image_name = rand(111, 99999).'.'.$extension;

                $imagePath = 'admin/images/photos/'.$image_name;

                $image = $manager->read($imageTmp);

                $image->scaleDown(width:250);
                $image->scaleDown(height: 180);
                $image->toPng()->save($imagePath);


            }
        }else if(!empty($data['current_image'])){
            $image_name = $data['current_image'];
        }else{
            $image_name = "";
        }

        $subadmindata->image = $image_name;
        $subadmindata->name = $data['name'];
        $subadmindata->mobile = $data['mobile'];
        if($id==""){
            $subadmindata->email = $data['email'];
            $subadmindata->type = 'subadmin';
        }
        if($data['password'] != ""){
            $subadmindata->password = bcrypt($data['password']);
        }

        $subadmindata->save();

        return redirect('admin/subadmins')->with('success_message', $message);




    }

        return view('admin.subadmins.add_edit_subadmin')->with(compact('title','subadmindata'));
    }

    // Delete Subadmin
    public function deleteSubadmin($id){

        Admin::where('id', $id)->delete();

        return redirect()->back()->with('success_message', 'Subadmin deleted succesfully');

    }

    // Set subadmin Roles and Permissons
    public function updateRole($id, Request $request){
       

        if($request->isMethod('post')){
            $data = $request->all();
            // echo "<pre>"; print_r($data); die;

            // Delete all earlier roles
            AdminsRole::where('admin_id', $id)->delete();

            foreach ($data as $key => $value) {

                if(isset($value['view'])){
                    $view = $value['view'];
                }else{
                    $view = 0;
                }
                if(isset($value['edit'])){
                    $edit = $value['edit'];
                }else{
                    $edit = 0;
                }
                if(isset($value['full'])){
                    $full = $value['full'];
                }else{
                    $full = 0;
                }
            }

            

            $role = new AdminsRole;
            $role->admin_id = $id;
            $role->module = $key;
            $role->view_access = $view;
            $role->edit_access = $edit;
            $role->full_access = $full;
            $role->save();

           
            $message = "Subadmin roles updated succesfully";

            return redirect()->back()->with('success_message', $message);
           
        }

        $subadminRoles = AdminsRole::where('admin_id', $id)->get()->toArray();
        $subadminDetails = Admin::where('id', $id)->first()->toArray();
        $title = "Update ".$subadminDetails['name']." subadmin roles/permissons";

      


        return view('admin.subadmins.update_roles')->with(compact('title', 'id', 'subadminRoles' ));
    }

    public function admins($type=null){

       $admins = Admin::query();
       if(!empty($type)){

        $admins = $admins->where('type', $type);
        $title = ucfirst($type)."s";
        

       }else{
        $title = "All Admins/Subadmins/Vendors";
       }

       $admins = $admins->get()->toArray();
      return view('admin.admins.admins')->with(compact('title','admins'));

    }
}
   
   

