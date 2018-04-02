<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Http\Response;
use App\Http\Requests\UserRequest;


/**
 * @access public
 * @author Uday Kumar
 * @version 1.0.0
 */
class UsersController extends Controller {
	protected $request;
	protected $user;
	
    /**
     *
     * @param Request $request
     * @param Product $user
     */
    public function __construct(Request $request, User $user) {
    	$this->request = $request;
    	$this->user = $user;
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
    	$user = $this->user->all();
    	return response()->json(['data' => $user,
    		'status' => Response::HTTP_OK]);
    }
    


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request) {
    	$data = $this->request->all();
    	$this->user->nome = $data['nome'];
    	$this->user->mail = $data['mail'];
    	$this->user->senha = $data['senha'];
    	$this->user->save();
    	
    	return response()->json(['status' => Response::HTTP_CREATED]);
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($cod_ser) {
    	$data = $this->request->all();
    	$user = $this->user->find($cod_ser);
    	
    	$this->user->nome = $data['nome'];
    	$this->user->mail = $data['mail'];
    	$this->user->senha = $data['senha'];
    	$user->save();
    	
    	return response()->json(['status' => Response::HTTP_OK]);
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($cod_ser) {
    	$user = $this->user->find($cod_ser);
    	$user->delete();
    	
    	return response()->json(['status' => Response::HTTP_OK]);
    }

}

//end of class UserController
//end of file UserController.php