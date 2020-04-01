<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Education;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Message;
use App\Http\Requests\CategoryRequest;


class AdminDashboardCategoryController extends Controller
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
        $category = Category::all();
        return view('admin.dashboard.category.index' ,[
            'messageCount'  => $messageCount,
            'myEducation'   => $myEducation,
            'myMessage'     => $myMessage,
            'category'      => $category,           
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
       
        
      
        
        return view('admin.dashboard.category.create' ,[
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
    public function store(CategoryRequest $request)
    {
        $data = $request->all();

        Category::create($data);
        
        return redirect()->route('admin.category-blog.index');
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
        $myEducation = Education::all();
       
        $item = Category::findOrFail($id);

      
        
        return view('admin.dashboard.category.edit' ,[
            'messageCount'  => $messageCount,
            'myEducation'   => $myEducation,
            'myMessage'     => $myMessage,
            'item'          => $item
             
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryRequest $request, $id)
    {
        $data = $request->all();
   
        $item = Category::findOrFail($id);

        $item->update($data);
        
        return redirect()->route('admin.category-blog.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Category::findOrFail($id);
        
        $item->delete();

        return redirect()->route('admin.category-blog.index');
    }
}
