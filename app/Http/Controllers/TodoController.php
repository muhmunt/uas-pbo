<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TodoList;


class TodoController extends Controller
{
    public function createTodo(Request $request)
    {
        $task = $request->input('task');
        $description = $request->input('description');

        $todoList = new TodoList($task, $description);
        $todoList->setBackground($request->input('bg'))
                 ->setMusic($request->input('music'))
                 ->save();

        return response()->json(['message' => 'Todo created successfully'], 201);
    }
}
