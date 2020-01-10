<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\Eloquent\SoftDeletes;


class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        return view('students.index', ['students'=> $students]);
        //menggunakan , compact('students')); atau dengan cara yang diatas juga bisa
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.tambahdata');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    //    $student = new Student;
    //    $student ->nama = $request->nama; 
    //    $student ->nrp = $request->nrp; 
    //    $student ->email = $request->email; 
    //    $student ->jurusan = $request->jurusan;
    
    //    $student->save();

    \Validator::make($request->all(), [
        'nama' => 'required',
        'nrp' => 'required',
        'email' => 'required',
        'jurusan' => 'required'
      
    ],[
        'nama.required'=> 'nama tidak boleh kosong',
        'nrp.required' => '9 karakter maximal',
        'email.required' => 'email tidak boleh kosong',
        'jurusan.required' => 'jurusan tidak boleh kosong',
   
    ])->validate();


        Student::create([
            'nama'  => $request->nama,
            'nrp'  => $request->nrp,
            'email'  => $request->email,
            'jurusan'  => $request->jurusan,

        ]);
        
      

       return redirect('/students')->with('status', 'Profile Successfully Update!');

       //bisa menggunakan methode create sama pengeisiian nya namun pada model 
       //harus dibuat property Protected $fillable = ['field yang boleh diisi'] dengan memberikan field yang mana akan diisi
       //hal ini dibutukan untuk terjadi kecurangan pada id yang harusnya otomatis (autoint) akan terisi sendiri tidak akan bisa di ubah
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return view('students.detail', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {

        
    \Validator::make($request->all(), [
        'nama' => 'required',
        'nrp' => 'required|size:9',
        'email' => 'required',
        'jurusan' => 'required'
      
    ],[
        'nama.required'=> 'nama tidak boleh kosong',
        'nrp.required' => '9 karakter maximal',
        'email.required' => 'email tidak boleh kosong',
        'jurusan.required' => 'jurusan tidak boleh kosong',
   
    ])->validate();

        Student::where('id', $student)
          ->update([
              'nama' => $request->nama,
              'nrp' => $request->nrp,
              'email' => $request->email,
              'jurusan' => $request->jurusan
              
              ]);

          return $request;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        Student::destroy($student->id);
        return redirect('/students')->with('status', 'Profile Successfully Deleted!');
        
    }
}
