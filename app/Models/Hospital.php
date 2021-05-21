<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    use HasFactory;

    // protected $fillable = [
    //     'name',
    //     'adress',
    //     'phone'
    // ];

    protected $guarded = []; // Asignacion masiva para agregar el hospital

    public function doctors(){
        return $this->hasMany(Doctor::class);
    }
}
