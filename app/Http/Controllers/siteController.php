<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;

class siteController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function tracking()
    {
        return view('tracking');
    }

    public function find(Request $request)
    {
        $ticket = Ticket::where('phone', $request->phone)->where('ticket_number', $request->ticket_number)->first();
        if ($ticket) {
            return redirect()->route('ticket.show', [$ticket]);
        }

        return view('tracking', [
            'error' => '404',
            'phone' => $request->phone,
            'ticket_number' => $request->ticket_number,
        ]);
    }
}
