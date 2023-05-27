<?php

namespace App\Http\Controllers;

use App\Models\SvgMap;
use App\Http\Requests\StoreSvgMapRequest;
use App\Http\Requests\UpdateSvgMapRequest;
use Illuminate\Http\Request;


class SvgMapController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    
    public function index(Request $request)
    {
        $perPage = $request->input('perPage', 5);
        $page = (int)$request->input('page', 1);
        $offset = ($page - 1) * $perPage;

        $images = SvgMap::select('sm_description', 'sm_markup','sm_last_updated')
        ->orderBy('sm_last_updated')
        ->offset($offset)
        ->limit($perPage)
        ->get();
        $totalPages = ceil(SvgMap::count() / $perPage);

        $data = [
            'svgMaps' => $images->toArray(),
            'currentPage' => $page,
            'totalPages' => $totalPages
        ];

        return response()->json($data);
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
    public function store(StoreSvgMapRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(SvgMap $svgMap)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SvgMap $svgMap)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSvgMapRequest $request, SvgMap $svgMap)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SvgMap $svgMap)
    {
        //
    }
}
