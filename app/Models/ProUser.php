<?php

namespace App\Models;

use App\Livewire\Forms\UserSignupForm;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Validation\ValidationException;

class ProUser extends User
{
    protected $fillable = ['gender', 'age', 'username'];

    public static function create(UserSignupForm $data)
    {
        $usernameExists = ProUser::select('username')->whereLike('username', $data->username)->exists();

        if ($usernameExists) {
            throw ValidationException::withMessages(['userForm.username' => __('Username already exists')]);
        }

        $emailExists = User::select('email')->whereLike('email', $data->email)->exists();

        if ($emailExists) {
            throw ValidationException::withMessages(['userForm.email' => __('E-Mail already in use')]);
        }

        $user = User::create([
            'email' => $data->email,
            'password' => $data->password,
        ]);

        $user->proUser()->create([
            'username' => $data->username,
        ]);
    }

    public function user(): HasOne
    {
        return $this->hasOne(User::class);
    }
}
