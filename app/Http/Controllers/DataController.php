<?php

namespace App\Http\Controllers;

use App\Models\Data;
use App\Http\Requests\StoreDataRequest;
use App\Http\Requests\UpdateDataRequest;
use Illuminate\Http\Request;

class DataController extends Controller
{

    public function get(){
        $data = Data::all();
        return $data;
    }

    public function insert(Request $request)
    {
        $data = new Data();
        $data->name = $request->name;
        $data->save();
        return response()->json(['Success'=>'Inserted']);
    }

    public function edit($id,Request $request)
    {
        $data = Data::find($id);
        $data->name = $request->name;
        $data->save();
        return response()->json(['Success'=>'Updated']);
    }

    public function delete($id)
    {
        $data = Data::find($id);
        $data->delete();
        return response()->json(['Success'=> 'Deleted']);
    }
}
