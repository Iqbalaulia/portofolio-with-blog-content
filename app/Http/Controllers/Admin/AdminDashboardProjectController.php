<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Message;
use App\Project;
use Illuminate\Support\Facades\Auth;

class AdminDashboardProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user()->id;
        $myProject = Project::where('user_id', $user)->get();
        $myMessage = Message::all();
        $messageCount = $myMessage->count();
        return view('admin.dashboard.project.index',compact('myProject','myMessage','messageCount'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.dashboard.project.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $imageProject = $request->image;
        if(empty($imageProject)){
            $formProject = array(
            
                'user_id'                   =>   Auth::user()->id,
                'title'                     =>   $request->title,
                'job'                       =>   $request->job,

            );
        }else{

                $image = $request->file('image');
                $imageProject = rand(). '.' . $image->getClientOriginalExtension();
                $image->move(public_path('admin/images/project'), $imageProject);
                
                $formProject = array(
            
                
                'user_id'                   =>   Auth::user()->id,
                'title'                     =>   $request->title,
                'job'                       =>   $request->job,
                'image'                     =>   $imageProject,
                               
            );
        }

        Project::create($formProject);
        return redirect('admin/project')->with('success', 'Data Added successfully.');

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
        $myProject = Project::findOrFail($id);
        $myMessage = Message::all();
        $messageCount = $myMessage->count();
        return view('admin.dashboard.project.edit',compact('myProject','myMessage','messageCount'));

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
        $imageProject = $request->file('image');
        if(empty($imageProject)){
            $formProject = array(
            
                'user_id'                   =>   Auth::user()->id,
                'title'                     =>   $request->title,
                'job'                       =>   $request->job,

            );
        }else{

            $myImageProject = $request->hidden_image;
            $myImageProject = rand(). '.' . $imageProject->getClientOriginalExtension();
            $imageProject->move(public_path('admin/images/project'), $myImageProject);
            $formProject = array(
            
                
                'user_id'                   =>   Auth::user()->id,
                'title'                     =>   $request->title,
                'job'                       =>   $request->job,
                'image'                     =>   $myImageProject,
                               
            );
        }

        // dd($formEducation);
        Project::whereId($id)->update($formProject);
        return redirect('admin/project')->with('success', 'Data Edited successfully.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleteData = Project::findOrFail($id);
        $deleteData->delete();
        return redirect('admin/project')->with('success', 'Data is successfully deleted');

    }
}
