<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class User extends Model
{
    use Notifiable;


    const EXPIRATION_TIME = 5;
    const KEY_NAME = 'cached_users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'phone_number', 'date_of_birth'
    ];

    /**
     * @return object
     */
    public function fetchAll()
    {
        $result = Cache::remember(self::KEY_NAME, self::EXPIRATION_TIME, function(){
            return DB::table('users')->get();
        });
        return $result;
    }
}
