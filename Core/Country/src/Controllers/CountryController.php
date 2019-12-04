<?php

namespace Core\Country\Controllers;

use Core\Country\Interfaces\CountryInterface;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class CountryController extends BaseController
{

    private $countryRepository;

    /**
     * CountryController constructor.
     * @param CountryInterface $countryRepository
     * @author Amr
     */
    public function __construct(CountryInterface $countryRepository)
    {
        $this->countryRepository = $countryRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $isPaginated = request()->input('is_paginated', PAGINATED);
        if ($isPaginated)
            $countries = $this->countryRepository->all();
        else
            $countries = $this->countryRepository->get();
        return response()->api(SUCCESS_RESPONSE, 'countries fetched successfully', $countries);
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $country = $this->countryRepository->find($id);
        return response()->api(SUCCESS_RESPONSE, 'country fetched successfully', $country);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
