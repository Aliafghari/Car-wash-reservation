<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Faker\Core\DateTime;

class TicketController extends Controller
{
    public function index()
    {
        return view('ticket.index', [
            'tickets' => Ticket::all(),
        ]);
    }
    public function create()
    {
        return view('ticket.create', [
            'error' => session('error')
        ]);
    }
    public function store(Request $request)
    {
        $request->validate([
            'phone' => 'required|numeric',

            'full_name' => 'required|string',

            'Demands' => 'required|array',

            'time_of_arrival' => [

                'required',

                function ($attribute, $value, $fail) {

                    $format = 'Y-m-d\TH:i';

                    $minTime = '09:00';

                    $maxTime = '21:00';

                    $dateTime = Carbon::createFromFormat($format, $value);

                    // $reservation = Reservation::where('time_of_arrival', '>=', $dateTime->subHour())

                    //     ->where('time_of_arrival', '<=', $dateTime->addHour())

                    //     ->count();

                    // if ($reservation >= 3) {

                    //     return $fail('The ' . $attribute . ' field has already been taken 3 times within an hour of the specified time.');
                    // }

                    
                    if ($dateTime->format('H:i') < $minTime || $dateTime->format('H:i') > $maxTime) {

                        return $fail('The ' . $attribute . ' field must be between 9:00 and 21:00.');
                    }

                    // Check if the date is today or later
                    $now = Carbon::now();

                    if ($dateTime < $now) {

                        return $fail('The ' . $attribute . ' field must be a date and time that is today or later.');
                    }
                }

            ],
            // Other validation rules for other fields
        ]);

        $ticket = Ticket::create($request->all());


        $selected_Demands = [];
        foreach ($request->Demands as $Demand) {

            $selected_Demands[] = $Demand;
        }
        $ticket->Demands = $selected_Demands;


        $ticket->ticket_number = substr(md5($ticket->id . $ticket->full_name . $ticket->phone), 0, 10);

        $ticket->save();


        return redirect()->route('ticket.show', [$ticket]);
    }
    // public function store(Request $request)

    // {

    //     $request->validate([

    //         'phone' => 'required|numeric',

    //         'full_name' => 'required|string',

    //         'time_of_arrival' => [

    //             'required',

    //             'date_format:Y-m-d\TH:i:s',

    //             function ($attribute, $value, $fail) {

    //                 $now = now();

    //                 $dayOfWeek = $now->dayOfWeek;



    //                     $startTime = $now->copy()->setTime(9, 0, 0);

    //                     $endTime = $now->copy()->setTime(21, 0, 0);

    //                     if (!$now->between($startTime, $endTime)) {

    //                         $fail('Tickets can only be taken between 9AM and 9PM on Saturday to Wednesday.');
    //                     }

    //             }

    //         ]

    //     ]);


    //     $ticket = Ticket::create($request->all());


    //     $ticket->ticket_number = substr(md5($ticket->id . $ticket->full_name . $ticket->phone), 0, 10);


    //     $ticket->save();


    //     return redirect()->route('ticket.show', [$ticket]);
    // }
    public function show(Ticket $ticket)
    {
        return view('ticket.show', [
            'ticket' => $ticket,
        ]);

        // $demandsList=$demandsList=implode(',', $ticket->Demands);
        // return view('ticket.show',compact('ticket','damandsList'));
    }

    public function edit(Ticket $ticket)
    {
        return view('ticket.edit', [
            'ticket' => $ticket,
        ]);
    }

    public function update(Request $request, Ticket $ticket)
    {
        $ticket->update($request->all());
        return redirect()->route('ticket.show', [$ticket]);
    }

    public function destroy(Ticket $ticket)
    {
        $ticket->delete();
        return redirect()->route('index');
    }
}
