@extends('layouts.app')

@section('head')
    @vite(['resources/js/deleteForm.js'])
@endsection

@section('content')
<div class="container">
    <div class="card text-center mt-5">
        <div class="card-header">
            {{ $post->author }}
        </div>
        <div class="card-body p-3 m-3">
            <h2 class="card-title fw-bold p-3">
                {{ $post->title }}
            </h2>
        <div class="card-image mb-4">
            <img src="{{ asset('storage/' . $post->image ) }}" alt="Placeholder image" class="img-fluid">
        </div>
            <p class="card-text mb-4">
                {{ $post->content }}
            </p>
            <a href="{{ route('admin.posts.edit', $post->id) }}" class="btn btn-success">
                Edit
            </a>
            <form action="{{ route('admin.posts.destroy', $post->id)}}" method="POST" class="d-inline-block form-deleter">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">
                    Delete
                </button>
            </form>
        </div>
        <div class="card-footer text-muted">
            {{ $post->post_date }}
        </div>
    </div>
</div>
@endsection