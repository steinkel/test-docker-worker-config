<?php

declare(strict_types=1);

namespace App\Job;

use Cake\Log\Log;
use Cake\Queue\Job\JobInterface;
use Cake\Queue\Job\Message;
use Interop\Queue\Processor;

/**
 * Example job
 */
class ExampleJob implements JobInterface
{
    /**
     * Executes logic for ExampleJob
     *
     * @param \Cake\Queue\Job\Message $message job message
     * @return string|null
     */
    public function execute(Message $message): ?string
    {
        Log::info('ExampleJob executed');
        return Processor::ACK;
    }
}
