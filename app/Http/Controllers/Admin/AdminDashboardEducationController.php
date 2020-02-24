<?php

namespace App\Http\Controllers\Admin;

use App\Education;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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
        $myEducation = Education::all();
        return view('admin.dashboard.education.index', compact('myEducation'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.dashboard.education.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $imageEducation = $request->image;
        if(empty($imageEducation)){
            $formEducation = array(
            
                'user_id'                   =>   Auth::user()->id,
                'university'                =>   $request->university,
                'degree'                    =>   $request->degree,
                'field_study'               =>   $request->field_study,
                'ed_start_year'             =>   $request->ed_start_year,
                'ed_end_year'               =>   $request->ed_end_year,
                'score'                     =>   $request->score,
                'ed_description'            =>   $request->ed_description,
               
            );
        }else{

            $image = $request->file('image');
            $imageEducation = rand(). '.' . $image->getClientOriginalExtension();
            $image->move(public_path('admin/images/education'), $imageEducation);
            $formEducation = array(
            
                'user_id'                   =>   Auth::user()->id,
                'university'                =>   $request->university,
                'degree'                    =>   $request->degree,
                'field_study'               =>   $request->field_study,
                'ed_start_year'             =>   $request->ed_start_year,
                'ed_end_year'               =>   $request->ed_end_year,
                'score'                     =>   $request->score,
                'ed_description'            =>   $request->ed_description,
                'image'                     =>   $imageEducation,
               
            );
        }
        


        // dd($form_data);
        Education::create($formEducation);
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
        return view('admin.dashboard.education.edit',compact('myEducation'));
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
        $imageEducation = $request->file('image');
        if(empty($imageEducation)){
            $formEducation = array(
            
                'user_id'                   =>   Auth::user()->id,
                'university'                =>   $request->university,
                'degree'                    =>   $request->degree,
                'field_study'               =>   $request->field_study,
                'ed_start_year'             =>   $request->ed_start_year,
                'ed_end_year'               =>   $request->ed_end_year,
                'score'                     =>   $request->score,
                'ed_description'            =>   $request->ed_description,
               
            );
        }else{

            $myImageEducation = $request->hidden_image;
            $myImageEducation = rand(). '.' . $imageEducation->getClientOriginalExtension();
            $imageEducation->move(public_path('admin/images/education'), $myImageEducation);
            $formEducation = array(
            
                'user_id'                   =>   Auth::user()->id,
                'university'                =>   $request->university,
                'degree'                    =>   $request->degree,
                'field_study'               =>   $request->field_study,
                'ed_start_year'             =>   $request->ed_start_year,
                'ed_end_year'               =>   $request->ed_end_year,
                'score'                     =>   $request->score,
                'ed_description'            =>   $request->ed_description,
                'image'                     =>   $myImageEducation,
               
            );
        }

        // dd($formEducation);
        Education::whereId($id)->update($formEducation);
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
