@extends('layouts.app')
@section('title', 'Edit Subject')
@section('content')



<div class="container py-4">
    <div class="card shadow-sm mx-auto" style="max-width: 600px;">
        <div class="card-header bg-primary text-white">
            <h2 class="h4 mb-0">Edit Subject</h2>
        </div>
        <div class="card-body">
<form method="POST" action="{{ route('subjects.update', $subject->id) }}">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="code" class="form-label">Subject Code</label>
    <input type="text" class="form-control @error('code') is-invalid @enderror" id="code" name="code" required value="{{ old('code', $subject->code) }}">
    @error('code')
        <div class="invalid-feedback d-block">{{ $message }}</div>
    @enderror
       
    </div>
    <div class="mb-3">
        <label for="subject" class="form-label">Subject Name</label>
        <input type="text" class="form-control @error('subject') is-invalid @enderror" id="subject" name="subject" required value="{{ old('subject', $subject->subject) }}">
        @error('subject')
            <div class="invalid-feedback d-block">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="units" class="form-label">Units</label>
        <input type="number" class="form-control @error('units') is-invalid @enderror" id="units" name="units" required value="{{ old('units', $subject->units) }}" min="1" max="10">
        @error('units')
            <div class="invalid-feedback d-block">{{ $message }}</div>
        @enderror
    </div>
<div class="mb-3">
    <label for="category_id" class="form-label">Category</label>
    <select class="form-select @error('category_id') is-invalid @enderror" id="category_id" name="category_id" required>
        <option value="">Select a category</option>
        @foreach ($categories as $category)
            <option value="{{ $category->id }}"
                @selected(old('category_id', $subject->category_id) == $category->id)
            >{{ $category->name }}</option>
        @endforeach
    </select>
    @error('category_id')
        <div class="invalid-feedback d-block">{{ $message }}</div>
    @enderror
</div>
    <button type="submit" class="btn btn-primary w-100">Update Subject</button>
</form> 
        
        </div>
    </div>
</div>

@endsection