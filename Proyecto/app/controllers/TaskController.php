<?php

class TaskController extends \BaseController {



	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{

		

		if (Request::ajax())		
		{
		$task = Task::mostrarUsuarios(Auth::id());
    	return Response::Json($task);			
    		
		}
		$this->layout->nest(
			'content',
			'task'
		);
		//$this->layout->nest('content', 'task');
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$this->layout->nest('content', 'create');
	}
	public function cargarUsuario()
	{
		$usuario = User::cargarUsuario();
		return Response::json($usuario);
	}
	public function getId()
	{
		$id = User::getId();
		return Response::json($id);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{

		$id_users = Auth::id();	
		$titulo= Input::get('titulo');
		$prioridad=Input::get('prioridad');	
		$descripcion=Input::get('descripcion');
		$estado=Input::get('estado');

		$task = new Task(); 		
		
		$task->id_users = $id_users;
		$task->titulo = $titulo;
		$task->prioridad = $prioridad;
		$task->descripcion = $descripcion;
		$task->estado = 1;
		$task->save();
		if (!Request::ajax())
		{
    		return Redirect::to('task');	
		}
		/*return Response::Json(array('msg' => 'transaccion exitosa'));;*/
		
		
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		
	 

		$task = Task::find($id);
		$this->layout->nest(
			'content',
			'edit',
			array(
				'task' => $task
			)
		);
		
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$titulo= Input::get('titulo');
		$prioridad=Input::get('prioridad');	
		$descripcion=Input::get('descripcion');
		$estado = Input::get('estado');

		$task = Task::find($id);
		$id_user= Auth::id();

		if ($task->id_users == $id_user){

			
			$task->titulo = $titulo;
			$task->prioridad = $prioridad;
			$task->descripcion = $descripcion;
			$task->estado = $estado ;	
			$task->save();
			return Redirect::to('task');



		}
		

				
		
	}

	public function eliminar($id){



		$task = Task::find($id);
		$this->layout->nest(
			'content',
			'eliminar',
			array(
				'task' => $task

			)

		);

		


	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$task = Task::find($id);
		$task->delete();
		return Redirect::to('task');
	}


}
