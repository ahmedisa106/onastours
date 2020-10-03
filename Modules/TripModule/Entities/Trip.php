<?php

namespace Modules\TripModule\Entities;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    use Translatable;

    public $translatedAttributes =
        [
            'title',
            'description',
            'short_desc',
            'note',
            'meta_title',
            'meta_desc',
            'meta_keywords',
            'slug',
            'include',
            'not_include'
        ];

    protected $fillable = ['trip_category_id', 'photo', 'price', 'days', 'price_table', 'price_type', 'is_home_page'];

    public $translationModel = TripTranslate::class;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'trips';

    # Relations.
    public function categories()
    {
        return $this->belongsToMany(TripCategory::class, 'trip_categ_pivot', 'trip_id', 'category_id');

    }

    public function photos()
    {
        return $this->hasMany(TripPhotos::class);
    }

    public function program()
    {
        return $this->hasMany(TripProgram::class);
    }

    public function destinations()
    {
        return $this->belongsToMany(Destination::class, 'trip_destination', 'trip_id', 'destination_id');
    }

    public function booking()
    {
        return $this->hasMany(Booking::class);
    }

}
