<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Message;
use App\Skill;
use Illuminate\Support\Facades\Auth;

class AdminDashboardSkillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user()->id;

        $mySkill = Skill::where('user_id', $user)->get();

        $myMessage = Message::all();

        $messageCount = $myMessage->count();

        return view('admin.dashboard.skill.index',[
            
            'mySkill'       =>  $mySkill,
            
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

        return view('admin.dashboard.skill.create', [
          
            'myMessage'     =>  $myMessage,
            
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

        Skill::create($data);

        return redirect('admin/skill')->with('success', 'Data Added successfully.');
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
        $mySkill = Skill::findOrFail($id);

        $myMessage = Message::all();

        $messageCount = $myMessage->count();

        return view('admin.dashboard.skill.edit',[
            
            'mySkill'   =>  $mySkill,
            
            'myMessage' =>  $myMessage,
            
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

        $item = Skill::findOrFail($id);

        $item->update($data);
        
        return redirect('admin/skill')->with('success', 'Data Edited successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleteData = Skill::findOrFail($id);
        
        $deleteData->delete();
        
        return redirect('admin/skill')->with('success', 'Data is successfully deleted');
    }
}
