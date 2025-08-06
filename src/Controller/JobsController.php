<?php

declare(strict_types=1);

namespace App\Controller;

use App\Job\ExampleJob;
use Cake\Queue\Mailer\QueueTrait;
use Cake\Queue\QueueManager;

/**
 * Jobs Controller
 *
 */
class JobsController extends AppController
{
    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        QueueManager::push(ExampleJob::class, ['some' => 'data']);
        return $this->response->withStringBody('Job added to queue');
    }
}
