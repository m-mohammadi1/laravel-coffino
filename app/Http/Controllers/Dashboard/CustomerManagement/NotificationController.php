<?php

namespace App\Http\Controllers\Dashboard\CustomerManagement;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NotificationController extends Controller
{

    public function index()
    {
        $notifications = auth()->user()->notifications()->orderBy('id', 'desc')->paginate(5);
        return view('dashboard.customers.notifications.index', compact('notifications'));
    }

}
