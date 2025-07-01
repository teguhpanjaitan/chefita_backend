<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        // Here you can implement the logic to fetch and return dashboard data
        // For example, you might want to return some statistics or user-related data

        $data = [
            'message' => 'Welcome to the dashboard',
            'user' => $request->user(),
            // Add more data as needed
        ];

        return response()->json($data);
    }
}
