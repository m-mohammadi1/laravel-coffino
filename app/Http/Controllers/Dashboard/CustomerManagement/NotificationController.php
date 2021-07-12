<?php

namespace App\Http\Controllers\Dashboard\CustomerManagement;

use App\Http\Controllers\Controller;
use App\Models\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NotificationController extends Controller
{

    public function index()
    {
        $notifications = Notification::where('user_id', Auth::id())->orWhereNull('user_id')->orderByDesc('created_at')->paginate(10);
        return view('dashboard.customers.notifications.index', compact('notifications'));
    }

}
