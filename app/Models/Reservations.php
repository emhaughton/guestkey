<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservations extends Model
{
    use HasFactory;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'acount_id',
        'guesty_id',
        'fisrt_name',
        'email',
        'checkin',
        //TODO: corregit falta orotografica
        'chekout',
        'listing_id',
        'phone',
        'created_at',
        'updated_at'
    ];
}
