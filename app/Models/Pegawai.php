<?php

namespace App\Models;
use Ramsey\Uuid\Uuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
class Pegawai extends Model
{
    use HasFactory;
    protected $table = 'pegawais';
    protected $fillable = ['kode_pegawai', 'nama', 'alamat', 'no_telp'];
    public $incrementing = false;
    
    use Notifiable;
    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->kode_pegawai = (string) Uuid::uuid4();
        });
    }
}
