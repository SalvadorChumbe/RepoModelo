<?php

namespace App\Http\Controllers\Student;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StudentController extends Controller
{
    public function index() {
        $controller = new StudenApiController;
        $arrayStudents = $controller->listStudents();
        $jsonResponse = new \stdClass();
        $jsonResponse->arrayStudents = $arrayStudents;
        return view('Student.student', compact());
    }
}
