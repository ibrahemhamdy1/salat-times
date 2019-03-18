<?php

namespace App\Http\Controllers;

use App\Masjid;
use Illuminate\Http\Request;
use App\Http\Requests\Masjids\Store;
use App\Http\Requests\Masjids\Update;
use App\Http\Requests\Masjids\Destroy;
use App\ViewModels\Masjids\EditViewModel;
use App\ViewModels\Masjids\IndexViewModel;
use App\ViewModels\Masjids\CreateViewModel;
use Illuminate\Contracts\Auth\Authenticatable as LoggedInUser;

class MasjidsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(LoggedInUser $authUser)
    {
        $masjids = $authUser->masjids()->orderBy('name')->get();

        return view('masjids.index', new IndexViewModel($masjids));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('masjids.create', new CreateViewModel());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Masjids\Store  $request
     * @param  \Illuminate\Contracts\Auth\Authenticatable  $authUser
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Store $request, LoggedInUser $authUser)
    {
        $masjid = Masjid::create($request->validated());
        $masjid->users()->attach($authUser);

        flash('The masjid has been created.')->success();

        return redirect()->route('masjids.edit', $masjid->id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $masjid
     * @param  \Illuminate\Contracts\Auth\Authenticatable  $authUser
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($masjid, LoggedInUser $authUser)
    {
        $masjid = $authUser->masjids()->findOrFail($masjid);

        return view('masjids.edit', new EditViewModel($masjid));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Masjids\Update  $request
     * @param  int  $masjid
     * @param  \Illuminate\Contracts\Auth\Authenticatable  $authUser
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Update $request, $masjid, LoggedInUser $authUser)
    {
        $masjid = $authUser->masjids()->findOrFail($masjid);
        $masjid->update($request->validated());

        flash('The masjid has been updated.')->success();

        return redirect()->route('masjids.edit', $masjid->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Http\Requests\Masjids\Destroy  $request
     * @param  int  $masjid
     * @param  \Illuminate\Contracts\Auth\Authenticatable  $authUser
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Destroy $request, $masjid, LoggedInUser $authUser)
    {
        $authUser->masjids()->findOrFail($masjid)->delete();

        flash('The masjid has been deleted.')->success();

        return redirect()->route('masjids.index');
    }
}
