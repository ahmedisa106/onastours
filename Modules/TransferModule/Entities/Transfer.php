<?php

namespace Modules\TransferModule\Entities;

use Illuminate\Database\Eloquent\Model;
use Dimsav\Translatable\Translatable;

class Transfer extends Model
{
    use Translatable;

    public $translatedAttributes = [
        'title', 'description', 'meta_title', 'meta_desc', 'meta_keywords', 'slug'
    ];

    protected $fillable = ['sort_order', 'photo'];

    public $translationModel = TransferTranslate::class;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'transfers';

    # Relations
}
