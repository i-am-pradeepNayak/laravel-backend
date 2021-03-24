<?php

namespace App\Http\Controllers;

use App\Models\addpost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AddPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result = addpost::all();
        return $result;
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
    public function store(Request $request, $id)
    {
        $addpost = new addpost;
        $addpost->cid = $id;
        $addpost->cname = $request->cname;
        $addpost->jobtype = $request->jobtype;
        $addpost->jobspec = $request->jobspec;
        $addpost->skills = $request->skills;
        $addpost->jqualy = $request->jqualy;
        $addpost->jhires = $request->jhires;
        $addpost->jexpo = $request->jexpo;
        $addpost->jloc = $request->jloc;
        $addpost->jpack = $request->jpack;
        $addpost->jtime = $request->jtime;
        $addpost->save();
        return $addpost;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $users = DB::table('addposts')->where('cid', $id)->get();
        return $users;
    }

    public function showpost($id)
    {
        $users = addpost::find($id);
        // $users = DB::table('addposts')->where('jobid', $id)->first();
        return  response()->json($users);
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

        $addpost = DB::table("addposts")->where('jobid', $id)->update(
            [
                'cid' => $request->cid,
                'cname' => $request->cname,
                'jobtype' => $request->jobtype,
                'jobspec' => $request->jobspec,
                'skills' => $request->skills,
                'jqualy' => $request->jqualy,
                'jhires' => $request->jhires,
                'jexpo' => $request->jexpo,
                'jloc' => $request->jloc,
                'jpack' => $request->jpack,
                'jtime' => $request->jtime
            ]
        );
        $addpost1 = DB::table("addposts")->where('jobid', $id)->first();
        return  response()->json($addpost1);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $customer = addpost::findOrFail($id);
        $customer->delete();
        return response()->json($customer);
        // DB::table('addposts')->where('jobid', $id)->delete();
    }

    public function viewjob($id)
    {
        $users = addpost::find($id);
        // $users = DB::table('addposts')->where('jobid', $id)->first();
        return  response()->json($users);
    }
}
