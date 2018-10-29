
@extends('layouts/app')

@section('content')

<h1>The hero roster</h1>


<ol>
@foreach($results as $result)
<li>{{ $result->name }}</li>
@endforeach 
</ol>

@endsection 