<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return view('posts')->with("data",[1,2,3,4,5]); // way 1
        // $data["data"]=[1,2,3,4,5];
        $obj=new \stdClass();
        $obj->name="belal";
        $obj->id=5;
        $obj->gender ="male";
        return view('news',compact("obj"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return "create Post";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return "show Post";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
