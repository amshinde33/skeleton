<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\userdetails;
use App\User;
use App\UserRole;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    public function index()
    {
        $page_title = 'User Profile';
        $page_description = 'This is your user profile page';
        $user_id = Auth::id();
          $userdetails = DB::table('users')
            ->join('userdetails', 'users.id', '=', 'userdetails.user_id')
            ->where('user_id', $user_id)
            ->select('users.name', 'users.email',  'userdetails.id', 'userdetails.user_id', 'userdetails.fname', 'userdetails.lname', 'userdetails.personalphoneno', 'userdetails.workphoneno', 'userdetails.country', 'userdetails.orgnization', 'userdetails.website', 'userdetails.file', 'userdetails.aboutme', 'userdetails.facebook', 'userdetails.linkedin', 'userdetails.twitter', 'userdetails.github')
            ->get()->first();
        return view('user.profile', compact('page_title', 'user_id',  'userdetails'));
    }
    public function list()
    {
        $page_title = 'User List';
        $page_description = 'This is your user list';
        $userdetails = DB::table('users')
            ->join('userdetails', 'users.id', '=', 'userdetails.user_id')
            ->select('users.name', 'users.email',  'users.id', 'userdetails.fname', 'userdetails.lname', 'userdetails.personalphoneno', 'userdetails.workphoneno', 'userdetails.country', 'userdetails.orgnization', 'userdetails.website', 'userdetails.file', 'userdetails.aboutme', 'userdetails.facebook', 'userdetails.linkedin', 'userdetails.twitter', 'userdetails.github')
            ->where('users.is_delete', '=', 0)
            ->get();
        // print_r($userdetails);die;
        return view('user.list', compact('page_title',  'userdetails'));
    }

    public function update(Request $request)
    {
        $user_id = Auth::id();
        if (isset($user_id) && ($user_id == Auth::id())  != '') {
            $data = $this->validate($request, [
                'fname' => 'required',
                'lname' => 'required',
                'personalphoneno' => 'required|min:11|numeric',
                'workphoneno' => 'required|min:11|numeric',
                'country' => 'required',
                'orgnization' => 'required',
                'website' => 'required',
                'aboutme' => 'required',
                'facebook' => 'required',
                'linkedin' => 'required',
                'twitter' => 'required',
                'github' => 'required'
            ]);
            $fname = $request->input('fname');
            $lname = $request->input('lname');
            $personalphoneno = $request->input('personalphoneno');
            $workphoneno = $request->input('workphoneno');
            $country = $request->input('country');
            // if($request->hash_file('file'))
            // {
            //     $file = $request->file('file');
            //     $extension = $file->getFileOriginalExtension;
            //     $filename = time(). '.'.$extension;
            //     $file->move('',$filename);
            //     $file = $filename;
            // }
            // DB::enableQueryLog();
            $file = $request->input('file');
            $orgnization = $request->input('orgnization');
            $website = $request->input('website');
            $aboutme = $request->input('aboutme');
            $facebook = $request->input('facebook');
            $linkedin = $request->input('linkedin');
            $twitter = $request->input('twitter');
            $github = $request->input('github');
            $user_id = Auth::id();
            $data = array('fname' => $fname, "lname" => $lname,  "personalphoneno" => $personalphoneno, "workphoneno" => $workphoneno, "country" => $country, 'file' => $file, "orgnization" => $orgnization, "website" => $website, 'aboutme' => $aboutme, 'facebook' => $facebook, 'linkedin' => $linkedin, 'twitter' => $twitter, 'github' => $github);
            $userdetails =  DB::table('userdetails')->where('user_id', $user_id)->update($data);
            return redirect('userlist');
        }
    }
    public function insert(Request $request)
    {
        $user_id = Auth::id();
        $data = $this->validate($request, [
            'fname' => 'required',
            'lname' => 'required',
            'personalphoneno' => 'required|min:11|numeric',
            'workphoneno' => 'required|min:11|numeric',
            'country' => 'required',
            'orgnization' => 'required',
            'website' => 'required',
            'aboutme' => 'required',
            'facebook' => 'required',
            'linkedin' => 'required',
            'twitter' => 'required',
            'github' => 'required'
        ]);
        $fname = $request->input('fname');
        $lname = $request->input('lname');
        $personalphoneno = $request->input('personalphoneno');
        $workphoneno = $request->input('workphoneno');
        $country = $request->input('country');
        $file = $request->input('file');
        $orgnization = $request->input('orgnization');
        $website = $request->input('website');
        $aboutme = $request->input('aboutme');
        $facebook = $request->input('facebook');
        $linkedin = $request->input('linkedin');
        $twitter = $request->input('twitter');
        $github = $request->input('github');
        $userdetails = array('fname' => $fname, "lname" => $lname, "user_id" => $user_id, "personalphoneno" => $personalphoneno, "workphoneno" => $workphoneno, "country" => $country, 'file' => $file, "orgnization" => $orgnization, "website" => $website, 'aboutme' => $aboutme, 'facebook' => $facebook, 'linkedin' => $linkedin, 'twitter' => $twitter, 'github' => $github);
        //  var_dump($data);
        //  exit;
        userdetails::insert($userdetails);
        return redirect('userlist');
    }

    public function passwordPage()
    {
        $page_title = 'Change Password';
        $page_description = 'This is your password page';
        return view('user.password', compact('page_title'));
    }

    public function updatePassword(Request $request)
    {

        $id = Auth::id();
        $user = User::all()->first();
        $validator = $this->validate($request, [
            'oldpassword' => 'required|password',
            'newpassword' => 'required|min:8',
            'confirmpassword' => 'required_with:newpassword|same:newpassword|min:8'
        ]);
        $oldpassword = $request->input('oldpassword');
        $newpassword = $request->input('newpassword');
        $confirmpassword = $request->input('confirmpassword');
        if (!Hash::check(bcrypt($oldpassword), $user->password)) {
            if ($newpassword == $confirmpassword) {
                $UpdatePassword = User::where('id', $id)->update(['password' => bcrypt($confirmpassword)]);
                echo "match";
            }
            echo "Password is correct";
        } else {
            echo "Password is wrong";
        }
    }

    public function destroy(Request $request)
    {
        $id = $request->input('scrapId'); 
       // echo $id;
        $user = User::where('id', $id)->update(['is_delete' => 1]);
        echo "Record deleted successfully.<br/>";
        // echo $user; 
     //  return redirect('userlist');
    }


    public function status(Request $request)
    {
        $id = $request->input('scrapid_status');
        $user = DB::table('users')
            ->where('id', $id)
            ->select('users.*')
            ->get()->first();
        if ($user->is_active == 1) {
            DB::table('users')->where('id', $id)->update(['is_active' => 0]);
            return redirect('userlist');
        } else {

            DB::table('users')->where('id', $id)->update(['is_active' => 1]);
            return redirect('userlist');
        }
    }
   
    public function addUserPage()
    {
        $page_title = 'Add User';
        $page_description = 'This is your add user page';
        $user_roles= DB::table('user_roles')->select('id','name')->get();
       // print_r($user_roles);exit;
        
        return view('user.add_user', compact('page_title','user_roles'));
    }
   
    protected function addUser(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required|confirmed',
             'user_role' => 'required'
        ]);
             $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
             'user_role' => $request->user_role,
        ]);
        //echo $user;
        return redirect('home');
    }

    public function addUserRolePage()
    {
        $page_title = 'Add User Roles';
        $page_description = 'This is your add user roles page';
        return view('user.add_user_roles', compact('page_title'));
    }

    protected function addUserRoles(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required'
        ]);
             $user_role = UserRole::create([
            'name' => $request->name,
            'description' => $request->description
        ]);
        //echo $user;
        return redirect('userRolesList');
    }

    public function userRolesList()
    {
        $page_title = 'User Roles List';
        $page_description = 'This is your user roles list';
        $user_roles = UserRole::all();
        //echo $user_roles;
        //  print_r($user_roles);
        return view('user.list_user_roles', compact('page_title',  'user_roles'));
    }

}
