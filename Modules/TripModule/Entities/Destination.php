<?php

namespace Modules\TripModule\Entities;

use Illuminate\Database\Eloquent\Model;
use Dimsav\Translatable\Translatable;

class Destination extends Model
{
    use Translatable;

    protected $guarded = [];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'destinations';

    public $translatedAttributes = ['title', 'description','meta_keywords','meta_title','meta_desc','slug'];
    public $translationModel = DestinationTranslation::class;


    # Relations

    public function trips()
    {
        return $this->belongsToMany(Trip::class, 'trip_destination', 'destination_id', 'trip_id');
    }
}
