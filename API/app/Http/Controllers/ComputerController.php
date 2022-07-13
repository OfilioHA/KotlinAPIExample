<?php

namespace App\Http\Controllers;

use App\Models\Computer;
use App\Http\Requests\Computer\StoreComputerRequest;
use App\Http\Requests\Computer\UpdateComputerRequest;
use App\Http\Resources\ComputerResource;

use function GuzzleHttp\Promise\all;

class ComputerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ComputerResource::collection(
            Computer::all()
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreComputerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreComputerRequest $request)
    {
        $computer = new Computer(
            $request->validated()
        );

        return response()->json([
            'status' => $computer->save()
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Computer  $computer
     * @return \Illuminate\Http\Response
     */
    public function show(Computer $computer)
    {
        return (new ComputerResource($computer));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateComputerRequest  $request
     * @param  \App\Models\Computer  $computer
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateComputerRequest $request, Computer $computer)
    {
        return response()->json([
            'status' => $computer->update(
                $request->validated()
            )
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Computer  $computer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Computer $computer)
    {
        return response()->json([
            'status' => $computer->delete()
        ]);
    }
}
