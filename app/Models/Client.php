<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Client extends Model
{
    use SoftDeletes;
    use HasFactory;

    protected $table = "client";

    protected $hidden = ["external_id"];

    protected $fillable = ["name", "city", "street", "country", "street_number", "postal_code", "user_id"];

}
