<?php

namespace App\Http\Controllers\Dashboard\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileAvatarController extends Controller
{

    public function upload(Request $request)
    {
        if (!$request->has('avatar')) {
            return false;
        }

        $avatar_path = $request->file('avatar')->store('public/avatars');


    }
}
