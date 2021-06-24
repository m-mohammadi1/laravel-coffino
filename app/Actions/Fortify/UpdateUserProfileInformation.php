<?php

namespace App\Actions\Fortify;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\UpdatesUserProfileInformation;

class UpdateUserProfileInformation implements UpdatesUserProfileInformation
{
    /**
     * Validate and update the given user's profile information.
     *
     * @param  mixed  $user
     * @param  array  $input
     * @return void
     */
    public function update($user, array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],

            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique('users')->ignore($user->id),
            ],
            'avatar' => ['image', 'mimes:jpg,png,jpeg,gif,svg', 'max:512']
        ])->validateWithBag('updateProfileInformation');

        if ($input['email'] !== $user->email &&
            $user instanceof MustVerifyEmail) {
            $this->updateVerifiedUser($user, $input);
        } else {
            $user->forceFill([
                'name' => $input['name'],
                'email' => $input['email'],
            ])->save();

            if ($this->shouldUpdateAvatar($user, $input)) {
                $this->updateAvatar($user, $input);
            }
        }
    }

    /**
     * Update the given verified user's profile information.
     *
     * @param  mixed  $user
     * @param  array  $input
     * @return void
     */
    protected function updateVerifiedUser($user, array $input)
    {
        $user->forceFill([
            'name' => $input['name'],
            'email' => $input['email'],
            'email_verified_at' => null,
        ])->save();

        if ($this->shouldUpdateAvatar($user, $input)) {
            $this->updateAvatar($user, $input);
        }

        $user->sendEmailVerificationNotification();
    }


    protected function shouldUpdateAvatar($user, $input)
    {
        return $input['avatar'] ?? false;
    }


    protected function updateAvatar($user, $input)
    {
        $user->forceFill([
            'avatar' => $this->uploadAvatar($user, $input['avatar'] ?? null),
        ])->save();
    }

    protected function uploadAvatar($user, $image)
    {
        if ($image === null) {
            return null;
        }

        if ($user->avatar) {
            Storage::delete($user->avatar_storage_path);
        }

        $filenameWithExt = $image->getClientOriginalName();
        //Get just filename
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        // Get just ext
        $extension = $image->getClientOriginalExtension();
        // Filename to store
        $fileNameToStore = $filename.'_'.time().'.'.$extension;

        $avatar_path = $image->storeAs('public/avatars', $fileNameToStore);
        if ($avatar_path) {
            return Str::of($fileNameToStore)->substr(0, 512);
        }

        return null;
    }
}
