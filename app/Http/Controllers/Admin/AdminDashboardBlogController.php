<?php

namespace App\Http\Controllers\Admin;

use App\Blog;
use App\Category;
use App\Education;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Message;
use App\Http\Requests\BlogRequest;
use App\Tag;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use illuminate\Support\Str;

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
        
        $blogContent    =   Blog::all();

        // foreach ($blogContent as $content){

        //     $dataContent = json_decode($content->tag);
            
        //     foreach ($dataContent as $tags){
        //         dd($tags->value);
        //     }
        // }

        return view('admin.dashboard.blog.index' ,[

            'messageCount'  => $messageCount,
            
            'myEducation'   => $myEducation,
            
            'myMessage'     => $myMessage,
            
            'blogContent'   => $blogContent, 
                 
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

        $categoryBlog = Category::all();

        $tagBlog = Tag::all();

        return view('admin.dashboard.blog.create' ,[

            'messageCount'  => $messageCount,

            'myEducation'   => $myEducation,

            'myMessage'     => $myMessage,

            'categoryBlog'  => $categoryBlog, 

            'tagBlog'       => $tagBlog,
                 
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BlogRequest $request)
    {
        $data = $request->all();
        
        $data['users_id'] = Auth::user()->id;

        $data['slug'] = Str::slug($request->title);

        $data['date_blog'] = Carbon::now();

        $data['image'] = $request->file('image')->store('assets/thumbnail', 'public');

        // Insert tag array
        
        $data['tag'] = json_encode($request->tag);
            
        Blog::create($data); 
        
        return redirect()->route('admin.my-blog.index');
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
        // content pada message navbar

        $myMessage = Message::all();

        $messageCount = $myMessage->count();

        $myEducation = Education::all();

        // edited blog

        $categoryBlog = Category::all();

        $tagBlog = Tag::all();

        $item = Blog::findOrFail($id);

        return view('admin.dashboard.blog.edit' ,[

            'messageCount'  => $messageCount,

            'myEducation'   => $myEducation,

            'myMessage'     => $myMessage,

            'item'          => $item,

            'categoryBlog'  => $categoryBlog,

            'tagBlog'       => $tagBlog,
             
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BlogRequest $request, $id)
    {
        $data = $request->all();

        if(($request->file('image')) == 0){


        }else{
            $data['image'] = $request->file('image')->store(
                'assets/thumbnail', 'public'
            );
        }
        
        $data['slug']= Str::slug($request->title);

        $data['users_id'] = Auth::user()->id;

        $data['tag'] = json_encode($request->tag);
        
        $item = Blog::findOrFail($id);

        $item->update($data);
        
        return redirect()->route('admin.my-blog.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Blog::findOrFail($id);
        
        $item->delete();

        return redirect()->route('admin.my-blog.index');
    }
}
