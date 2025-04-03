<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function index() {
        return view('index');
    }

    public function getStudents(){
<<<<<<< HEAD
        $students = Student::with(['department', 'grades'])->get();
=======
        $students = Student::with(['department','grades'])->get();
>>>>>>> ef9028e (second commit)
        return response()->json( $students);
    }
}
