<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::paginate(10);

        return view('users.index', [
            'users' => $users,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        $tasks = $user->tasks()->orderBy('created_at', 'desc')->paginate(10);

        $data = [
            'user' => $user,
            'tasks' => $tasks,
        ];

        $data += $this->counts($user);

        return view('users.show', $data);
    }

}
