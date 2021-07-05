<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    protected $guarded = ["id"];
    protected $fillable = ["title", "description", "thumb", "price", "series", "sale_date", "type"];
}
