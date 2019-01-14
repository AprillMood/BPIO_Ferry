@extends('layouts.app')

@section('content')

<a class="btn btn-primary float-right" href="/cities/new">New</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">City name</th> 
    </tr>
  </thead>
  <tbody>
  @foreach ($cities as $city)
    <tr>
      <td><?= $city->id ?></td>
      <td><?= $city->city_name ?></td>
    </tr>
  @endforeach
  </tbody>
</table>

@endsection


