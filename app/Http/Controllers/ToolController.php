<?php

namespace App\Http\Controllers;

use App\User;
use App\Tool;
use Carbon\Carbon;
use JavaScript;
use DateInterval;
use DatePeriod;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class ToolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($toolId, Request $request)
    {
        $tool = Tool::findOrFail($toolId);
        if ($tool->user()->get()->first() == $request->user())
        {
            return view('tools/manage', ['tool' => $tool]);
        } else {
            return redirect('/'); 
        }
        
    }

    public function detail($toolId)
    {
        $reservations = Tool::findOrFail($toolId)->reservations()->get();
        $dates = [];
        foreach($reservations as $reservation) {
            $begin = $reservation->start;
            $end = $reservation->stop;
            $interval = new DateInterval('P1D');
            $range = new DatePeriod(Carbon::parse($begin), $interval, Carbon::parse($end)->modify( '+1 day' ));
            foreach($range as $date) {
                array_push($dates, Carbon::parse($date)->format('d-m-Y'));
            }
             //return dd($dates);
        }
        JavaScript::put([
            'dates' => $dates
        ]);
        return view('tools/detail', ['tool' => Tool::findOrFail($toolId)]);
    }

    public function add()
    {
        return view('tools/add');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $imageName = $this->generateRandom(6) . '.' .
            $request->file('image')->getClientOriginalExtension();

        $request->file('image')->move(
            base_path() . '/public/img/catalog/', $imageName
        );

        $tool = new Tool;
        $tool->user_id = Auth::User()->id;
        $tool->price = $request->price;
        $tool->name = $request->name;
        $tool->image = $imageName;
        $tool->about = $request->desc;
        $tool->save();

        return redirect('/tools/'. $tool->id .'/detail');
    }

    private function generateRandom($length)
    {
        $characters = 'abcdefghijklmnopqrstuvwxyz0123456789';
        $result = '';

        for ($i = 0; $i < $length; $i++) {
            $result .= $characters[rand(0, strlen($characters) - 1)];
        }

        return $result;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $userId)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($userId, $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($userId, $id)
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
        $tool = Tool::findOrFail($id);
        $tool->name = $request->name;
        $tool->about = $request->desc;
        $tool->price = $request->price;
        $tool->save();

        return redirect('/tools/'. $id .'/detail');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($userId, $id)
    {
        //
    }
}
