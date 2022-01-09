<?php

namespace Devgoto\ApiResponse\Tests\Feature;

use Devgoto\Traits\BuildsResponse;
use Illuminate\Http\JsonResponse;
use Orchestra\Testbench\TestCase;
use Symfony\Component\HttpFoundation\Response;

class ResponseTest extends TestCase
{
    protected object $service;

    public function setUp(): void
    {
        $this->service = $this->getObjectForTrait(BuildsResponse::class);
        parent::setUp();
    }

    /**
     * @dataProvider successDefaultDataProvider
     */
    public function test_success_response_default(array $args)
    {
        $response = $this->service->respondWithSuccess($args);
        self::assertInstanceOf(JsonResponse::class, $response);
    }

    public function successDefaultDataProvider(): array
    {
        return [
            'respondWithSuccess(), default empty array' => [
                'default' => [],
                'args' => [],
                'code' => Response::HTTP_OK,
                'data' => []
            ]
        ];
    }
}