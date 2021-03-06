<?php

namespace App\Http\Controllers\Admin;

use App\Blog;
use App\DetailProfile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Message;
use Illuminate\Support\Facades\Auth;

class AdminDashboardProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
        $profileUser = DetailProfile::with('User')->first();
        
        $blogContent = Blog::count();
      
        $myMessage = Message::all();
        
        $messageCount = $myMessage->count();
        
        return view('admin.dashboard.profile.index', [
            
            'profileUser'   =>  $profileUser,
            
            'blogContent'   =>  $blogContent,

            'myMessage'     =>  $myMessage,
            
            'messageCount'  =>  $messageCount,

            ''
            
            ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
