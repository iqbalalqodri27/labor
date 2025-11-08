<?php

namespace App\Http\Controllers;

use App\Models\teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $teachers = teacher::all();
        $title = 'User List';

            return view('layouts.teacher.index', compact('teachers', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
                // Lakukan validasi data
        $validatedData = $request->validate([
            'nip' => 'required',
            'name' => 'required',
            // ... aturan validasi lainnya
        ]);

        // Simpan data ke database
        teacher::create($validatedData);

        // Redirect ke halaman yang diinginkan setelah berhasil
        return redirect('teacher');
    }

    /**
     * Display the specified resource.
     */
    public function show(teacher $teacher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(teacher $teacher)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, teacher $teacher)
    {
        // $this->validate($request, [
        //     'name' => 'required',
        // ]);

        $teacher->update($request->all());
        return redirect()->route('teacher.index')->with('success','Student updated successfully');
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // 1. Find the record:
            $teacher = teacher::findOrFail($id); // Find the teacher by ID, or throw a 404 if not found.

            // 2. (Optional) Delete associated files/images:
            // If the record has associated files, delete them from storage before deleting the record.
            // Example: Storage::delete('public/teachers/' . $teacher->image);

            // 3. Delete the record from the database:
            $teacher->delete();

            // 4. Redirect with a success message:
            return redirect()->route('teacher.index')->with('success', 'teacher deleted successfully!');
        
    }
}
