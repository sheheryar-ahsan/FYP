@extends('main')
@section('content')
<div class="container contact-form">
    <table class="table">
      <thead>
        <tr class="table_head">
          <th>Properties</th>
          <th>CPU1</th>
          <th>CPU2</th>
        </tr>
      </thead>
      <tbody>
        @foreach($value as $data)
        @foreach($value2 as $data2)
        <tr class="table_row2">
          <th>CPU</th>
          <td>{{$data->name}}</td>
          <td>{{$data2->name}}</td>
        </tr>
        <tr class="table_row1">
          <th>Cores</th>
          <td>{{$data->core}}</td>
          <td>{{$data2->core}}</td>
        </tr>
        <tr class="table_row2">
          <th>Threads</th>
          <td>{{$data->thread}}</td>
          <td>{{$data2->thread}}</td>
        </tr>
        <tr class="table_row1">
          <th>Clock Speed</th>
          <td>{{$data->clock}}</td>
          <td>{{$data2->clock}}</td>
        </tr>
        <tr class="table_row2">
          <th>L1 Cache Size</th>
          <td>{{$data->l1}}</td>
          <td>{{$data2->l1}}</td>
        </tr>
        <tr class="table_row1">
          <th>L2 Cache Size</th>
          <td>{{$data->l2}}</td>
          <td>{{$data2->l2}}</td>
        </tr>
        <tr class="table_row2">
          <th>L3 Cache Size</th>
          <td>{{$data->l3}}</td>
          <td>{{$data2->l3}}</td>
        </tr>
        @endforeach
        @endforeach
      </tbody>
    </table>
  </div>
@endsection