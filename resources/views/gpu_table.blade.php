@extends('main')
@section('content')
<div class="container contact-form">
    <table class="table">
      <thead>
        <tr class="table_head">
          <th>Properties</th>
          <th>GPU1</th>
          <th>GPU2</th>
        </tr>
      </thead>
      <tbody>
        @foreach($value as $data)
        @foreach($value2 as $data2)
        <tr class="table_row2">
          <th>GPU</th>
          <td>{{$data->name}}</td>
          <td>{{$data2->name}}</td>
        </tr>
        <tr class="table_row1">
          <th>Video memory</th>
          <td>{{$data->memory}}</td>
          <td>{{$data2->memory}}</td>
        </tr>
        <tr class="table_row2">
          <th>Memory Bandwidth</th>
          <td>{{$data->bandwidth}}</td>
          <td>{{$data2->bandwidth}}</td>
        </tr>
        <tr class="table_row1">
          <th>Graphic Clock</th>
          <td>{{$data->clock}}</td>
          <td>{{$data2->clock}}</td>
        </tr>
        <tr class="table_row2">
          <th>Memory Type</th>
          <td>{{$data->type}}</td>
          <td>{{$data2->type}}</td>
        </tr>
        <tr class="table_row1">
          <th>Processing Units</th>
          <td>{{$data->unit}}</td>
          <td>{{$data2->unit}}</td>
        </tr>
        @endforeach
        @endforeach
      </tbody>
    </table>
  </div>
@endsection