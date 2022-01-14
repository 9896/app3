<?php

namespace App\Domains\Task\Jobs;

use App\Data\Models\Task;
use Auth;
use Lucid\Units\Job;

class AddTaskJob extends Job
{
    private $title;
    private $description;

    /**
     * Create a new job instance.
     *
     * @param $title
     * @param $description
     */
    public function __construct($title, $description)
    {
        $this->title = $title;
        $this->description = $description;
    }

    /**
     * Execute the job.
     *
     * @return View
     */
    public function handle()
    {

        $attributes = [
            'title' => $this->title,
            'description' => $this->description,
        ];

        Task::create($attributes);
        return redirect()->route('tasklist');
    }
}
