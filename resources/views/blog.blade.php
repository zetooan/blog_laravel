@extends('layouts.main')

@section('isi')
    <h3 class="text-center">Blog Post</h3>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="blog" class="input-group mb-3 mt-3">
                <input type="text" class="form-control" placeholder="Search..." name="search" value="{{ request('search') }}">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                @if (request('author'))
                    <input type="hidden" name="author" value="{{ request('author') }}">
                @endif
                <button class="btn btn-success" type="submit">Search</button>
            </form>
        </div>
    </div>
    @if ($posts->count() > 0 )
        @foreach ($posts as $post)
            <div class="row border-bottom">
                <article class="mt-3 mb-5">
                    <h3><a class="text-decoration-none text-success" href="../post/{{ $post->slug }}">{{ $post->title }}</a></h3>
                    <author>By <a href="../blog?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a class="text-decoration-none" href="../blog?category={{ $post->category->slug }}">{{ $post->category->name }}</a>
                    <div class="text-secondary"> {{ $post->created_at->diffForHumans() }}</div></author><br>
                    {{ $post->excerpt }}<a class="text-decoration-none" href="../post/{{ $post->slug }}"> read more ...</a>
                </article>
            </div>
        @endforeach
        <div class="d-flex justify-content-center mt-3">
            {{ $posts->links() }}
        </div>
    @else
        <p class="text-center fs-4 m-5 text-secondary">Post Not found</p>
    @endif
    
        <div class="row mt-5 mb-2 border-bottom pb-2">
            <a class="text-decoration-none text-dark" href="../categories"> -> Blog Category</a>
        </div>
        <div class="row mb-5 border-bottom pb-2">
            <a class="text-decoration-none text-dark" href="../author"> -> Blog Author</a>
        </div>    
@endsection
    
