<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        "name",
        "description",
        "deadline",
        "status",
        "user_id",
        "client_id",
    ];

    public const STATUS = ['Abierto', 'En curso', 'Cancelado', 'Completado'];
    public function user(){
        return $this->belongsTo(User::class)->withDefault();
    }
    public function client(){
        return $this->belongsTo(Client::class)->withDefault();
    }
    public function tasks(){
        return $this->hasMany(Task::class);
    }
}