@extends('layouts.app')

@section('content')

<a class="btn btn-primary float-right" href="/citizens/new">New</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Surname</th>
      <th scope="col">OIB</th>
      <th scope="col">City</th>
      <th scope="col">Category</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($citizens as $citizen)
    <tr>
      <td><?= $citizen->id ?></td>
      <td><?= $citizen->citizen_name ?></td>
      <td><?= $citizen->citizen_surname ?></td>
      <td><?= $citizen->citizen_oib ?></td>
      <td><?= $citizen->city->city_name ?></td>
      <td><?= $citizen->category->label ?></td>
    </tr>
  @endforeach
  </tbody>
</table>

@endsection


