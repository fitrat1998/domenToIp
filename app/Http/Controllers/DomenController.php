<?php

namespace App\Http\Controllers;

use App\Models\Domen;
use App\Http\Requests\StoreDomenRequest;
use App\Http\Requests\UpdateDomenRequest;
use Illuminate\Http\Request;

class DomenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $data = $request->input();



        if ($data == 'dip') {

            $ip = gethostbyname('www.daryo.uz');

            return response()->json([
                'status' => 'success',
                'data' => $ip
            ], 200);

        } elseif ($data == 'ipd') {
            $domain = gethostbyaddr('213.148.20.70');
            return response()->json([
                'status' => 'success',
                'data' => $domain
            ], 200);
        }


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDomenRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Domen $domen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Domen $domen)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDomenRequest $request, Domen $domen)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Domen $domen)
    {
        //
    }
}
