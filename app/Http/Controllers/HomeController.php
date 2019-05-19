<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Status;
use App\Task;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $todo = Task::where('status_id', Status::getStatusId('todo'))->orderBy('created_at', 'desc')->get();
        $doing = Task::where('status_id', Status::getStatusId('doing'))->orderBy('created_at', 'desc')->get();
        $done = Task::where('status_id', Status::getStatusId('done'))->orderBy('created_at', 'desc')->get();
        return view('pages.index', compact('todo', 'doing', 'done'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $statuses = Status::pluck('title', 'id')->all();
        return view('pages.create', compact('statuses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
        ]);

        $task = Task::add($request->all());
        $task->setStatus($request->get('status_id'));

        return redirect()->route('index')->with('status', 'Новая задача добавлена');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $task = Task::find($id);
        $comments = Comment::where('task_id', $id)->orderBy('created_at', 'desc')->get();
        $statuses = Status::pluck('title', 'id')->all();
        return view('pages.edit', compact('task', 'statuses', 'comments'));
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
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
        ]);
        $task = Task::find($id);
        $task->edit($request->all());
        $task->setStatus($request->get('status_id'));
        if ($request->get('text') !== null)
        {
            $comment = Comment::add($request->all());
            $comment->setTaskID($id);
        }
        return redirect()->back()->with('status', 'Изменения сохранены');
    }

    public function json()
    {
        $tasks = Task::select('title')->get();
        return response()->json($tasks);
    }

}
