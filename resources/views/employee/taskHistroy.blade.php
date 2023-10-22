@extends('layouts.employeeMaster')

@section('content')
@section('content')

<div class="row">
    <div class="col-md-12">
         <table class="table">
            <h1>Task History</h1>
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Status</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                    <tr>
                        <th scope="row"> {{ $task->id }} </th>
                        <td> {{ $task->name }} </td>
                        <td> {{ $task->title }} </td>
                        <td> {{ $task->description }} </td>
                        <td> {{ $task->status == '0' ? 'Pending' : 'Complete' }} </td>

                    </tr>
                @endforeach
            </tbody>
          </table>
    </div>
</div>

@endsection
