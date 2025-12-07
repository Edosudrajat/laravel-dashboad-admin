<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use App\Models\Mentor;
use Illuminate\Http\Request;
use PHPUnit\Framework\MockObject\Stub\ReturnStub;

class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        // Fitur Search
        $keyword = $request->search;
        $employees = Karyawan::with('relasiKementor')->when($keyword, fn($q) => $q->whereAny(['name','birth_date', 'job'], 'like', "%{$keyword}%"))->paginate(6)->withQueryString();

        // Total Kategori Pekerjaan
        $jobCount = Karyawan::select('job')->distinct()->count();

        return view('employees.index', [
            'jobCount' => $jobCount,
            'employees' => $employees,
        ]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $mentors = Mentor::all();
        return view('employees.create', ['mentors' => $mentors]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|min:3|max:255',
            'date_birth' => 'required|date',
            'job' => 'required|string|max:255',
            'mentor_id' => 'required|exists:mentors,id',
        ]);

        Karyawan::create($validated);

        return redirect()->route('employees.index')->with('success', 'Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
