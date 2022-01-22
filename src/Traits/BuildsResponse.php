<?php

namespace Devgoto\Traits;

use Illuminate\Http\Response;

trait BuildsResponse
{
    private function respond($data, int $statusCode = 200, bool $success = true)
    {
        return $this->jsonResponse(['data' => $data, 'success' => $success, 'code' => 0], $statusCode);
    }

    private function respondWithError($error, int $statusCode = 400, bool $success = false)
    {
        return $this->jsonResponse(['error' => $error, 'success' => $success, 'code' => 0], $statusCode);
    }

    public function respondWithSuccess($data = null)
    {
        return $this->respond($data, Response::HTTP_OK, true);
    }

    public function respondWithCreated($data = null)
    {
        return $this->respond($data, Response::HTTP_CREATED, true);
    }


    public function respondWithAccepted($data = null)
    {
        return $this->respond($data, Response::HTTP_ACCEPTED, true);
    }

    public function respondWithNoContent()
    {
        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function respondWithBadRequest($message = 'Bad request')
    {
        return $this->respondWithError($message, Response::HTTP_BAD_REQUEST);
    }

    public function respondWithUnathorized($message = 'Unauthorized')
    {
        return $this->respondWithError($message, Response::HTTP_UNAUTHORIZED);
    }

    public function respondWithForbidden($message = 'Forbidden')
    {
        return $this->respondWithError($message, Response::HTTP_FORBIDDEN);
    }

    public function respondWithNotFound($message = 'Not found')
    {
        return $this->respondWithError($message, Response::HTTP_NOT_FOUND);
    }

    public function respondWithMethodNotAllowed($message = 'Method not allowed')
    {
        return $this->respondWithError($message, Response::HTTP_METHOD_NOT_ALLOWED);
    }

    public function respondWithNotAcceptable($message = 'Not acceptable')
    {
        return $this->respondWithError($message, Response::HTTP_NOT_ACCEPTABLE);
    }

    public function respondWithTeapot($message = 'I am a teapot')
    {
        return $this->respondWithError($message, Response::HTTP_I_AM_A_TEAPOT);
    }

    public function respondWithUnprocessableEntity($message = 'Unprocessable entity')
    {
        return $this->respondWithError($message, Response::HTTP_UNPROCESSABLE_ENTITY);
    }

    private function jsonResponse(array $data, int $statusCode = 200)
    {
        return response()->json($data, $statusCode);
    }
}