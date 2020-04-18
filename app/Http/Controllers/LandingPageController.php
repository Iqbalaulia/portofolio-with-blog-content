<?php

namespace App\Http\Controllers;

use App\Blog;
use App\DetailProfile;
use App\Education;
use App\Experience;
use App\Project;
use App\Skill;
use App\User;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profileUser = User::first();

        $profileDetail = DetailProfile::where('user_id',$profileUser['id'])->first();
        
        $education = Education::orderBy('ed_start_year','DESC')->get();
        
        $experience = Experience::orderBy('ex_start_year','DESC')->get();
        
        $project = Project::all();
        
        $skill = Skill::all();

        $contentBlog = Blog::with('user')->get();

        return view('index' , compact('profileUser','profileDetail','education','experience','project','skill','contentBlog'));

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
