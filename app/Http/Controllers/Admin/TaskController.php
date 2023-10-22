<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Task;
use App\Models\TaskCategory;
use App\Models\Tasks_assignments;
use App\Models\User;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks =  Task::orderBy('id', 'desc')->get();
        return view('admin.task.task',compact('tasks'));
    }
    public function insert(Request $request)
    {
        $file = $request->file('taskfile');
        $extension = $file->getClientOriginalExtension();
        $filename = time().'.'.$extension;
        $path = $file->move(public_path('image'), $filename); // Move the file to the public folder

        $taskData = [
            'name' => $request->input('taskName'),
            'title' => $request->input('taskTitle'),
            'description' => $request->input('taskDescription'),
            'taskfile' => $filename
        ];

        Task::create($taskData);

        return back()->with('taskAdd','Task Added Successfully');
    }
    public function update(Request $request, $taskId)
    {
        $task = Task::find($taskId);
        $task->update([
            'name' => $request->input('taskName'),
            'title' => $request->input('taskTitle'),
            'description' => $request->input('taskDescription'),
        ]);
        return back()->with('taskUpdate','Task Update Successfully');
    }
    public function destory($taskId)
    {
        Task::where('id',$taskId)->delete();

        return back()->with(['deleteTask' => "Task Delete Successfully"]);
    }
    public function taskCategory()
    {
        $taskCategories =  TaskCategory::orderBy('id', 'desc')->get();

        return view('admin.task.taskCategory',compact('taskCategories'));
    }
    public function addTaskCategory(Request $request)
    {
        $taskData = [
            'name' => $request->input('taskCategory'),
        ];
        TaskCategory::create($taskData);

        return back();
    }
    public function taskCategoryupdate(Request $request, $taskCategoryId)
    {
        $task = TaskCategory::find($taskCategoryId);
        $task->update([
            'name' => $request->input('taskCategoryName'),
        ]);
        return back();
    }
    public function categoryDestory($taskCategoryId)
    {
        TaskCategory::where('id',$taskCategoryId)->delete();

        return back();
    }

    public function taskAssignInsert(Request $request)
    {
        $taskAssignInsertData = [
            'user_id' => $request->input('employee_id'),
            'task_id' => $request->input('task_id')
        ];

        Tasks_assignments::create($taskAssignInsertData);

        return back()->with('taskAssign','Task Assign to Employee');
    }

    public function taskAssign()
    {
        $emploies = User::where('userType','0')->get();
        $tasks = Task::orderBy('id','desc')->get();
        $taskCategoryAssigns =  TaskCategory::orderBy('id', 'desc')->get();
        $taskAssignLists = Tasks_assignments::orderBy('id','desc')->get();


        return view('admin.task.taskAssign',compact('taskCategoryAssigns','tasks','emploies','taskAssignLists'));
    }

}
