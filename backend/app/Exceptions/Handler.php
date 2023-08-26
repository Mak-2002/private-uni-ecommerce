<?php

namespace App\Exceptions;

use GuzzleHttp\Psr7\Request;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * The list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     */
    public function register(): void
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }

    public function render($request, Throwable $exception)
    {
        $file = Str::replace(base_path(), '', $exception->getFile());
        $data = [
            'success' => false,
            'message' => $exception->getMessage(),
            'line' => $exception->getLine(),
            'file' => $file,
        ];

        if ($exception instanceof ValidationException)
            $data['errors'] = $exception->validator->errors()->getMessages();

        return response()->json($data, $this->getStatusCodeForException($exception));
    }

    protected function getStatusCodeForException(Throwable $exception)
    {
        if ($exception instanceof \Illuminate\Database\Eloquent\ModelNotFoundException)
            return 404;

        elseif ($exception instanceof \Illuminate\Validation\ValidationException)
            return 422;

        elseif ($exception instanceof \Symfony\Component\HttpKernel\Exception\NotFoundHttpException)
            return 404;

        elseif ($exception instanceof \Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException)
            return 405;

        elseif ($exception instanceof \Illuminate\Auth\Access\AuthorizationException)
            return 403;

        elseif ($exception instanceof \Illuminate\Database\QueryException)
            return 500;

        else
            return 500;
    }
}
