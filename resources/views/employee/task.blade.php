@extends('layouts.employeeMaster')

@section('content')
@section('content')
<div class="row">
    <div class="col-md-12">
        <table class="table">
            <h1>Task List</h1>
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Status</th>
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
                        <td> {{ $task->status == '0' ? 'Pending' : 'Complete' }} </td>
                        <td>
                            <button class="btn btn-primary view-task" data-bs-toggle="modal" data-bs-target="#viewTask"
                                data-id="{{ $task->id }}"
                                data-name="{{ $task->name }}"
                                data-title="{{ $task->title }}"
                                data-description="{{ $task->description }}"
                                data-status="{{ $task->status }}">
                                <i class="mdi mdi-email-open"></i>
                            </button>
                            <a href="{{ route('employee.send-complete-task', ['taskId' => $task->id]) }}" class="btn btn-success">
                                <i class="mdi mdi-send"></i>
                            </a>

                        </td>
                    </tr>
                @endforeach
            </tbody>
          </table>
    </div>
</div>

<script>
    //
    $('.view-task').click(function () {

        var taskId = $(this).data('id');
        var taskName = $(this).data('name');
        var taskTitle = $(this).data('title');
        var taskDescription = $(this).data('description');
        var taskStatus = $(this).data('status');

        $('#TaskName').val(taskName);
        $('#TaskTitle').val(taskTitle);
        $('#TaskDescription').val(taskDescription);
        $('#TaskStatus').val(taskStatus == '0' ? 'Pending' : 'Complete');

        $('#taskForm').attr('action','/admin/'+taskId+'/update-task/');
    });
    // end
</script>
  {{-- <!-- Add Task Modal --> --}}
  <div class="modal fade" id="viewTask" tabindex="-1" aria-labelledby="viewTask" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addTaskModel"> Task</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form method="POST" id="taskForm">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="">Task Name</label>
                    <input type="text" name="taskName" readonly id="TaskName" class="form-control">
                    <span class="text-danger" id="taskNameError"></span>
                </div>
                <div class="mb-3">
                    <label for="">Task Title</label>
                    <input type="text" name="taskTitle" readonly id="TaskTitle" class="form-control">
                    <span class="text-danger" id="taskTitleError"></span>
                </div>
                <div class="mb-3">
                    <label for="">Task Description</label>
                    <textarea name="taskDescription" readonly id="TaskDescription" class="form-control"></textarea>
                    <span class="text-danger" id="taskDescriptionError"></span>
                </div>
                <div class="mb-3">
                    <label for="">Task Status</label>
                    <textarea name="taskStatus" readonly id="TaskStatus" class="form-control"></textarea>
                    <span class="text-danger" id="taskStatusError"></span>
                </div>
        </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <input type="submit" class="btn btn-primary" value="Add">
            </div>
            </form>
      </div>
    </div>
  </div>
{{-- End Add Task Model --}}


@endsection
