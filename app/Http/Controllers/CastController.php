<?php

namespace App\Http\Controllers;

use App\User;
use App\Cast;
use App\CastMember;
use App\Http\Resources\Cast as CastResource;
use App\Http\Resources\CastMember as CastMemberResource;

use Illuminate\Http\Request;

class CastController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $casts = Cast::join('cast_members', 'casts.id', '=', 'cast_members.cast_id')->select('*')->where('user_id', $request->user()->id)->get();
        return view('casts.index', [
            'casts' => $casts
        ]);
    }

    public function new(Request $request)
    {
        $request->user()->casts()->create([
            'name' => 'cast',
        ]);

        $newid = Cast::latest()->first()->id;

        return view('casts.new', [
            'castid' => $newid
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
        $this->validate($request, [
            'name' => 'required|max:255',
        ]);

        $request->user()->casts()->create([
            'name' => $request->name,
        ]);

        $newid = Cast::latest()->first()->id;

        return response()->json(null, 200);
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
        $data = array('name' => $request->name, 'cast_id' => $id, 'original_image_url' => 'ho', 'new_image_url' => $request->image);
        CastMember::insert($data);
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
