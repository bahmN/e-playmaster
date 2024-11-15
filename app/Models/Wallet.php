<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Wallet extends Model {
    protected $keyType = 'string';

    protected $fillable = [
        'is_set'
    ];
}
