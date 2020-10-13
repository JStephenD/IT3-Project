<?php

namespace App\Http\Controllers\location;

use App\Http\Controllers\Controller;
use App\Models\CityMun;
use App\Models\Region;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class CityMunController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('location.citymun.index', [
            'citymuns' => CityMun::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('location.citymun.create', [
            'regions' => Region::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $valid_types = ['city', 'municipality'];

        $validator = Validator::make($request->all(), [
            'region_id' => '',
            'type' => Rule::in($valid_types),
            'name' => 'required|unique:regions,name|max:255',
            'latitude' => 'required',
            'longitude' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect(route('city-municipalities.create'))
                ->withErrors($validator)
                ->withInput();
        }

        CityMun::create($request->all());
        return redirect(route('city-municipalities.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CityMun  $cityMun
     * @return \Illuminate\Http\Response
     */
    public function show(CityMun $cityMun) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CityMun  $cityMun
     * @return \Illuminate\Http\Response
     */
    public function edit(CityMun $cityMun) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CityMun  $cityMun
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CityMun $cityMun) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CityMun  $cityMun
     * @return \Illuminate\Http\Response
     */
    public function destroy(CityMun $cityMun) {
        //
    }
}
