<?php

namespace App\Http\Controllers\Dashboard\Administratorship;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreNotificationRequest;
use App\Models\Notification;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('dashboard.notifications.create');
    }

    /**
     * @param StoreNotificationRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreNotificationRequest $request): \Illuminate\Http\RedirectResponse
    {
        Notification::create($request->validated());

        return back()->with('toastr_success', 'پیام شما با موفقیت برای کاربران ارسال شد');
    }
}
