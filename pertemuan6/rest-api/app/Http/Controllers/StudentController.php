<?php

namespace App\Http\Controllers;

# mengimport model Student
# digunakan untuk berinteraksi dengan database
use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    # membuat method index
    public function index()
    {
        # menggunakan model Student untuk select data
        $students = Student::all();

        $data = [
            'massage' => 'Get all students',
            'data' => $students
        ];

        # mengirim data (json) dan kode 200
        return response()->json($students, 200);
    }

    # membuat method store
    public function store(Request $request)
    {
        # menangkap data request
        $input = [
            'nama' => $request->nama,
            'nim' => $request->nim,
            'email' => $request->email,
            'jurusan'=>$request->jurusan
        ];

        # menggunakan model Student untuk insert data
        $student = Student::created($input);

        $data = [
            'massage' => 'Student is created succesfully',
            'data' => $student,
        ];

        // mengembalikan data (json) dan kode 201
        return response()->json($data, 201);
    }

    # membuat methhod show
    public function show($id)
    {
        $student = Student::find($id);
        
        if ($student) {
            $data = [
                'massage' => 'Get detail student',
                'data' => $student
            ];
        
        return response()->json($data, 200);
        } else {
        $data = [
            'massage' => 'Data not found',
        ];

        return response()->json($data, 404);
        }
    }

    #membuat method update
    public function update(Request $request, $id)
    {
        $student = Student::find($id);

        if ($student) {
            $input = [
                'nama' => $request->nama ?? $student->nama,
                'nim' => $request->nim ?? $student->nim,
                'email' => $request->email ?? $student->email,
                'jurusan' => $request->jurusan ?? $student->jurusan
            ];

            $student->update($input);

            $data = [
                'massage' => 'Data is updated',
                'data' => $student
            ];
            
            return response()->json($data, 200);
        } else {
            $data = [
                'massage' => 'Data not found',
            ];

            return response()->json($data, 404);
        }
    }

    # membuat method destroy
    public function destroy($id)
    {
        # cari id
        # jika ada, hapus data
        # jika tidak ada, kembalikan pesan data tidak ada

        $student = Student::find($id);

        if ($student) {
            $student->delete();

            $data = [
                'massage' => 'Data is deleted'
            ];

            return response()->json($data, 200);
        } else {
            $data = [
                'massage' => 'Data not found',
            ];

            return response()->json($data, 404);
        }
    }
}
