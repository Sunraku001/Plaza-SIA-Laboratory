<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;

<<<<<<< HEAD
    public function students() {
=======
    public function student() {
>>>>>>> ef9028e (second commit)
        return $this->belongsTo(Student::class);
    }
}
