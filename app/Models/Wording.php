<?php

namespace App\Models;

use App\Traits\HasTranslations;
use Illuminate\Database\Eloquent\Model;

class Wording extends Model
{
    public const DATETIME_FORMAT= 'datetime:Y-m-d H:i:s';
    use HasTranslations;

    public $translatable = ['text','metadata'];

    protected $fillable = [
        'namespace',
        'group',
        'key',
        'text',
        'metadata',

    ];


    protected $dates = [
        'created_at',
        'updated_at',
    ];


    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'created_at' => self::DATETIME_FORMAT,
        'updated_at' => self::DATETIME_FORMAT,
    ];

}
