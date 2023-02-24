@extends('dashboard.index')
@section('ini_isi')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">{{ auth()->user()->name }}</h1>
    
</div>
@endsection