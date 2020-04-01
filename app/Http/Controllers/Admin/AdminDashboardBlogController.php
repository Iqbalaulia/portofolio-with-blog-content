<?php

namespace App\Http\Controllers\Admin;

use App\Education;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Message;

class AdminDashboardBlogController extends Controller
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
        return view('admin.dashboard.blog.index' ,[
            'messageCount'  => $messageCount,
            'myEducation'   => $myEducation,
            'myMessage'     => $myMessage,
                 
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
        $myEducation = Education::all();
        return view('admin.dashboard.blog.create' ,[
            'messageCount'  => $messageCount,
            'myEducation'   => $myEducation,
            'myMessage'     => $myMessage,
                 
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
