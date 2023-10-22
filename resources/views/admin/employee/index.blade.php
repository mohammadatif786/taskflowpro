@extends('layouts.adminMaster')

@section('content')

<div class="row">
    <div class="col-md-12">
        @if (Session::has('employeeAdd'))
            <div class="alert alert-success">
                {{ Session::get('employeeAdd') }}
            </div>
        @endif
        @if (Session::has('employeeUpdate'))
            <div class="alert alert-success">
                {{ Session::get('employeeUpdate') }}
            </div>
        @endif
        @if (Session::has('employeeExists'))
            <div class="alert alert-success">
                {{ Session::get('employeeExists') }}
            </div>
        @endif
        <button data-bs-toggle="modal" data-bs-target="#addEmployeeModel" class="btn btn-primary btn-sm col-md-2 float-end">
            Insert Employee
        </button>
        <table class="table">
            <h1>Employee List</h1>
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Position</th>
                <th scope="col">Role</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($employeeDatas as $employeeData)
                    <tr>
                        <th scope="row"> {{ $employeeData->id }} </th>
                        <td> {{ $employeeData->name }} </td>
                        <td> {{ $employeeData->email }} </td>
                        <td> {{ $employeeData->position }} </td>
                        <td> {{ $employeeData->userType == '0' ? 'Employee' : 'Admin' }} </td>
                        <td>

                            <button class="btn btn-primary edit-employee" data-bs-toggle="modal" data-bs-target="#employeeEditModel"
                                data-id="{{ $employeeData->id }}"
                                data-name="{{ $employeeData->name }}"
                                data-email="{{ $employeeData->email }}"
                                data-position="{{ $employeeData->position }}">
                                <i class="mdi mdi-pencil-box-outline"></i>
                            </button>
                            <button class="btn btn-danger delete-employee" data-id="{{ $employeeData->id }}">
                                <i class="mdi mdi-delete-forever"></i>
                            </button>
                        </td>
                    </tr>

                    @endforeach
            </tbody>

        </table>
        {{ $employeeDatas->links('pagination::simple-bootstrap-5') }}

    </div>
</div>
@include('admin.models.employeeAddModel')
@include('admin.models.employeeEditModel')
@endsection
