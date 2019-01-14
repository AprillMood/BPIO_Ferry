@extends('layouts.app')

@section('content')

<a class="btn btn-primary float-right" href="/categories/new">New</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Label</th>
      <th scope="col">Discount</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($categories as $category)
    <tr>
      <td><?= $category->id ?></td>
      <td><?= $category->category_name ?></td>
      <td><?= $category->label ?></td>
      <td><?= $category->discount ?></td>
    </tr>
  @endforeach
  </tbody>
</table>

@endsection
