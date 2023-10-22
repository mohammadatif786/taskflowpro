@extends('layouts.adminMaster')
@section('content')

<h1>Assign Task</h1>
<form action="{{ route('admin/insert-task-assign-to-employee') }}" method="post">
    @csrf
    <div class="row mt-3">
        @if (Session::has('taskAssign'))
            <div class="alert alert-success">
                {{ session::get('taskAssign') }}
            </div>
        @endif
        <div class="col-md-3">

            <select name="task_id" id="" class="form-control">

                <option value="">Select Task</option>

                @foreach ($tasks as $task)

                    <option value="{{ $task->id }}">{{ $task->name }}</option>

                @endforeach
            </select>

        </div>
        <div class="col-md-3">

            <select name="employee_id" id="" class="form-control">

                <option value="">Select Employee</option>

                @foreach ($emploies as $employee)

                    <option value="{{ $employee->id }}"> {{ $employee->name }} </option>

                @endforeach

            </select>

        </div>

        <div class="col-md-3">

            <button type="submit" class="btn btn-primary col-md-4 btn-sm"> Assign Taks </button>

        </div>

    </div>

</form>

<div class="row mt-3">

    <h3>Assign Task List</h3>

    <table class="table table-striped">

        <tr>
            <th> So# </th>
            <th> Employee Name </th>
            <th> Task </th>
            <th> Status </th>
            <th>Action</th>
        </tr>

        @foreach ($taskAssignLists as $taskAssignList)

        <tr>
            <td> {{ $taskAssignList->users->id }} </td>
            <td> {{ $taskAssignList->users->name }} </td>
            <td> {{ $taskAssignList->tasks->name }} </td>
            <td>
                <label for="" class="bg-success rounded text-white w-50 fs-3">
                    {{  $taskAssignList->status == '0' ? 'pending' : 'complete' }}
                </label>
            </td>
            <td>
                <button class="btn btn-sm btn-primary">
                    <i class="mdi mdi-pencil-box-outline"></i>
                </button>
                <button class="btn btn-sm btn-danger">
                    <i class="mdi mdi-delete-forever"></i>
                </button>
            </td>

        </tr>

        @endforeach

    </table>

</div>

@endsection
