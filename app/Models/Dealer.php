<?php

namespace App\Models;

use App\Livewire\Forms\DealerSignupForm;
use App\Services\GeoService;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class Dealer extends User
{
    protected $fillable = [
        'category_id',
        'street',
        'house_number',
        'city',
        'postal_code',
        'phone',
        'tax_id',
        'location',
    ];

    public static function create(DealerSignupForm $data): User
    {
        Log::info("Create dealer: {$data->email}");

        $data->validate();
        static::checkIfEmailExists($data->email, 'dealerForm');
        static::checkIfUsernameExists($data->username, 'dealerForm', 'Company name already exists');

        return static::saveDealer($data);
    }

    protected static function saveDealer(DealerSignupForm $data): ?User
    {
        return DB::transaction(function () use ($data) {
            $user = User::create([
                'username' => $data->username,
                'email' => $data->email,
                'password' => $data->password,
            ]);

            $point = GeoService::pointFromAddress(
                $data->street,
                $data->houseNumber,
                $data->city,
                $data->postalCode,
            );

            $user->dealer()->create([
                'category_id' => $data->defaultCategory,
                'street' => $data->street,
                'house_number' => $data->houseNumber,
                'city' => $data->city,
                'postal_code' => $data->postalCode,
                'phone' => $data->phoneNumber,
                'tax_id' => $data->taxId,
                'location' => DB::raw("ST_GeomFromText('POINT({$point['lon']} {$point['lat']})')"),
            ]);

            return $user;
        });
    }

    public function user(): HasOne
    {
        return $this->hasOne(User::class);
    }

    public function category(): HasOne
    {
        return $this->hasOne(Category::class);
    }
}
