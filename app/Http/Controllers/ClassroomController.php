<?php

namespace App\Http\Controllers;

use App\Models\classroom;
use Illuminate\Http\Request;

class ClassroomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $classrooms = classroom::all();
        $title = 'User List';

            return view('layouts.classroom.index', compact('classrooms', 'title'));
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
            'name' => 'required',
            // ... aturan validasi lainnya
        ]);

        // Simpan data ke database
        classroom::create($validatedData);

        // Redirect ke halaman yang diinginkan setelah berhasil
        return redirect('classroom');
    }

    /**
     * Display the specified resource.
     */
    public function show(classroom $classroom)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(classroom $classroom)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, classroom $classroom)
    {
        // $this->validate($request, [
        //     'name' => 'required',
        // ]);

        $classroom->update($request->all());
        return redirect()->route('classroom.index')->with('success','Student updated successfully');
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // 1. Find the record:
            $classroom = classroom::findOrFail($id); // Find the classroom by ID, or throw a 404 if not found.

            // 2. (Optional) Delete associated files/images:
            // If the record has associated files, delete them from storage before deleting the record.
            // Example: Storage::delete('public/classrooms/' . $classroom->image);

            // 3. Delete the record from the database:
            $classroom->delete();

            // 4. Redirect with a success message:
            return redirect()->route('classroom.index')->with('success', 'classroom deleted successfully!');
        
    }
}
