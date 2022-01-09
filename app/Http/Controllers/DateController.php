<?php

namespace App\Http\Controllers;

use DateTime;
use DateTimeZone;
use Illuminate\Http\Request;
use App\Traits\ApiResponse;

class DateController extends Controller
{
    use ApiResponse;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function getUtcDate(Request $request)
    {
        $rules = [
            'time' => 'required|date_format:H:i:s',
            'timezone' => 'required' // TO DO regexp
        ];

        $this->validate($request, $rules);

        // Set time string from request to complete date
        // to instantiate, modify or set timezone correctly
        $date = gmdate('d/m/Y H:i:s', strtotime($request->input('time')));

        // Get timezone string from request
        // and create and instace of timezone
        $timezone = new DateTimeZone($request->input('timezone'));

        // Create new datetime instance and set timezone
        $newDatetime = new DateTime($date);
        $newDatetime->setTimezone($timezone);

        $response = [
            'time' => $newDatetime->format('H:i:s'),
            'timezone' => 'UTC'
        ];

        return $this->successResponse($response);
    }
}
