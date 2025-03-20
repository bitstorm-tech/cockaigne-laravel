<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Validation\ValidationException;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'username',
        'email',
        'password',
        'language',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function proUser(): HasOne
    {
        return $this->hasOne(ProUser::class);
    }

    public function dealer(): HasOne
    {
        return $this->hasOne(Dealer::class);
    }

    protected function email(): Attribute
    {
        return Attribute::make(
            get: fn ($email) => strtolower($email),
            set: fn ($email) => strtolower($email),
        );
    }

    protected static function checkIfEmailExists(string $email, string $formName)
    {
        $emailExists = User::select('email')->whereLike('email', $email)->exists();

        if ($emailExists) {
            throw ValidationException::withMessages([$formName.'.email' => __('E-Mail already in use')]);
        }

    }

    protected static function checkIfUsernameExists(string $username, string $formName, string $errorMessage)
    {
        $usernameExists = User::select('username')->whereLike('username', $username)->exists();

        if ($usernameExists) {
            throw ValidationException::withMessages([$formName.'.username' => __($errorMessage)]);
        }

    }
}
