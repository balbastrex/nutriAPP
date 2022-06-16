<?php

namespace App\Models;

use \DateTimeInterface;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Usuario extends Model
{
    use SoftDeletes;
    use HasFactory;

    public $table = 'usuarios';

    protected $dates = [
        'fecha_de_nacimiento',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'nombre',
        'apellidos',
        'fecha_de_nacimiento',
        'dni',
        'telefono',
        'direccion',
        'email',
        'ocupacion',
        'turno_laboral',
        'contacto',
        'meta_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function getFechaDeNacimientoAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setFechaDeNacimientoAttribute($value)
    {
        $this->attributes['fecha_de_nacimiento'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    public function meta()
    {
        return $this->belongsTo(Metum::class, 'meta_id');
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
