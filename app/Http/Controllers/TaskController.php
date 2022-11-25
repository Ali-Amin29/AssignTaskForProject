<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->is_admin == 0)
        {
        $task=Task::get();
        $project=Project::get();
        return view('alltask',['tasks'=>$task,'projects'=>$project]);
        }
        else
        {
            $task=Task::get();
            return view('task',['tasks'=>$task]);
        };
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
       Task::where('name', $request->name)->update(
            [
                'user_id' => $request->user_id
                ,'status'=>'token'
            ]);

     return redirect()->back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // can add validation on inputs to prevent dublication
        $task= new Task();
        $task->name = $request->catch;
        $task->project_id = $request->project_id;
        if($request->user_id){
        $task->user_id = $request->user_id;
        $task->status = 'token'; 
        }
        else{
        $task->status = 'ready'; 
        }
        $task->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Task::where('id', $id)->update(
            [
                'description'=>$request->description,
                'status'=>'finished'
            ]);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = Task::find($id);
        if($user){
            $user->delete();
        }
        return redirect()->back();
    }
}