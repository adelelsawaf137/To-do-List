<?php
namespace App\Exceptions;

use Exception;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class TaskNotFoundException extends NotFoundHttpException
{
    protected string $description;

    public function __construct(
        string $message = 'Task not found',
        string $description = 'The requested project was not found in the system.',
    ) {
        parent::__construct($message);
        $this->description = $description;
    }

    public function getDescription(): string
    {
        return $this->description;
    }
}