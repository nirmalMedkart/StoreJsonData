<?php

namespace App\Http\Controllers;

use App\Models\Components;
use App\Http\Requests\StoreComponentsRequest;
use App\Http\Requests\UpdateComponentsRequest;
use Illuminate\Http\Request;

class ComponentsController extends Controller
{
    public function get(){
        $data = Components::all();
        return $data;
    }

    public function insert(Request $request)
    {
        $data = new Components();
        $data->page_id = $request->page_id;
        $data->position = $request->position;
        $data->type = $request->type;
        $data->pinned = $request->pinned;
        $data->save();
        return response()->json(['Success'=>'Inserted']);
    }

    public function edit($id,Request $request)
    {
        $data = Components::find($id);
        $data->page_id = $request->page_id;
        $data->position = $request->position;
        $data->type = $request->type;
        $data->pinned = $request->pinned;
        $data->save();
        return response()->json(['Success'=>'Updated']);
    }

    public function delete($id)
    {
        $data = Components::find($id);
        $data->delete();
        return response()->json(['Success'=> 'Deleted']);
    }
}
