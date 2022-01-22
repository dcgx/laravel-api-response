<?php

namespace Devgoto\LaravelApiResponse\Tests\Feature;

use Devgoto\Traits\BuildsResponse;
use Illuminate\Http\Response;
use Orchestra\Testbench\TestCase;

class ResponseTest extends TestCase
{
    use BuildsResponse;

    /** @test */
    public function it_returns_200_on_success_response()
    {
        $response = $this->respondWithSuccess();

        $this->assertEquals(Response::HTTP_OK, $response->status());
    }

    /** @test */
    public function it_returns_201_on_created_response()
    {
        $response = $this->respondWithCreated();

        $this->assertEquals(Response::HTTP_CREATED, $response->status());
    }

    /** @test */
    public function it_returns_202_on_accepted_response()
    {
        $response = $this->respondWithAccepted();

        $this->assertEquals(Response::HTTP_ACCEPTED, $response->status());
    }

    /** @test */
    public function it_returns_204_on_no_content_response()
    {
        $response = $this->respondWithNoContent();

        $this->assertEquals(Response::HTTP_NO_CONTENT, $response->status());
    }

    /** @test */
    public function it_returns_400_on_bad_request_response()
    {
        $response = $this->respondWithBadRequest();

        $this->assertEquals(Response::HTTP_BAD_REQUEST, $response->status());
    }

    /** @test */
    public function it_returns_401_on_unauthorized_response()
    {
        $response = $this->respondWithUnathorized();

        $this->assertEquals(Response::HTTP_UNAUTHORIZED, $response->status());
    }

    /** @test */
    public function it_returns_403_on_not_found_response()
    {
        $response = $this->respondWithNotFound();

        $this->assertEquals(Response::HTTP_NOT_FOUND, $response->status());
    }

    /** @test */
    public function it_returns_404_on_forbidden_response()
    {
        $response = $this->respondWithForbidden();

        $this->assertEquals(Response::HTTP_FORBIDDEN, $response->status());
    }

    /** @test */
    public function it_returns_405_on_method_not_allowed_response()
    {
        $response = $this->respondWithMethodNotAllowed();

        $this->assertEquals(Response::HTTP_METHOD_NOT_ALLOWED, $response->status());
    }

    /** @test */
    public function it_returns_406_on_not_acceptable_response()
    {
        $response = $this->respondWithNotAcceptable();

        $this->assertEquals(Response::HTTP_NOT_ACCEPTABLE, $response->status());
    }

    /** @test */
    public function it_returns_418_on_teapot_response()
    {
        $response = $this->respondWithTeapot();

        $this->assertEquals(Response::HTTP_I_AM_A_TEAPOT, $response->status());
    }

    /** @test */
    public function it_returns_422_on_unprocessable_entity_response()
    {
        $response = $this->respondWithUnprocessableEntity();

        $this->assertEquals(Response::HTTP_UNPROCESSABLE_ENTITY, $response->status());
    }
}