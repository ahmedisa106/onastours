<?php

namespace Modules\TransferModule\Entities;

use Illuminate\Database\Eloquent\Model;

class TransferTranslate extends Model
{
    protected $fillable = [
        'title', 'description', 'meta_title', 'meta_desc', 'meta_keywords', 'slug'
    ];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'transfers_translation';

    public $timestamps = false;
}
