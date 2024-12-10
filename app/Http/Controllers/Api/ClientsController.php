<?php

namespace App\Http\Controllers\Api;

use App\DataTables\ClientsDataTable;
use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(ClientsDataTable $dataTable)
    {
        return $dataTable->render('dashboard');
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
    public function store(Request $request)
    {
        $validated = Validator::make($request->all(), [
            'name' => 'required',
            'phone' => 'required|unique:clients,phone',
            'pin' => 'required',
            'repeat_pin' => 'required|same:pin',
        ]);

        if ($validated->fails()) {
            return response()->json(['errors' => $validated->errors()]);
        }

        $client = new Client();
        $client->name = $request->name;
        $client->phone = $request->phone;
        $client->pin = $request->pin;
        $client->save();
        return response()->json($client);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = Validator::make($request->all(), [
            'name' => 'required',
            'phone' => 'required|unique:clients,phone',
            'pin' => 'required',
            'repeat_pin' => 'required|same:pin',
        ]);

        if ($validated->fails()) {
            return response()->json(['errors' => $validated->errors()]);
        }

        $client = Client::find($id);
        $client->name = $request->name;
        $client->phone = $request->phone;
        $client->pin = $request->pin;
        $client->save();
        return response()->json($client);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
