<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

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
        $this->renderable(function (NotFoundHttpException $e,$request) {
            if($request->is('api/students/*')){
                return response()->json([
                    'status' => false,
                    'message' => 'The selected student is invalid'
                ],404);
            }

            if($request->is('api/teachers/*')){
                return response()->json([
                    'status' => false,
                    'message' => 'The selected teacher is invalid'
                ],404);
            }

            if($request->is('api/careers/*')){
                return response()->json([
                    'status' => false,
                    'message' => 'The selected career is invalid'
                ],404);
            }

            if($request->is('api/grades/*')){
                return response()->json([
                    'status' => false,
                    'message' => 'The selected grade is invalid'
                ],404);
            }

            if($request->is('api/subjects/*')){
                return response()->json([
                    'status' => false,
                    'message' => 'The selected subject is invalid'
                ],404);
            }

            if($request->is('api/teachers/*')){
                return response()->json([
                    'status' => false,
                    'message' => 'The selected teacher is invalid'
                ],404);
            }

            if($request->is('api/institution/*')){
                return response()->json([
                    'status' => false,
                    'message' => 'The selected institution is invalid'
                ],404);
            }
        });
    }
}
