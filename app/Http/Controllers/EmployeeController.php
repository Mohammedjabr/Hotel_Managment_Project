<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use Illuminate\Database\Eloquent\ModelNotFoundException;
class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employee.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $request->validate($this->rules() ,$this->messages());
       $employee = new Employee();
       $employee->name = $request->input('name');
       $employee->password = $request->input('password');
       $employee->type = $request->input('type');
       $employee->phone_number = $request->input('phone_number');
       $employee->address = $request->input('address');
       $employee->DoB = $request->input('DoB');
       $employee->salary = $request->input('salary');
       $employee->work_days = $request->input('work_days');
       $employee->save();
       return redirect()->route('employee.create')->with('sucess','Sucess Created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $id = Employee::paginate(5);
        return view('employee.index', compact('id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        try{
            $employee =Employee::findOrFail($id);
            return view('employee.edit',compact('employee','id'));
        }catch(ModelNotFoundException $exception){
            return redirect()->route('employee.create')->with('error','Employee Not Found !!');
        }
       
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $request->validate($this->rules() ,$this->messages());
      $employee =Employee::find($id);
       $employee->name = $request->input('name');
       $employee->password = $request->input('password');
       $employee->type = $request->input('type');
       $employee->phone_number = $request->input('phone_number');
       $employee->address = $request->input('address');
       $employee->DoB = $request->input('DoB');
       $employee->salary = $request->input('salary');
       $employee->work_days = $request->input('work_days');
       $employee->save();
      return redirect()->route('employee.show')->with('sucess','Data Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $empolyee =Employee::find($id);
      $empolyee->delete();
      return redirect()->route('employee.show')->with('sucess','Data Deleted');
    }

    private function rules(){
        return [
            'name' => 'bail|required|max:50|String',
            'password' => 'required',
            'type' =>'required',
            'phone_number' =>'required',
            'address' =>'required',
            'DoB' =>'required|Date',
            'salary' =>'required|Numeric',
            'work_days' =>'required|Integer',
            
        ];

    }

    private function messages(){
        return [
            'name.required' => 'Name is required',
            'name.max' => 'Name must be leas than 50 charachcters',
            'name.String' => 'All name must be String',
            'password.required' => 'Password is required',
            'type.required' => 'Type is required',
            'phone_number.required' => 'Phone Number is required',
            'address.required' => 'Address is required',
            'DoB.required' => 'DoB is required',
            'DoB.date' => 'DoB must be date form',
            'salary.required' => 'salary is required',
            'salary.Numeric' => 'Salary must be Only Numeric',
            'work_days.required' => 'work_days is required',
            'work_days.Integer' => 'work_days must be Integer',

            
            
        ];
    }
}
