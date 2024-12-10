<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    use HasFactory;

    protected  $primaryKey ='id';
    protected  $fillable =[
        'id',
        'title',
        'author',
        'publisher',
        'year',
        'isnb_number' ,
        ];
}
