<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Str;

class studentController extends Controller
{
    public function getAllStudents(){
        $students = Student::all();

        if($students->isEmpty()){
            return response()->json([
                    'message' => 'No hay estudiantes',
                    'status' => 404
                ], 404);
        } else {
            return response()->json($students);
        }
    }

    public function getStudentById($id){
        $student = Student::find($id);

        if(empty($student)){
            return response()->json([
                'message' => 'Estudiante no encontrado',
                'status' => 404
            ], 404);
        } else {
            return response()->json($student);
        }
    }

    public function createStudent(Request $request){
        $student = new Student();
        $student->nombre = $request->name;
        $student->email = $request->email;
        $student->phone = $request->phone;
        $student->language = $request->language;
        $student->token = Str::random(80);
        $student->save();

        return response()->json($student);
    }

    public function updateStudent(Request $request, $id){
        if(Student::where('id', $id)->exists()){
            $student = Student::find($id);
            $student->nombre = is_null($request->name) ? $student->nombre : $request->name;
            $student->email = is_null($request->email) ? $student->email : $request->email;
            $student->phone = is_null($request->phone) ? $student->phone : $request->phone;
            $student->language = is_null($request->language) ? $student->language : $request->language;
            $student->save();

            return response()->json($student);
        } else {
            return response()->json([
                'message' => 'Estudiante no encontrado',
                'status' => 404
            ], 404);
        } 
    }

    public function deleteStudent($id){
        if(Student::where('id', $id)->exists()){
            $student = Student::find($id);
            $student->delete();

            return response()->json([
                'message' => 'Estudiante eliminado'
            ], 200);
        } else {
            return response()->json([
                'message' => 'Estudiante no encontrado',
                'status' => 404
            ], 404);
        }
    }
}


