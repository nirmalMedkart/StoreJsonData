<?php

namespace App\Http\Controllers;

use App\Models\Config;
use App\Http\Requests\StoreConfigRequest;
use App\Http\Requests\UpdateConfigRequest;
use Illuminate\Http\Request;

class ConfigController extends Controller
{
    public function get(){
        $data = Config::all();
        return $data;
    }

    public function insert(Request $request)
    {
        $data = new Config();
        $data->com_id = $request->com_id;
        $data->config =json_encode( $request->config);
        $data->save();
        return response()->json(['Success'=>'Inserted']);
    }

    public function edit($id,Request $request)
    {
        $data = Config::find($id);
        $data->com_id = $request->com_id;
        $data->config =json_encode($request->config);
        $data->save();
        return response()->json(['Success'=>'Updated']);
    }

    public function delete($id)
    {
        $data = Config::find($id);
        $data->delete();
        return response()->json(['Success'=> 'Deleted']);
    }
}
