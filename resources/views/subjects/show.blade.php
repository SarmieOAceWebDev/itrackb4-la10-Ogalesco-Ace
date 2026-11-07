@extends('layouts.app')
@section('title', $subject['subject'])
@section('content')
    <h2 class="h3 mb-3">{{ $subject['subject'] }}</h2>

    <div class="card shadow-sm">
        <div class="card-body">
    <p><strong>ID:</strong> {{ $subject['id'] }}</p>
    <p><strong>Subject Code:</strong> {{ $subject['code'] }}</p>
    <p><strong>Subject Title:</strong> {{ $subject['subject'] }}</p>
    <p><strong>Units:</strong> {{ $subject['units'] }}</p>
    <p><strong>Category:</strong> <span class="badge text-bg-info">{{ $subject['category_name'] }}</span></p>
        </div>
    </div>
    <a href="{{ route('subjects.index') }}" class="btn btn-secondary mt-3">Back to Subject List</a>
@endsection