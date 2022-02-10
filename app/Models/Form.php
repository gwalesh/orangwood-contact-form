<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;

    public const BUSINESS_TYPE_SELECT = [
        '1'     =>  'Unregistered',
        '2'     =>  'Propreitorship',
        '3'     =>  'Private Limited',
        '4'     =>  'Public Limited',
    ];
    protected $fillable = [
        'name',
        'contact',
        'business_type',
        'phone',
        'created_at',
        'updated_at',
    ];
}
