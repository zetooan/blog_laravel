@extends('layouts.main')
@section('isi')
<div class="row">
    <article>
        <h3>{{ $post->title }}</h3>
        <author>By <a href="../author/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a class="text-decoration-none" href="../categori/{{ $post->category->slug }}">{{ $post->category->name }}</a></author><br>
        {!! $post->body !!}
    </article>
</div>
@endsection