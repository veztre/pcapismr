<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class referencen extends Model
{
    use HasFactory;

    protected $table = 'referencens';

    public function plant()
    {
        return $this->hasOne(Plant::class, 'id');
    }

    public function oaupload()
    {
        return $this->hasOne(Oaupload::class, 'userid');
    }
}
