<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Application;
use App\PushNotification;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        DB::enableQueryLog();
        // $year_data = DB::table('push_notifications')
        //     ->select(DB::raw(" DATE(updated_at) as Date, MONTHNAME(updated_at) as 'MonthName', COUNT(id) as Count"))
        //     ->groupBy("MonthName")
        //     ->orderBY('updated_at', 'asc')
        //     ->where([['is_delete', '=', 0], ['is_send', '=', 1]])
        //     ->get()
        //     ->toArray();
    //     print_r($year_data);
    //  $query = DB::getQueryLog();
    //      print_r($query);
    //      exit;

        $month_data = DB::table('push_notifications')
            ->select(DB::raw(" DATE(updated_at) as Date, DAYNAME(updated_at) as 'DayName', COUNT(id) as Count"))
            ->groupBy("DayName")
            ->orderBY('updated_at', 'asc')
            ->where([['is_delete', '=', 0], ['is_send', '=', 1]])
            ->get();

        $date = [];
        $count = [];
        foreach ($month_data as $data) {
             
            $date[] = $data->Date;
            $count[] = $data->Count;
        }
      


//var_dump($count);exit;
        $page_title = 'Dashboard';
        $user_count = User::where('is_delete', '=', 0)->count();
        $customer_count = User::where([['user_role', '=', 2], ['is_delete', '=', 0]])->count();
        $application_count = Application::where('is_delete', '=', 0)->count();
        $push_notification_count = PushNotification::where('is_delete', '=', 0)->count();
        $push_notification_send_count = PushNotification::where([['is_delete', '=', 0], ['is_send', '=', 1]])->count();
        $push_notification_pending_count = PushNotification::where([['is_delete', '=', 0], ['is_send', '=', 0]])->count();
        return view('pages.dashboard', compact('page_title', 'page_description', 'user_count', 'customer_count', 'application_count', 'push_notification_count', 'push_notification_send_count', 'push_notification_pending_count', 'month_data','date','count'));
    }
}
