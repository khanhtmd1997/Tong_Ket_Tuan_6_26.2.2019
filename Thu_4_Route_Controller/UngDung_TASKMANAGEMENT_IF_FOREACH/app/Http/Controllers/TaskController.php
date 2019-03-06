<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
class TaskController extends Controller
{
    public function index(){
    	$tasks = Task::all();

    	return view('index', compact('tasks'));
    }

    public function create(){
    	return view('add');
	}

	public function store(Request $request){
		$task = new Task();
		$task->title = $request->input('inputTitle');
		$task->content = $request->input('inputContent');
		$task->due_date = $request->input('inputDueDate');
		$file = $request->input('inputFile');
		if(!$request->hasFile('inputFile')){
			$task->image = $file;
		}else{
			$fileName = $request->input('inputFileName'); 
			$fileExtension = $file->getClientOriginalExtension();
			$newFileName = "$fileName.$fileExtension";
			$task->image = $newFileName; 
			$request->file('inputFile')->storeAs('public/images', $newFileName);
		}
		
		$task->save();
		$message = "Tạo Task $request->inputTitle thành công!";
		Session::flash('create-success', $message);
		return redirect()->route('tasks.index', compact('message'));
	}
}
