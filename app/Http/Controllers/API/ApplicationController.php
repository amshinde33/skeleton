<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Application;
use App\PushNotification;

class ApplicationController extends Controller
{
    public function app_list($id)
    {
        $application = Application::find($id);
        if ($application->is_active == 1) {
            $details = Application::select('id', 'app_name', 'app_key', 'sku', 'is_active')->find($id);
            //print_r($details);exit;
            return response()->json(['Details' => $details, 'Message' => 'Application is Activated.', 'Status' => 'Success'], 200);
        } else {
            return response()->json(['Message' => 'Application is Deactivated.', 'Status' => 'Failure'], 401);
        }
    }
    public function push_notification($id)
    {
        $current_id = PushNotification::select('app_id')->where('app_id', '=', $id)->exists();
        if ($current_id) {
            $pushNotification = PushNotification::select('id', 'app_id', 'title', 'detail', 'date_time', 'is_send')
                ->where('app_id', '=', $id)
                ->where('is_delete', '=', 0)
                ->get();
            return response()->json(['Details' => $pushNotification, 'Message' => 'Notification list of application ' . $id . '.', 'Status' => 'Success'], 200);
        } else {
            return response()->json(['Message' => 'Application Id is Invalid.', 'Status' => 'Failure'], 401);
        }
    }
}
