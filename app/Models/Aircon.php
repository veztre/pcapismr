<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;



class Aircon extends Model
{
    use HasFactory;

    protected $table = 'aircon';
    // Define mutators to set dateissued and dateexpired as Carbon instances
    public function setDateIssuedAttribute($value)
    {
        $this->attributes['dateIssued'] = Carbon::createFromFormat('Y-m-d', $value)->startOfDay();
    }

    public function setDateExpiredAttribute($value)
    {
        $this->attributes['dateExpired'] = Carbon::createFromFormat('Y-m-d', $value)->startOfDay();
    }

    // Set default values for dateissued and dateexpired
    protected $attributes = [
        'dateIssued' => '2001-01-01',
        'dateExpired' => '2001-01-01',
    ];

    // Add validation rules for dateissued and dateexpired
    public static $rules = [
        'dateIssued' => [
            'nullable',
            'date_format:Y-m-d',
            'before_or_equal:2001-01-01',
        ],
        'dateExpired' => [
            'nullable',
            'date_format:Y-m-d',
            'after_or_equal:dateIssued',
        ],
    ];
}
