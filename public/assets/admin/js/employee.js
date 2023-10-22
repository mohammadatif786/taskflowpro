
//Employee Section
const employeeForm = document.getElementById('employeeForm');
employeeForm.addEventListener('submit', function(event){
    const employeeName = document.getElementById('employeeName').value;
    const employeeEmail = document.getElementById('employeeEmail').value;
    const employeePosition = document.getElementById('employeePosition').value;
    const employeePassword = document.getElementById('employeePassword').value;

    const employeeNameError = document.getElementById('employeeNameError');
    const employeeEmailError = document.getElementById('employeeEmailError');
    const employeePositionError = document.getElementById('employeePositionError');
    const employeePasswordError = document.getElementById('employeePasswordError');

    if(employeeName.trim() === ''){
        employeeNameError.textContent = "Employee Name is Empty";
        event.preventDefault();
    } else {
        employeeNameError.textContent = "";
    }
    if(employeeEmail.trim() === ''){
        employeeEmailError.textContent = "Employee Email Name is Empty";
        event.preventDefault();
    } else {
        employeeEmailError.textContent = "";
    }
    if(employeePassword.trim() === ''){
        employeePasswordError.textContent = "Employee Password Name is Empty";
        event.preventDefault();
    } else {
        employeePasswordError.textContent = "";
    }
    if(employeePosition.trim() === ''){
        employeePositionError.textContent = "Employee Position Name is Empty";
        event.preventDefault();
    } else {
        employeePositionError.textContent = "";
    }
});

$('.edit-employee').click(function () {

    var employeeId = $(this).data('id');
    var employeeName = $(this).data('name');
    var employeeEmail = $(this).data('email');
    var employeePassword = $(this).data('password');
    var employeePosition = $(this).data('position');

    $('#editemployeeName').val(employeeName);
    $('#editemployeeEmail').val(employeeEmail);
    $('#editemployeePosition').val(employeePosition);
    $('#editemployeePassword').val(employeePassword);

    $('#employeeEditForm').attr('action','/admin/'+employeeId+'/update-employee/');
});

//    Delete Employee
$(".delete-employee").on("click",function(){
    var deleteButton = $(this);
    var employeeID = $(this).data('id');
    Swal.fire({
        title: 'Do you want to Delete Employee?',
        showDenyButton: true,
        showCancelButton: true,
        confirmButtonText: 'Delete',
        denyButtonText: `Don't Delete`,
        }).then((result) => {

        if (result.isConfirmed) {
        $.ajax({
            url:'/admin/'+ employeeID +'/delete-employee',
            type:'get',
            success:function(response){
                Swal.fire('Delete!','', 'successfully')
                deleteButton.closest('tr').remove();
                $(".alert-success").hide();
            }
        })
        } else if (result.isDenied) {
            Swal.fire('Changes are not saved', '', 'info')
        }
    })
})
// End
