<?php


namespace App\Web\Task\Controllers;

use App\Core\Http\Controllers\Controller;
use App\Web\Task\Requests\TaskRequest;
use Domain\Task\Actions\CreateTaskAction;
use Domain\Task\Models\Task;
use Domain\Task\TataTransferObject\TaskData;

class TaskController extends Controller
{

    public function index()
    {
        app(Task::class)->get();

        return view('welcome');
    }

    public function store(TaskRequest $request, CreateTaskAction $action)
    {
        $dataForm=TaskData::fromRequest($request);

        $action($dataForm);

        return back()->with(['success' => 'Tarefas realizadas com sucesso!']);

    }

}