  {{-- <!-- Add Task Modal --> --}}
  <div class="modal fade" id="taskEditModel" tabindex="-1" aria-labelledby="taskEditModel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addTaskModel">Edit Task</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form method="POST" id="taskEditForm">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="">Task Name</label>
                    <input type="text" name="taskName" id="editTaskName" class="form-control">
                    <span class="text-danger" id="taskNameError"></span>
                </div>
                <div class="mb-3">
                    <label for="">Task Title</label>
                    <input type="text" name="taskTitle" id="editTaskTitle" class="form-control">
                    <span class="text-danger" id="taskTitleError"></span>
                </div>
                <div class="mb-3">
                    <label for="">Task Description</label>
                    <textarea name="taskDescription" id="editTaskDescription" class="form-control"></textarea>
                    <span class="text-danger" id="taskDescriptionError"></span>
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
