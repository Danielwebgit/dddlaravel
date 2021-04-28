<?php


namespace App\Web\Task\Requests;


use Illuminate\Foundation\Http\FormRequest;

class TaskRequest extends FormRequest
{

    public function rules(): array
    {
        return [
            'task' => ['required','string'],
            'category' => ['required','string']
        ];
    }

    public function messages():array
    {
        return [
            'task.required' => 'O campo precisa ser obrigatório',
            'category.required' => 'O campo categoria precisa ser preechidos'
        ];
    }

}