<?php 

class TaskController
{
	public function index()
	{
		$tasks = App::get('database')->selectAll('tasks', 'Task');
		
		return view('index', compact('tasks'));
	}

	public function create()
	{
		return view('create');
	}

	public function store()
	{
		App::get('database')->insert('tasks', [
			'description' => $_REQUEST['description']
		]);

		return redirect('/');
	}

	public function __toString()
	{
		return get_class($this);
	}
}