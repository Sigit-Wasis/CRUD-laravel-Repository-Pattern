<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Repositories\TaskRepository;

class TaskController extends Controller
{
    /**
	 * @var $task
	 */
	private $task;

	/**
	 * TaskController constructor.
	 *
	 * @param App\Repositories\TaskRepository $task
	 */
	public function __construct(TaskRepository $task) 
	{
		$this->task = $task;
	}

	/**
	 * Get all tasks.
	 *
	 * @return Illuminate\View
	 */
	public function getAllTasks($id = null)
	{
		$tasks = $this->task->getAll();
		$editTask = (isset($id)) ? $this->task->getById($id) : null;

		return view('tasks.index', compact('tasks', 'editTask'));
	}


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tasks.create');
    }

	/**
	 * Store a task
	 *
	 * @var array $attributes
	 * @return redirect
	 */
	public function postStoreTask(Request $request)
	{
		$attributes = $request->only(['code', 'name_id', 'name_ar', 'nip', 'gender']);

		$this->task->create($attributes);

		return redirect()->route('task.index');
	}

	/**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    	$tasks = $this->task->getAll();
		$editTask = (isset($id)) ? $this->task->getById($id) : null;

		return view('tasks.edit', compact('tasks', 'editTask'));
    }

	/**
	 * Update a task
	 *
	 * @var integer $id
	 * @var array 	$attributes
	 * @return redirect
	 */
	public function postUpdateTask($id, Request $request)
	{
		$attributes = $request->only(['code', 'name_id', 'name_ar', 'nip', 'gender']);
		$this->task->update($id, $attributes);

		return redirect()->route('task.index');
	}

	/**
	 * Delete a task
	 *
	 * @var integer $id
	 * @return redirect
	 */
	public function postDeleteTask($id)
	{
		$this->task->delete($id);

		return redirect()->route('task.index');
	}
}
