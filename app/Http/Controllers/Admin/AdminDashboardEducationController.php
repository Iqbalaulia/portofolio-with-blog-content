<?php

namespace App\Http\Controllers\Admin;

use App\Education;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Message;
use Illuminate\Support\Facades\Auth;

class AdminDashboardEducationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $myMessage = Message::all();

        $messageCount = $myMessage->count();

        $myEducation = Education::all();

        return view('admin.dashboard.education.index', [
            
            'myEducation' => $myEducation,

            'myMessage' => $myMessage,
            
            'messageCount' => $messageCount,

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

        return view('admin.dashboard.education.create', [
            
            'myMessage' => $myMessage, 
            
            'messageCount' => $messageCount,
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
            
            // dd($data);
            
            Education::create($data);

            return redirect('admin/education')->with('success', 'Data Added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $myEducation = Education::findOrFail($id);

        $myMessage = Message::all();

        $messageCount = $myMessage->count();

        return view('admin.dashboard.education.edit',[
            
            'myEducation'   =>  $myEducation,
            
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
        
        $item = Education::findOrFail($id);
        
        // dd($data);
        
        $item->update($data);

        return redirect('admin/education')->with('success', 'Data Edited successfully.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleteData = Education::findOrFail($id);
        
        $deleteData->delete();
        
        return redirect('admin/education')->with('success', 'Data is successfully deleted');
    }
}
