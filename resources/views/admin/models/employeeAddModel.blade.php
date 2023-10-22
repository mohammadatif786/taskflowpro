  {{-- <!-- Add Employee Modal --> --}}
  <div class="modal fade" id="addEmployeeModel" tabindex="-1" aria-labelledby="addEmployeeModel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addEmployeeModel">Add Employee</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{ route('/add-employee') }}" method="POST" id="employeeForm">
                @csrf
                <div class="mb-3">
                    <label for="">Employee Name</label>
                    <input type="text" name="employeeName" id="employeeName" class="form-control">
                    <span class="text-danger" id="employeeNameError"></span>
                </div>
                <div class="mb-3">
                    <label for="">Employee Email</label>
                    <input type="text" name="employeeEmail" id="employeeEmail" class="form-control">
                    <span class="text-danger" id="employeeEmailError"></span>
                </div>
                <div class="mb-3">
                    <label for="">Employee Position</label>
                    <input type="text" name="employeePosition" id="employeePosition" class="form-control">
                    <span class="text-danger" id="employeePositionError"></span>
                </div>
                <div class="mb-3">
                    <label for="">Employee Password</label>
                    <input type="text" name="employeePassword" id="employeePassword" class="form-control"></textarea>
                    <span class="text-danger" id="employeePasswordError"></span>
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
{{-- End Add Employee Model --}}
