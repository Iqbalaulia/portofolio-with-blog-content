<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Message;
use App\Tag;

class AdminDashboardTagsController extends Controller
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

        $tag = Tag::all();

        return view('admin.dashboard.tag.index' , [
            
            'tag' => $tag,

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

        

        return view('admin.dashboard.tag.create' , [
            

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

        Tag::create($data);

        return redirect()->route('admin.tag.index');

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
        $myMessage = Message::all();

        $messageCount = $myMessage->count();

        $tag = Tag::findOrFail($id);


        return view('admin.dashboard.tag.edit' , [
            
            'tag'   => $tag,

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

        $item = Tag::findOrFail($id);

        $item->update($data);

        return redirect()->route('admin.tag.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleteData = Tag::findOrFail($id);
        
        $deleteData->delete();
        
        return redirect()->route('admin.tag.index');

    }
}
