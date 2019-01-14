@extends('layouts.app')

@section('content')

<a class="btn btn-primary float-right" href="/ferryLines/new">New</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Departure port</th>
      <th scope="col">Destination port</th> 
    </tr>
  </thead>
  <tbody>
  @foreach ($ferryLines as $ferryLine)
    <tr>
      <td><?= $ferryLine->id ?></td>
      <td><?= $ferryLine->departureFerryPort->ferry_port_name ?></td>
      <td><?= $ferryLine->destinationFerryPort->ferry_port_name ?></td>
    </tr>
  @endforeach
  </tbody>
</table>

@endsection

