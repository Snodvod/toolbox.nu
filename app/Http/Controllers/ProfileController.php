<?php

namespace App\Http\Controllers;

use App\Reservation;
use App\Tool;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        return view('profile/index', ['user' => User::findOrFail($id)]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('/profile/account');
    }

    /**
     * Show the form for editing the specified resource.
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function edit()
    {
        return view('/profile/edit');
    }

    public function reservation($id)
    {
        $reservations = Reservation::where('user_id', '=', $id)->get();

        return view('/profile/reservations', compact('reservations'));
    }

    public function yourToolReservation($id)
    {
        $reservations = Reservation::where('user_id', '=', $id)->get();

        return view('/profile/yourtoolreservations', compact('reservations'));
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
        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->address->street = $request->street;
        $user->address->number = $request->number;
        $user->address->code = $request->code;
        $user->address->place = $request->place;
        $user->address->country = $request->country;
        $user->save();
        $user->address->save();

        return redirect('/user/' . Auth::User()->id . '/account');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect('home');
    }
}
