<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;

class ProfileController extends Controller
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
      if(!isset($request->name,$request->location, $request->gender,$request->age)){
        return response()->json([
          'error' => 'parameter not set'
        ]);
      }
        $uniqueId = false;
        $profileId = null;
        while($uniqueId == false){
          $profileId = bin2hex(random_bytes(10));
          $profile_search = Profile::where('profile_id', $profileId )->first();
          $uniqueId = (count($profile_search) > 0) ? false : true;
        }
        $profile = new Profile;
        $profile->profile_id = $profileId;
        $profile->name = $request->name;
        $profile->location = $request->location;
        $profile->gender = $request->gender;
        $profile->age = $request->age;
        $profile->save();
        return response()->json([
          'profile_id' => $profile->profile_id
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $profile = Profile::where('profile_id', $id)->first();
      return response()->json(
        $profile
      );
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