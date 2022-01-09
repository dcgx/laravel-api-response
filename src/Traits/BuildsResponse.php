<?php

namespace Devgoto\Traits;

trait BuildsResponse
{
    private function respond(array $data, int $statusCode = 200)
    {
        return $this->jsonResponse($data, $statusCode);
    }

    private function jsonResponse(array $data, int $statusCode = 200)
    {
        return response()->json($data, $statusCode);
    }
}