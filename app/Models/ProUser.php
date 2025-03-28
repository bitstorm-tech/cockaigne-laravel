<?php

namespace App\Models;

use App\Livewire\Forms\UserSignupForm;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Support\Facades\DB;

class ProUser extends User
{
    protected $fillable = ['gender_id', 'age_id'];

    public static function create(UserSignupForm $data): User
    {
        $data->validate();
        static::checkIfEmailExists($data->email, 'userForm');
        static::checkIfUsernameExists($data->username, 'userForm', 'Username already exists');

        return static::saveUser($data);
    }

    protected static function saveUser(UserSignupForm $data): ?User
    {
        return DB::transaction(function () use ($data) {
            $user = User::create([
                'username' => $data->username,
                'email' => $data->email,
                'password' => $data->password,
            ]);

            $user->proUser()->create([
                'age_id' => $data->age,
                'gender_id' => $data->gender,
            ]);

            return $user;
        });
    }

    public function user(): HasOne
    {
        return $this->hasOne(User::class);
    }
}
