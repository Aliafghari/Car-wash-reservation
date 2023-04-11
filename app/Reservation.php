<?php


namespace App;


use Illuminate\Database\Eloquent\Model;


class Reservation extends Model

{

    protected $fillable = ['phone', 'full_name', 'Demands', 'time_of_arrival'];


    public function scopeSameDateTime($query, $dateTime)

    {

        $startDateTime = $dateTime->copy()->subHour();

        $endDateTime = $dateTime->copy()->addHour();


        return $query->whereBetween('time_of_arrival', [$startDateTime, $endDateTime]);
    }
}
