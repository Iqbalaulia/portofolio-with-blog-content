<?php

namespace App\Http\Controllers\Admin;

use App\DetailProfile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Message;
use App\User;
use Illuminate\Support\Facades\Auth;

class AdminDashboardDetailProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        
        return view('admin.dashboard.profile.create' ,[
            
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

        $data['email']  = Auth::user()->email;

        // dd($form_data);

        DetailProfile::create($data);
        return redirect('admin/profile')->with('success', 'Data Added successfully.');
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
    public function edit($user_id)
    {
        $detailProfile = DetailProfile::with('User')->findOrFail($user_id);
                
        $myMessage = Message::all();
       
        $messageCount = $myMessage->count();

        // dd($profileUser);
        return view('admin.dashboard.profile.edit', [
            
            'detailProfile' => $detailProfile,

            'myMessage' =>  $myMessage,

            'messageCount'  => $messageCount ,
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $user_id)
    {
      
        $formDataDetail = array(
            
            'user_id'                   =>   Auth::user()->id,
            'date_birth'                =>   $request->date_birth,
            'address'                   =>   $request->address,
            'country'                   =>   $request->country,
            'email'                     =>   $request->email,
            'phone'                     =>   $request->phone,
            'about_me'                  =>   $request->about_me,
            'project_complate'          =>   $request->project_complate,
            'facebook'                  =>   $request->facebook,
            'github'                    =>   $request->github,
            'linkedin'                  =>   $request->linkedin,
            'instagram'                 =>   $request->instagram,
            
        );

        $imageProfile = $request->photo;
        if(empty($imageProfile)){
            $formDataProfile = array(
            
                'name'                      =>   $request->name,
                'email'                     =>   $request->email,
                
            );
        }else{
            $image = $request->file('photo');
            $imageProfile = rand(). '.' . $image->getClientOriginalExtension();
            $image->move(public_path('admin/images'), $imageProfile);
            $formDataProfile = array(
            
                'name'                      =>   $request->name,
                'role'                      =>   $request->role,
                'email'                     =>   $request->email,
                'photo'                     =>   $imageProfile,
                
            );
        }
        
        User::where('id',$user_id)->update($formDataProfile);
        
        DetailProfile::where('user_id',$user_id)->update($formDataDetail);
        
        return redirect('admin/profile')->with('success', 'Data Edited successfully.');
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
