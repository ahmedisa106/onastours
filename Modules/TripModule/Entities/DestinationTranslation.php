<?php

namespace Modules\TripModule\Entities;

use Illuminate\Database\Eloquent\Model;

class DestinationTranslation extends Model
{
    public $timestamps = false;

    protected $table = 'destinations_translation';

    protected $fillable = ['title', 'description','meta_keywords','meta_title','meta_desc','slug'];
}
