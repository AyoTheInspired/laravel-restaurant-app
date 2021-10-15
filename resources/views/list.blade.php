@extends('layout')

@section('content')
 <h1>List of available Restaurants</h1>

 <table class="table">
  <thead>
   <tr>
    <th scope="col">ID</th>
    <th scope="col">Name</th>
    <th scope="col">Email</th>
    <th scope="col">Twitter</th>
   </tr>
  </thead>
  <tbody>
   <tr>
    <th scope="row">1</th>
    <td>Mark</td>
    <td>Otto@gmail.com</td>
    <td>@mdo</td>
   </tr>
   <tr>
    <th scope="row">2</th>
    <td>Jacob</td>
    <td>Thornton@gmail.com</td>
    <td>@fat</td>
   </tr>
   <tr>
    <th scope="row">3</th>
    <td>Larry</td>
    <td>the Bird@gmail.com</td>
    <td>@twitter</td>
   </tr>
   <tr>
    <th scope="row">4</th>
    <td>Fernandez</td>
    <td>bowlman@gmail.com</td>
    <td>@fredson</td>
   </tr>
   <tr>
    <th scope="row">5</th>
    <td>Matthew</td>
    <td>gauntletd@gmail.com</td>
    <td>@foxie</td>
   </tr>
  </tbody>
 </table>

@endsection
