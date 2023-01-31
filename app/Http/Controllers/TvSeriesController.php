<?php

namespace App\Http\Controllers;

use App\Models\TvSeries;
use App\Http\Requests\StoreTvSeriesRequest;
use App\Http\Requests\UpdateTvSeriesRequest;
use App\Models\Director;

class TvSeriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tvseries = TvSeries::all();
        return view("tvseries.index", compact('tvseries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $directors = Director::all();
        return view("tvseries.create",compact('directors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTvSeriesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTvSeriesRequest $request)
    {
        $tvseries = new TvSeries;
        $tvseries->name = request('name');
        $tvseries->genre = request('genre');
        $tvseries->year = request('year');
        $tvseries->season = request('season');
        $tvseries->episodes = request('episodes');
        $tvseries->director_id=request('director_id');
        $tvseries->platform = request('platform');
        $director = Director::findOrFail($tvseries->director_id);
        $tvseries->director = $director->name . " " . $director->surname;
        $tvseries->save();
        return redirect('/tvseries');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TvSeries  $tvSeries
     * @return \Illuminate\Http\Response
     */
    public function show(TvSeries $tvseries)
    {
       // $tvseries = TvSeries::find($tvSeries->id);
        return view("tvseries.show", compact('tvseries'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TvSeries  $tvSeries
     * @return \Illuminate\Http\Response
     */
    public function edit(TvSeries $tvseries)
    {
        $directors=Director::all();
        $array = ["tvseries" => $tvseries, "directors" => $directors];
        return view("tvseries.update", $array);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTvSeriesRequest  $request
     * @param  \App\Models\TvSeries  $tvSeries
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTvSeriesRequest $request, TvSeries $tvseries)
    {

        $tvseries->name = request('name');
        $tvseries->genre = request('genre');
        $tvseries->year = request('year');
        $tvseries->season = request('season');
        $tvseries->episodes = request('episodes');
        $tvseries->director_id=request('director_id');
        $tvseries->platform = request('platform');
        $director = Director::findOrFail($tvseries->director_id);
        $tvseries->director = $director->name . " " . $director->surname;
        $tvseries->save();
        return redirect('/tvseries');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TvSeries  $tvSeries
     * @return \Illuminate\Http\Response
     */
    public function destroy(TvSeries $tvseries)
    {
        $tvseries->delete();
        return redirect("/tvseries");
    }
}
