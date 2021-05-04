<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FfxivCharacter extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'portrait',
        'avatar',
        'server',
        'dc',
        'id_lodestone',
        'free_company_name'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}