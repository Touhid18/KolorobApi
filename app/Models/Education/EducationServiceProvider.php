<?php

namespace App\Models\Education;

use Illuminate\Database\Eloquent\Model;

class EducationServiceProvider extends Model
{
    //
    protected $fillable = [];
    public $timestamps = false;
    protected $table = 'kolorob.education_service_provider';
    protected $guarded = array();
}
