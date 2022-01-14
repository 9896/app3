<?php

namespace App\Features;

use Illuminate\Http\Request;
use Lucid\Units\Feature;
use App\Domains\Task\Jobs\AddTaskJob;
use App\Domains\Task\Requests\AddTask;

class AddTaskFeature extends Feature
{
    /**
     * Run AddTaskJob
     * 
     * @param AddTask $request
     */
    
    public function handle(AddTask $request)
    {
        return $this->run(SaveTaskJob::class, [
            'title' => $request->title,
            'description' => $request->description,
        ]);
    }
}
