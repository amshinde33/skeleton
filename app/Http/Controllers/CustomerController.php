<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\userdetails;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class CustomerController extends Controller
{
    public function list()
    {
        $page_title = 'Customer List';
        $page_description = 'This is your customer list';
        $customers = DB::table('users')
            ->join('userdetails', 'users.id', '=', 'userdetails.user_id')
            ->select('users.name', 'users.email',  'userdetails.id', 'userdetails.fname', 'userdetails.lname', 'userdetails.personalphoneno', 'userdetails.workphoneno', 'userdetails.country', 'userdetails.orgnization', 'userdetails.website', 'userdetails.file', 'userdetails.aboutme', 'userdetails.facebook', 'userdetails.linkedin', 'userdetails.twitter', 'userdetails.github')
            ->where([['users.user_role', '=', '2'], ['users.is_delete', '=', '0']])
            ->get();
        // print_r($customers);die;
        return view('customer.list', compact('page_title', 'customers'));
    }

    public function edit($id)
    {
        $customers = userdetails::find($id);
        $page_title = 'Customer Edit ';
        //echo $customers;
        //exit;
        return view('customer.edit', ['page_title' => $page_title, 'customers' => $customers]);
    }
    public function update(Request $request, $id)
    {
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
        $data = array('fname' => $fname, "lname" => $lname,  "personalphoneno" => $personalphoneno, "workphoneno" => $workphoneno, "country" => $country, 'file' => $file, "orgnization" => $orgnization, "website" => $website, 'aboutme' => $aboutme, 'facebook' => $facebook, 'linkedin' => $linkedin, 'twitter' => $twitter, 'github' => $github);
        $customers = userdetails::where('id', $id)->update($data);
        return redirect('customerList');
    }

    public function status(Request $request)
    {
        $id = $request->input('scrapid_status');
        // DB::enableQueryLog();
        $customer = DB::table('users')
            ->join('userdetails', 'users.id', '=', 'userdetails.user_id')
            ->where([['user_role', '=', '2'], ['userdetails.id', '=', $id]])
            ->select('users.*')
            ->get()->first();
        //  $user = User::get();
        //  $query = DB::getQueryLog(); print_r($query);
        //  exit;
        if ($customer->is_active == 1) {
            $customer = DB::table('users')
                ->join('userdetails', 'users.id', '=', 'userdetails.user_id')
                ->where([['user_role', '=', '2'], ['userdetails.id', '=', $id]])
                ->update(['users.is_active' => 0]);
            // print_r($customer);
            return redirect('customerList');
        } else {
            $customer = DB::table('users')
                ->join('userdetails', 'users.id', '=', 'userdetails.user_id')
                ->where([['user_role', '=', '2'], ['userdetails.id', '=', $id]])
                ->update(['users.is_active' => 1]);
            // print_r($customer);
            return redirect('customerList');
        }
    }
}
