@extends('main')
@section('content')
<div class="container contact-form">
<table class="table">
    <thead>
        <tr class="table_head">
            <th>Game Name</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($value as $data)
        <tr>
            <td  class="table_row2">  {{$data->name}}</td>
        </tr>
    @endforeach
    </tbody>
</table>
</div>
@endsection