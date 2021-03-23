<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\API\AppSession;
use Illuminate\Support\Facades\DB;
use  Illuminate\Database\Eloquent\Collection;

class AppSessionController extends Controller
{
    public function create(Request $request)
    {
        //DB::enableQueryLog();
        $app_session = AppSession::insert([
            'client_id' => $request->client_id,
            'app_id' => $request->app_id,
            'device_id' => $request->device_id
        ]);
        return response()->json(['Details' => $app_session, 'Message' => 'Data created successfully', 'Status' => 'Success'], 201);

        //   $query = DB::getQueryLog();
        //  print_r($query);
        //  exit;
    }

    public function create_update(Request $request, AppSession $app_session, $id)
    {
        $current_app_id = AppSession::select('app_id')->where('app_id', '=', $id)->exists();
        if ($current_app_id == 1) {
            $app_id =  AppSession::select('id')->where('app_id', '=', $id)->value('id');
            // echo $app_id;exit;
            $app_session = AppSession::find($app_id);
            // var_dump($app_session); exit;
            // DB::enableQueryLog();
            $details = $app_session->update([
                $request->input('app_id'),
                $request->input('client_id'),
                $request->input('device_id')
            ]);
            // $xyz=   $app_session->update($request->only(['app_id', 'client_id','device_id']));
            //  $query = DB::getQueryLog();
            // print_r($query);
            // exit;
            return response()->json(['Details' => $details, 'Message' => 'Data Updated Successfully', 'Status' => 'Success'], 200);
        } else {
            $app_session = AppSession::insert([
                'client_id' => $request->client_id,
                'app_id' => $request->app_id,
                'device_id' => $request->device_id
            ]);
            return response()->json(['Details' => $app_session, 'Message' => 'Data created successfully', 'Status' => 'Success'], 201);
        }
    }
}
