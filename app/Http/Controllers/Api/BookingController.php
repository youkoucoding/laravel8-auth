<?php

namespace App\Http\Controllers\Api;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    /*
     * store the order
     */
    public function store(Request $request)
    {
        date_default_timezone_set("Asia/Tokyo");

        $userId = Auth::user()->id;

        $fields = [
            'user_id'          => $request->input('user_id'),
            'room_id'          => $request->input('room_id'),
            'check_in'         => $request->input('check_in'),
            'check_out'        => $request->input('check_out'),
            'room_status'      => 'unavailable',
            'customer_num'     => $request->input('customer_num'),
            'meal_option'      => $request->input('meal_option'),
            'customer_comment' => $request->input('customer_comment'),
        ];

        Order::create($fields);

        return response()->json([
            'statusCode' => 200,
            'message'    => 'successfully'
        ], 200);
    }

}
