<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use App\Models\Tasks_assignments;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class EmployeedashboardController extends Controller
{
    private $employeeId;

    public function index()
    {
        return view('employee.index');
    }

    public function taskList()
    {
        $this->employeeId = Auth::user()->id;
        $tasks = DB::table('tasks_assignment')
                   ->join('tasks', 'tasks_assignment.task_id', '=', 'tasks.id')
                   ->select('tasks_assignment.*', 'tasks.*')
                   ->where('tasks_assignment.status', '0')
                   ->where('tasks_assignment.user_id', $this->employeeId)
                   ->get();

        return view('employee.task', compact('tasks'));
    }

    public function taskHistory()
    {

        $this->employeeId = Auth::user()->id;
        $tasks = DB::table('tasks_assignment')
                    ->join('tasks','tasks_assignment.task_id','=','tasks.id')
                    ->select('tasks_assignment.*','tasks.*')
                    ->where('tasks_assignment.status','1')
                    ->where('tasks_assignment.user_id',$this->employeeId)
                    ->get();

        return view('employee.taskHistroy', compact('tasks'));
    }

    public function completeTask($taskId)
    {
        DB::table('tasks_assignment')
            ->where('task_id', $taskId)
            ->update(['status' => 1]);

        return redirect('/employee/task-list');

    }
}
