<?php

namespace App\Http\Controllers\Admin;

use App\Experience;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Message;
use Illuminate\Support\Facades\Auth;

class AdminDashboardExperiencesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user()->id;
        
        $myExperiences = Experience::where('user_id',$user)->get();
        
        $myMessage = Message::all();
        
        $messageCount = $myMessage->count();
        
        return view('admin.dashboard.experiences.index',[
            
            'myExperiences' =>  $myExperiences,
            
            'myMessage'     =>  $myMessage,
            
            'messageCount'  =>  $messageCount,
            
            ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $myMessage = Message::all();

        $messageCount = $myMessage->count();

        return view('admin.dashboard.experiences.create', [
            
            'myMessage'     => $myMessage,
            
            'messageCount'  =>  $messageCount,

        ]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $data['user_id'] = Auth::user()->id;            

        Experience::create($data);

        return redirect('admin/experiences')->with('success', 'Data Added successfully.');

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
        $myExperiences = Experience::findOrFail($id);

        $myMessage = Message::all();

        $messageCount = $myMessage->count();

        return view('admin.dashboard.experiences.edit',[
            
            'myExperiences' =>  $myExperiences,
            
            'myMessage'     =>  $myMessage,
            
            'messageCount'  =>  $messageCount,

        ]);

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
        $data = $request->all();

        $data['user_id'] = Auth::user()->id;

        $item = Experience::findOrFail($id);

        $item->update($data);

        return redirect('admin/experiences')->with('success', 'Data Edited successfully.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleteData = Experience::findOrFail($id);

        $deleteData->delete();
        
        return redirect('admin/experiences')->with('success', 'Data is successfully deleted');

    }
}
