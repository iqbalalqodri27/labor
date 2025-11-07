<?php

namespace App\Http\Controllers;

use App\Models\study;
use Illuminate\Http\Request;

class StudyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $studys = study::all();
        $title = 'User List';

            return view('layouts.study.index', compact('studys', 'title'));
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
        study::create($validatedData);

        // Redirect ke halaman yang diinginkan setelah berhasil
        return redirect('study');
    }

    /**
     * Display the specified resource.
     */
    public function show(study $study)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(study $study)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, study $study)
    {
        // $this->validate($request, [
        //     'name' => 'required',
        // ]);

        $study->update($request->all());
        return redirect()->route('study.index')->with('success','Student updated successfully');
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // 1. Find the record:
            $study = study::findOrFail($id); // Find the study by ID, or throw a 404 if not found.

            // 2. (Optional) Delete associated files/images:
            // If the record has associated files, delete them from storage before deleting the record.
            // Example: Storage::delete('public/studys/' . $study->image);

            // 3. Delete the record from the database:
            $study->delete();

            // 4. Redirect with a success message:
            return redirect()->route('study.index')->with('success', 'study deleted successfully!');
        
    }
}
