@extends('layouts.adminMaster')
@section('content')

<div class="row">
    <div class="col-md-6">
        <form action="/admin/add-task-Category" method="POST">
            @csrf
            <div class="mb-3">
                <input type="text" name="taskCategory" id="" class="form-control">
            </div>
            <div class="mb-3">
                <input type="submit" class="btn btn-success" value="Add Task Category">
            </div>
        </form>
    </div>
    <div class="col-md-12">
        <table class="table table-striped">
            <h1>Task Categories List</h1>
            <tbody>
                <tr>
                    <th>#</th>
                    <th>Category Name</th>
                    <th>Action</th>
                </tr>
            </tbody>
            <tbody>
                @foreach ($taskCategories as $taskCategory)
                    <tr>
                        <td>{{ $taskCategory->id }}</td>
                        <td>{{ $taskCategory->name }}</td>
                        <td>
                            <button class="btn btn-primary edit-task-category" data-bs-toggle="modal" data-bs-target="#taskCategoryEditModel"
                                data-id="{{ $taskCategory->id }}"
                                data-name="{{ $taskCategory->name }}">
                                <i class="mdi mdi-pencil-box-outline"></i>
                            </button>
                            <button class="btn btn-danger delete-task-category" data-id="{{ $taskCategory->id }}">
                                <i class="mdi mdi-delete-forever"></i>
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@include('admin.models.taskCategoryEditModel')
@endsection
