  {{-- <!-- Add Task Modal --> --}}
  <div class="modal fade" id="taskCategoryEditModel" tabindex="-1" aria-labelledby="taskCategoryEditModel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addTaskModel">Edit Task Category</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form method="POST" id="taskCategoryEditForm">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="">Task Name</label>
                    <input type="text" name="taskCategoryName" id="editTaskCategoryName" class="form-control">
                    <span class="text-danger" id="taskNameError"></span>
                </div>
                <div class="mb-3">
        </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <input type="submit" class="btn btn-primary" value="Update">
            </div>
            </form>
      </div>
    </div>
  </div>
{{-- End Add Task Model --}}
