@extends('layouts.base')

@section('content')
<div class="container text-xs-justify">
    <div class="row">
        <h5 class="display-5">
            {{ucfirst($note->title)}}
        </h5>
        <p>
            {{$note->body}}
        </p>
    </div>
</div>
@endsection
