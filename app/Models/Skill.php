<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;

    protected $fillable = ['name' , 'proficiency' , 'service_id'];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
