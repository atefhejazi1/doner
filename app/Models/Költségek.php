<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Költségek extends Model
{
    use HasFactory;

    protected $table = "költségeks";

    public function expenditures()
    {
        return $this->hasMany(Expenditure::class);
    }
}
