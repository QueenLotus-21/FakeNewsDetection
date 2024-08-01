<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use SebastianBergmann\CodeCoverage\Exception;

class userController extends Controller
{
     
    protected $admin;
    public function __construct()
    {
        // $this->middleware('auth', ['except' => ['adminSignup']]);
            $this->admin=new Admin();
            
    }
    //admins
    
public function getAdmins(){
    $users= Admin::all();
     return view('admin.admin.manageAdmin',compact('users'));       
    }
    public function editA($id){
        $user =Admin::find($id);
         return view('admin.admin.editAdmin',compact('user'));     
        }
        public function editAdmin(Request $request,$id){
            //  $user=User::where('id',$id);
              if(Admin::where('id',$id)->exists()){
              $user =Admin::find($id);
              $user->username = $request->username;
              $user->email = $request->email;
              $user->role = $request->role;
              $user->save();
          return redirect('admin/manageAdmin')->with('message','User updated successfully');
          }
          else{
            return redirect('admin/manageAdmin')->with('error','Something went wrong');

          }
          }
          
     public function deleteA($id){
            return redirect('/admin/manageAdmin');
    }    

        public function deleteAdmin($id){
            $admin =Admin::find($id)->delete();
            return redirect('/admin/manageAdmin')->with('message','Admin Deleted successfully');
        }    
public function createAdminAcc(){
    return view('admin.admin.createAccount');       
    }

public function createAdmin(Request $request){
    $user= Auth::user();
    DB::beginTransaction();
    try{
        if(auth()->user()->type=='SuperAdmin'){
        
            $user=$this->admin->create([
                'username'=>$request->name,
                'email'=>$request->email,
                'password' => Hash::make($request->password),
              //  'password'=>$request->password,       
                'role'=>$request->role ,
               
            ]);
             }
        else{
              return  redirect('/admin/createAdmin')->with('error',' You are not Super Admin to create Account');
        }
           
            if($user){
                DB::commit();
                return  redirect('/admin/createAdmin')->with('message','Admin Account Created successfully');
            }

        }
        
 catch(Exception $ex){
      DB::rollback();
 }     
    }

    //users
public function getUser(){

    $users= User::all();
    return view('admin.users.manageUser',compact('users'));
        //$companys=Company::where('role','')->orderBy('id','desc')->get();
    }    
public function getUsers(){

   $users= User::all();
   return view('admin.users.manageUsers',compact('users'));
    //$companys=Company::where('role','')->orderBy('id','desc')->get();
}
//edit user

public function editUser($id){
    $user =User::find($id);
    return view('admin.users.editUser',compact('user'));
}
public function updateUser(Request $request,$id){
  //  $user=User::where('id',$id);
    if(User::where('id',$id)->exists()){
    $user =User::find($id);
    $user->name = $request->name;
    $user->email = $request->email;
    $user->Ban = $request->Ban;
    $user->save();
    return redirect('/manageUser')->with('message','User updated successfully');

}
else{
    return redirect('/manageAdmin')->with('error','User not found');

}
}

//ban
public function banB($id){
    $user =User::find($id);
    return view('admin.users.BanBloger',compact('user'));
}
public function ban(Request $request,$id){
    //  $user=User::where('id',$id);
      if(User::where('id',$id)->exists()){
      $user =User::find($id);
    //   $user->name = $request->name;
    //   $user->email = $request->email;
      $user->Ban = $request->Ban;
      $user->save();
      return redirect('admin/manageAdmin')->with('message','Bloger Ban successfully');
  }
  else{
  return response()->json([
      "message"=>"user not found"
  ],404);
  }
  }

}

