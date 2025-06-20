<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePerformanceRequest;
use App\Http\Requests\UpdatePerformanceRequest;
use App\Http\Resources\PerformanceResource;
use App\Models\Performance;

class PerformanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $performances = Performance::with('exercise', 'user')->get();
        return PerformanceResource::collection($performances);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePerformanceRequest $request)
    {
        $performance = Performance::create($request->validated());
        return new PerformanceResource($performance);
    }

    /**
     * Display the specified resource.
     */
    public function show(Performance $performance)
    {
        return new PerformanceResource($performance);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePerformanceRequest $request, Performance $performance)
    {
        $performance->update($request->validated());
        return new PerformanceResource($performance);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Performance $performance)
    {
        $performance->delete();
        return response()->json(['message' => 'Performance deleted']);
    }
}