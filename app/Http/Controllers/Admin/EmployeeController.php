<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rule;

class EmployeeController extends Controller
{
    private $employeeDatas;

    public function index()
    {
        $this->employeeDatas = User::orderBy('id', 'DESC')->paginate(2);

        return view('admin.employee.index', ['employeeDatas'=>$this->employeeDatas]);
    }

    public function insert(Request $request)
    {
        $employeeData = [
            'name' => $request->input('employeeName'),
            'email' => $request->input('employeeEmail'),
            'password' => Hash::make($request->input('employeePassword')),
            'position' => $request->input('employeePosition'),
        ];

        User::create($employeeData);

        // Sending Email to New Employee
        $data = [
            'name' => $request->input('employeeName'),
            'email' => $request->input('employeeEmail'),
            'password' => $request->input('employeePassword'),
            'position' => $request->input('employeePosition'),
        ];
        $employee['to'] = $request->input('employeeEmail');

        Mail::send('admin.mail', $data, function ($message) use ($employee) {
            $message->to($employee['to']);
            $message->subject("Your Details");
        });

        return back()->with('employeeAdd','Employee Added Successfully and details sent to employee email');
    }

    public function update(Request $request, $employeeId)
    {
        $request->validate([
            'employeeName' => 'required|string|max:255',
            'employeeEmail' => [
                'required',
                'email',
                Rule::unique('users', 'email')->ignore($employeeId),
            ],
            'employeePosition' => 'required|string|max:255',
        ]);

        $employee = User::find($employeeId);
        $employee->update([
            'name' => $request->input('employeeName'),
            'email' => $request->input('employeeEmail'),
            'position' => $request->input('employeePosition'),
        ]);
        return back()->with('employeeUpdate','Employee Data Updated Successfully');
    }

    public function destroy($employeeId)
    {
        User::where('id', $employeeId)->delete();

        return back()->with(['deleteEmployee' => "Employee Deleted Successfully"]);
    }
}
