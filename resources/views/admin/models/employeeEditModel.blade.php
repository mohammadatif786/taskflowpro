  {{-- <!-- Edit Employee Modal --> --}}
  <div class="modal fade" id="employeeEditModel" tabindex="-1" aria-labelledby="employeeEditModel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="employeeEditModel">Edit Employee</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form method="POST" id="employeeEditForm">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="">Employee Name</label>
                    <input type="text" name="employeeName" id="editemployeeName" class="form-control">
                    <span class="text-danger" id="employeeNameError"></span>
                </div>
                <div class="mb-3">
                    <label for="">Employee Email</label>
                    <input type="email" name="employeeEmail" id="editemployeeEmail" class="form-control">
                    <span class="text-danger" id="employeeEmailError"></span>
                </div>
                <div class="mb-3">
                    <label for="">Employee Position</label>
                    <input type="text" name="employeePosition" id="editemployeePosition" class="form-control">
                    <span class="text-danger" id="employeePositionlError"></span>
                </div>
        </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <input type="submit" class="btn btn-primary" value="Update">
            </div>
            </form>
      </div>
    </div>
  </div>
{{-- End Edit Employee Model --}}
