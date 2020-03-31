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
        return view('admin.dashboard.experiences.index',compact('myExperiences','myMessage','messageCount'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.dashboard.experiences.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $formDataExperiences = array(

            'user_id'   =>  Auth::user()->id,
            'title'     =>  $request->title,
            'type_of_work'  =>  $request->type_of_work,
            'company'       =>  $request->company,
            'location'      =>  $request->location,
            'ex_start_year' =>  $request->ex_start_year,
            'ex_end_year'   =>  $request->ex_end_year,
            'ex_description'=>  $request->ex_description,

        );

        Experience::create($formDataExperiences);
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
        return view('admin.dashboard.experiences.edit',compact(
            'myExperiences','myMessage','messageCount'
        ));

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
        $formDataExperiences = array(

            'user_id'   =>  Auth::user()->id,
            'title'     =>  $request->title,
            'type_of_work'  =>  $request->type_of_work,
            'company'       =>  $request->company,
            'location'      =>  $request->location,
            'ex_start_year' =>  $request->ex_start_year,
            'ex_end_year'   =>  $request->ex_end_year,
            'ex_description'=>  $request->ex_description,

        );  

        Experience::whereId($id)->update($formDataExperiences);
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
