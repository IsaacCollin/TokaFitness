<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Social extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    // get the data from the table in the datbase that is need for the social controller
    protected $fillable = [
        'user_id',
        'name',
        'post_title',
        'post_desc',
        'img_url',
        'created_at'
    ];
}
