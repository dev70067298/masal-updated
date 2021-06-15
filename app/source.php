<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class source extends Model
{
    //
    protected $table = 'sourcing';
    protected $hidden = [
       'created_at', 'updated_at',
    ];
}
