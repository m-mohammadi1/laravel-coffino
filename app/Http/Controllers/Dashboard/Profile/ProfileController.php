<?php

namespace App\Http\Controllers\Dashboard\Profile;

use App\Actions\Fortify\UpdateUserPassword;
use App\Actions\Fortify\UpdateUserProfileInformation;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{

    public function index()
    {
        return view('dashboard.profile.index');
    }

    public function update(Request $request, UpdateUserProfileInformation $updater)
    {

        $updater->update($request->user(), $request->all());

        return back()->with('toastr_success', 'اطلاعات کاربر با موفقیت بروزرسانی شد');
    }

    public function updatePassword(Request $request, UpdateUserPassword $updater)
    {
        $updater->update($request->user(), $request->all());

        return back()->with('toastr_success', 'پسورد با موفقیت بروزرسانی شد');
    }

    public function password()
    {
        return view('dashboard.profile.password');
    }
}
