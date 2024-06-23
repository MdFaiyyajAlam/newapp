@extends('layouts.dashboard.base')

@section('content')
    <div class="container">
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>id</th>
                    <th>User Id</th>
                    <th>User Name</th>
                    <th>Password</th>
                </tr>
            </thead>
            <tbody>
               @foreach ($results as $r)
                  <tr>
                    <td>{{ $r->id }}</td>
                    {{-- <td>{{ $r->user_id }}</td> --}}
                    <td>{{ $r->name }}</td>
                    <td>{{ $r->password }}</td>
                </tr>
               @endforeach
            </tbody>
        </table>
    </div>
@endsection
