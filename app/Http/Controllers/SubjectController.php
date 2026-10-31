<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Subject::query();

        // Existing filter by subject code
        $code = $request->query('code');

        if ($code) {
            $query = $query->where('code', $code);
        }

        // Existing filter by units
        $units = $request->query('units');

        if ($units && $units !== 'all') {
            $query = $query->where('units', $units);
        }

        // LA10: filter the list when a filter is supplied
        $filter = $request->query('filter');

        if ($filter) {
            $query = $query->where('category', $filter);
        }

        $subjects = $query->get();

        return view('subjects.index', compact('subjects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('subjects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'code' => 'required|string|max:10',
            'subject' => 'required|string|max:100',
            'units' => 'required|integer|min:1|max:100',
            'category' => 'required|string|max:50',
        ]);

        Subject::create($validated);

        return redirect()->route('subjects.index')
            ->with('success', 'Subject added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $subject = Subject::findOrFail($id);

        return view('subjects.show', [
            'subject' => $subject,
            'id' => $id,
        ]);
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

    /**
     * Filter subjects by category.
     */
    public function filter($value = null)
    {
        $query = Subject::query();

        if ($value !== null) {
            $query->where('category', $value);
        }

        $subjects = $query->get();

        return view('subjects.filter', [
            'subjects' => $subjects,
            'value' => $value,
        ]);
    }
}