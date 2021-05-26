@extends('main')
@section('content')
<div class="container contact-form">
    <table class="table">
      <thead>
        <tr class="table_head">
          <th>Properties</th>
          <th>Game Requirement</th>
          <th>My Requirement</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($value as $data)
        @foreach ($value1 as $data3)
        <tr class="table_row2">
          <th class="table_topic">CPU</th>
          <td>{{$data->name}}</td>
          <td>{{$data3->name}}</td>
        </tr>
        <tr class="table_row1">
          <th>Cores</th>
          <td>{{$data->core}}</td>
          <td>{{$data3->core}}</td>
        </tr>
        <tr class="table_row2">
          <th>Threads</th>
          <td>{{$data->thread}}</td>
          <td>{{$data3->thread}}</td>
        </tr>
        <tr class="table_row1">
          <th>Clock Speed</th>
          <td>{{$data->clock}}</td>
          <td>{{$data3->clock}}</td>
        </tr>
        <tr class="table_row2">
          <th>L1 Cache Size</th>
          <td>{{$data->l1}}</td>
          <td>{{$data3->l1}}</td>
        </tr>
        <tr class="table_row1">
          <th>L2 Cache Size</th>
          <td>{{$data->l2}}</td>
          <td>{{$data3->l2}}</td>
        </tr>
        <tr class="table_row2">
          <th>L3 Cache Size</th>
          <td>{{$data->l3}}</td>
          <td>{{$data3->l3}}</td>
        </tr> 
        @endforeach
        @endforeach
        @foreach ($value2 as $data1)
        @foreach ($value3 as $data5)
        <tr class="table_row1">
          <th class="table_topic">GPU</th>
          <td>{{$data1->name}}</td>
          <td>{{$data5->name}}</td>
        </tr>
        <tr class="table_row2">
          <th>Video Memory</th>
          <td>{{$data1->memory}}</td>
          <td>{{$data5->memory}}</td>
        </tr>
        <tr class="table_row1">
          <th>Memory Bandwidth</th>
          <td>{{$data1->bandwidth}}</td>
          <td>{{$data5->bandwidth}}</td>
        </tr>
        <tr class="table_row2">
          <th>Graphic Clock</th>
          <td>{{$data1->clock}}</td>
          <td>{{$data5->clock}}</td>
        </tr>
        <tr class="table_row1">
          <th>Memory Type</th>
          <td>{{$data1->type}}</td>
          <td>{{$data5->type}}</td>
        </tr>
        <tr class="table_row2">
          <th>Processing units</th>
          <td>{{$data1->unit}}</td>
          <td>{{$data5->unit}}</td>
        </tr>
        @endforeach
        @endforeach
      </tbody>
    </table>
  </div>
@endsection