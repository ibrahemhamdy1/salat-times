<?php

namespace App\Http\Controllers\Iqamas;

use App\Masjid;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ViewModels\Iqamas\IndexViewModel;

class IqamasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \App\Masjid  $masjid
     *
     * @return \Illuminate\Http\Response
     */
    public function index($masjid)
    {
        $masjid = Masjid::find($masjid);

        return view('iqamas.index', new IndexViewModel($masjid));
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
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
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
     *
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
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
