<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    private $taskList = [
        'first' => 'sleep',
        'second' => 'Eat',
        'third' => 'Work',
    ];

    public function index()
    {
        if (request()->search) {
            return $this->taskList[request()->search];
        }
        return $taskList;
    }
}



