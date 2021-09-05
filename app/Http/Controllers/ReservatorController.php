<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Http\Requests\ReservationRequest;
use Illuminate\Support\Facades\Request;

class ReservatorController extends Controller
{
    // store
    public function store(ReservationRequest $request)
    {
        $res = Reservation::create([
            'firstName' => $request->input('firstName'),
            'lastName' => $request->input('lastName'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'car' => $request->input('car'),
            'type' => $request->input('type'),
        ]);
        return back()->with('message', 'Úspešně jste odeslali váš požadavek');
    }




}
