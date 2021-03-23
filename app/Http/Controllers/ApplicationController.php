<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Application;
use App\User;
use App\PushNotification;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ApplicationController extends Controller
{
    public function list()
    {
        $page_title = 'Application List';
        $page_description = 'This is your application list';
        $applications = Application::all();
        // echo $applications;die;
        //   print_r($applications);
        return view('application.list', compact('page_title', 'applications'));
    }
    public function create(Request $request)
    {
        $data = $this->validate($request, [
            'app_name' => 'required',
            'app_key' => 'required',
            'sku' => 'required',
        ]);
        Application::create([
            'app_name' => $request->app_name,
            'app_key' => $request->app_key,
            'sku' => $request->sku
        ]);
        return redirect('appList');
    }

    public function edit($id)
    {
        $page_title = 'Application Edit';
        $applications = Application::find($id);
        return view('application.edit', ['page_title' => $page_title, 'applications' => $applications]);
    }

    public function update(Request $request, $id)
    {
        $data = $this->validate($request, [
            'app_name' => 'required',
            'app_key' => 'required',
            'sku' => 'required',
        ]);
        $app_name = $request->input('app_name');
        $app_key = $request->input('app_key');
        $sku = $request->input('sku');
        $data = array('app_name' => $app_name, "app_key" => $app_key,  "sku" => $sku,);
        $applications =  Application::where('id', $id)->update($data);
        return redirect('appList');
    }

    public function applicationPage()
    {
        $page_title = 'Add Application';
        return view('application.add_application', compact('page_title'));
    }

    public function status(Request $request)
    {
        $id = $request->input('scrapid_status');
        $application = Application::where('id', $id)
            ->select('applications.*')
            ->get()->first();
        if ($application->is_active == 1) {
            Application::where('id', $id)->update(['is_active' => 0]);
            //echo $user;
            return redirect('appList');
        } else {
            Application::where('id', $id)->update(['is_active' => 1]);
            return redirect('appList');
        }
    }

    public function create_push_notification(Request $request, $id)
    {
        $id = $request->input('scrapid_notification');
        $data = $this->validate($request, [
            'title' => 'required',
            'detail' => 'required',
            'date_time' => 'required',
        ]);
        PushNotification::create([
            'app_id' => $request->input('scrapid_notification'),
            'title' => $request->title,
            'detail' => $request->detail,
            'date_time' => $request->date_time
        ]);
        return redirect('appNotificationList/' . $id);
    }

    public function notification_list($id)
    {
        // var_dump($request);exit;
        $page_title = 'Notification List';
        $page_description = 'This is your notification list';
        // $id = $request->input('scrapid_notification');
        //echo $id;exit;
        // DB::enableQueryLog();
        $pushNotification = PushNotification::where([['is_delete', '=', 0], ['app_id', '=', $id]])->get();
        //  $user = User::get();
        //  $query = DB::getQueryLog();
        //  print_r($query);
        //  exit;
        return view('application.notification_list', compact('page_title', 'pushNotification'));
    }


    public function edit_notification($id)
    {
        $page_title = 'Notification Edit';
        $pushNotifications = PushNotification::find($id);
        return view('application.notification_edit', ['page_title' => $page_title, 'pushNotifications' => $pushNotifications]);
    }

    public function update_notification(Request $request, $id)
    {
        // DB::enableQueryLog();
         $app_id =PushNotification::select('app_id')->where('id','=',$id)->value('app_id');
        // $app_id =PushNotification::select('app_id')->find($id);
        $data = $this->validate($request, [
            'title' => 'required',
            'detail' => 'required',
            'date_time' => 'required',
        ]);
        $title = $request->input('title');
        $detail = $request->input('detail');
        $date_time = $request->input('date_time');
        $data = array('title' => $title, "detail" => $detail,  "date_time" => $date_time,);
        $PushNotification =  PushNotification::where('id', $id)->update($data);
        return redirect('appNotificationList/' . $app_id);
    }

    public function destroy_notification(Request $request)
    {
        $row_id = $request->input('scrapId');
        $app_id = PushNotification::select('app_id')->where('id', '=', $row_id)->value('app_id');
        // echo $id;exit;
        $pushNotification = PushNotification::where('id', $row_id)->update(['is_delete' => 1]);
        echo "Record deleted successfully.<br/>";
        // echo $user; 
        return redirect('appNotificationList/' . $app_id);
    }
}
