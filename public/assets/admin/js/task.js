// task section

//Task Model Validation
const form = document.getElementById('taskForm');
form.addEventListener('submit', function(event) {

    const taskName = document.getElementById('taskName').value;
    const taskTitle = document.getElementById('taskTitle').value;
    const taskDescription = document.getElementById('taskDescription').value;
    const taskFile = document.getElementById('taskFile').value;

    const taskNameError = document.getElementById('taskNameError');
    const taskTitleError = document.getElementById('taskTitleError');
    const taskDescriptionError = document.getElementById('taskDescriptionError');
    const taskFileError = document.getElementById('taskFileError');

    if (taskName.trim() === '') {
        taskNameError.textContent = "Task Name is Empty";
        event.preventDefault();
    } else {
        taskNameError.textContent = "";
    }
    if (taskTitle.trim() === '') {
        taskTitleError.textContent = "Task Title is Empty";
        event.preventDefault();
    } else {
        taskTitleError.textContent = "";
    }
     if (taskDescription.trim() === '') {
        taskDescriptionError.textContent = "Task Title is Empty";
        event.preventDefault();
    } else {
        taskDescriptionError.textContent = "";
    }
    if (taskFile.trim() === '') {
        taskFileError.textContent = "Task File is Required";
        event.preventDefault();
    } else {
        taskFileError.textContent = "";
    }
});
$(document).ready(function(){

// Edit
    $('.edit-task').click(function () {

        var taskId = $(this).data('id');
        var taskName = $(this).data('name');
        var taskTitle = $(this).data('title');
        var taskDescription = $(this).data('description');

        $('#editTaskName').val(taskName);
        $('#editTaskTitle').val(taskTitle);
        $('#editTaskDescription').val(taskDescription);

        $('#taskEditForm').attr('action','/admin/'+taskId+'/update-task/');
    });
    // end

//    Delete Task
    $(".delete-task").on("click",function(){
        var deleteButton = $(this);
        var taskId = $(this).data('id');
        Swal.fire({
            title: 'Do you want to Delete this Task?',
            showDenyButton: true,
            showCancelButton: true,
            confirmButtonText: 'Delete',
            denyButtonText: `Don't Delete`,
            }).then((result) => {

            if (result.isConfirmed) {
            $.ajax({
                url:'/admin/'+ taskId +'/delete-task',
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
})
// task section end
