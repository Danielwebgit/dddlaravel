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
        app(Task::class)->first();

        return view('welcome');
    }

    public function store(TaskRequest $request, CreateTaskAction $action)
    {
        $dataForms=TaskData::fromRequest($request);

        $action($dataForms);

        return back()->with(['success' => 'Tarefass realizadas com sucesso!']);

    }

}