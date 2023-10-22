@extends('layouts.adminMaster')
@section('content')

<div class="row">
    <div class="col-md-12">
        @if (Session::has('taskAdd'))
            <div class="alert alert-success">
                {{ Session::get('taskAdd') }}
            </div>
        @endif
        @if (Session::has('taskUpdate'))
            <div class="alert alert-success">
                {{ Session::get('taskUpdate') }}
            </div>
        @endif
        <button data-bs-toggle="modal" data-bs-target="#taskAddModel" class="btn btn-primary btn-sm col-md-1 float-end">Add Task</button>
        <table class="table">
            <h1>Task List</h1>
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                    <tr>
                        <th scope="row"> {{ $task->id }} </th>
                        <td> {{ $task->name }} </td>
                        <td> {{ $task->title }} </td>
                        <td> {{ $task->description }} </td>
                        <td>
                            <button class="btn btn-primary edit-task" data-bs-toggle="modal" data-bs-target="#taskEditModel"
                                data-id="{{ $task->id }}"
                                data-name="{{ $task->name }}"
                                data-title="{{ $task->title }}"
                                data-description="{{ $task->description }}">
                                <i class="mdi mdi-pencil-box-outline"></i>
                            </button>
                            <button class="btn btn-danger delete-task" data-id="{{ $task->id }}">
                                <i class="mdi mdi-delete-forever"></i>
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
          </table>
    </div>
</div>
@include('admin.models.taskAddModel')
@include('admin.models.taskEditModel')

@endsection
