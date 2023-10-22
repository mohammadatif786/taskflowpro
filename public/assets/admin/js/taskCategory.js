$('.edit-task-category').click(function () {

    var taskId = $(this).data('id');
    var taskCategoryName = $(this).data('name');

    $('#editTaskCategoryName').val(taskCategoryName);

    $('#taskCategoryEditForm').attr('action','/admin/'+taskId+'/update-task-category');
});
$(".delete-task-category").on("click",function(){
    var deleteButton = $(this);
    var taskCategoryId = $(this).data('id');
    Swal.fire({
        title: 'Do you want to Delete this Task?',
        showDenyButton: true,
        showCancelButton: true,
        confirmButtonText: 'Delete',
        denyButtonText: `Don't Delete`,
        }).then((result) => {

        if (result.isConfirmed) {
        $.ajax({
            url:'/admin/'+ taskCategoryId +'/delete-task-category',
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
