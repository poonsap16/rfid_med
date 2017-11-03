<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
use App\Activity;

class ActivitiesController extends Controller
{

    public function index()
    {
        $activities = \App\Activity::all();
        //return $activities;
        return view('activities.activities', compact('activities'));
    }

    public function create()
    {
        return view('activities.create');
    }

    public function store(Request $request)
    {
      $data = $request->all();
      // return $data;
      Activity::create($data);
      return back();
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
      $data = Activity::find($id);
      return view('activities.edit', compact('data','id'));

    }

    public function update(Request $request, $id)
    {
        //$data = $request->all();
        //return $data;
         $data = Activity::find($id);
         $data->update($request->all());
         return back();
    }

    public function destroy($id)
    {
        //
    }

}
