@extends('layouts.main')
@section('isi')
    <h3>Post Category</h3>
    
    @if($categories->count() >0)
        <ul>
        @foreach($categories as $category)
                <li><a class="text-decoration-none fs-" href="/blog?categori={{ $category->slug }}">{{ $category->name }} ({{ $category->post->count() }})</a></li>    
        @endforeach
        </ul>
    @else
        <p class="text-center fs-4 m-5 text-secondary">Categories Not found</p>
    @endif
@endsection