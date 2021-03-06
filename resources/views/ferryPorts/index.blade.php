@extends('layouts.app')

@section('content')

<a class="btn btn-primary float-right" href="/ferryPorts/new">New</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Port name</th>
      <th scope="col">City</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($ferryPorts as $ferryPort)
    <tr>
      <td><?= $ferryPort->id ?></td>
      <td><?= $ferryPort->ferry_port_name ?></td>
      <td><?= $ferryPort->city->city_name ?></td>
    </tr>
  @endforeach
  </tbody>
</table>

@endsection