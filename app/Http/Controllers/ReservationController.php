<?php

namespace App\Http\Controllers;

use App\Reservation;
use App\Status;
use Redirect;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Mail;

class ReservationController extends Controller
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
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $reservation = new Reservation;
        $reservation->tool_id = $request->tool_id;
        $reservation->user_id = $request->user()->id;
        $reservation->start = Carbon::parse($request->start);
        $reservation->stop = Carbon::parse($request->stop);
        $reservation->save();
        $reservation->status()->create(['read' => 0]);

        Mail::send('emails.reservations.new', ['reservation' => $reservation], function($message) use ($reservation) {
            $message->from('webmaster@toolbox.nu');
            $message->to($reservation->tool()->first()->user()->first()->email);
        });

        
        return redirect('tools/' . $request->tool_id . '/detail');
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
    public function updateStatus(Request $request, $id, $status)
    {
        $reservation = Reservation::findOrFail($id);
        $stat = $reservation->status;
        $stat->$status = 1;
        $stat->save();

        Mail::send('emails.reservations.changed', ['reservation' => $reservation], function($message) use ($reservation) {
            $message->from('webmaster@toolbox.nu');
            $message->to($reservation->tool()->first()->user()->first()->email);
        });
        
        return redirect('/');
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
