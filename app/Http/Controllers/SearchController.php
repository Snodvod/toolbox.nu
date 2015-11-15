<?php

namespace App\Http\Controllers;

use App\Tool;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->order) {
            $order = $request->order;
        } else {
            $order = 'asc';
        }
        if ($request->column) {
            $column = $request->column;
        } else {
            $column = 'name';
        }
        if ($request->start) {
            $start = Carbon::parse($request->start);
        } else {
            $start = '';
        }
        if ($request->stop) {
            $stop = Carbon::parse($request->stop);
        } else {
            $stop = '';
        }
        if ($request->column) {
            $column = $request->column;
        } else {
            $column = 'name';
        }
        if ($request->search) {
            $search = '%' . $request->search . '%';
        } else {
            $search = '%%';
        }
        if ($request->minprice) {
            $minprice = $request->minprice;
        } else {
            $minprice = '0';
        }
        if ($request->maxprice) {
            $maxprice = $request->maxprice;
        } else {
            $maxprice = '20';
        }
        
        $tools = Tool::where('name', 'LIKE', $search)->whereBetween('price', [$minprice, $maxprice])->orderBy($column, $order)->get();
        
        return view('tools.index', ['tools' => $tools]);
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
