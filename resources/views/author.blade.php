@extends('layouts.main')
@section('isi')
    <h3 class="mb-3">Author Post</h3>
    
    @if($authors->count() >0)
        <ul>
        @foreach($authors as $author)
                <li class="m-2"><a class="text-decoration-none text-success" href="blog?author={{ $author->username }}">{{ $author->name }} ({{ $author->post->count() }})<br>
                    <div class="text-dark">
                        {{ '@'.$author->username }}<br>
                    </div></a></li>    
        @endforeach
        </ul>
        <div class="d-flex justify-content-center mt-3">
            {{ $authors->links() }}
        </div>
    @else
        <p class="text-center fs-4 m-5 text-secondary">Author Not found</p>
    @endif
@endsection