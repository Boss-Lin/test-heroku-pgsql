<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\db;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class DbController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('welcome');
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
        //新增
        $db = db::create($request->all());
        $db = $db->refresh();
        return response($db, Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\db  $db
     * @return \Illuminate\Http\Response
     */
    public function show(db $db)
    {
        //查詢
        return response($db, Response::HTTP_OK);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\db  $db
     * @return \Illuminate\Http\Response
     */
    public function edit(db $db)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\db  $db
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, db $db)
    {
        //更新
        $db->update($request->all());
        return response($db, Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\db  $db
     * @return \Illuminate\Http\Response
     */
    public function destroy(db $db)
    {
        //刪除
        $db->delete();
        return response(null, Response::HTTP_NO_CONTENT);
    }

    //自訂方法
    public function test()
    {
        return 'Hi 我們的第一個Controller';
    }
}
