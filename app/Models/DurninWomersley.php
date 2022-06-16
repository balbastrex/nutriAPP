<?php

namespace App\Models;

use \DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DurninWomersley extends Model
{
    use SoftDeletes;
    use HasFactory;

    public const EDAD_RADIO = [
        '<17'        => '< 17 años',
        '17-19'      => '17-19 años',
        '20-29'      => '20-29 años',
        '30-39 años' => '30-39 años',
        '40-49 años' => '40-49 años',
        '50-68 años' => '50-68 años',
    ];

    public $table = 'durnin_womersleys';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'edad',
        'peso',
        'biceps',
        'triceps',
        'subescapular',
        'suprailiaco',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
