<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;
use App\Models\Category;



class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index(Request $request)
    {
        $query = Subject::with('category');

        $code = $request->query('code');
        $units = $request->query('units');
        $filter = $request->query('filter');

        if ($code) {
            $query = $query->where('code', $code);
        }

        if ($units && $units !== 'all') {
            $query = $query->where('units', $units);
        }

        if ($filter) {
            $query = $query->where('category_id', $filter);
        }

   

        $subjects = $query->get();

        return view('subjects.index', compact('subjects'));
    }

    public function create()
    {
        $categories = Category::all();

        return view('subjects.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'code' => 'required|string|max:10',
            'subject' => 'required|string|max:100',
            'units' => 'required|integer|min:1|max:100',
            'category_id' => 'required|exists:categories,id',
        ]);

        Subject::create($validated);

        return redirect()->route('subjects.index')->with('success', 'Subject added successfully.');
    }

    public function show(string $id)
    {
         $subject = Subject::findOrFail($id);

        return view('subjects.show', [
        'subject' => $subject,
        'id' => $id,
        ]);
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
