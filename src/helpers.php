<?php

/**
 * This file is part of the FzResponse package
 *
 * @link http://github.com/fernandozueet/response-laravel
 * @copyright 2019
 * @license MIT License
 * @author Fernando Zueet <fernandozueet@hotmail.com>
 */

use FzResponse\Response;

if (!function_exists('respond_empty')) {
    /**
     * Respond 204
     *
     * @return void
     */
    function respond_empty()
    {
        $response = new Response();

        return $response->empty();
    }
}

if (!function_exists('respond_success')) {
    /**
     * Respond success 200
     *
     * @param string $message
     * @param array|stdClass $data
     * @return \Illuminate\Http\JsonResponse
     */
    function respond_success(string $message, $data = [])
    {
        $response = new Response();

        return $response->success($message, $data);
    }
}

if (!function_exists('respond_created')) {
    /**
     * Respond success created 201
     *
     * @param string $message
     * @param array|stdClass $data
     * @return \Illuminate\Http\JsonResponse
     */
    function respond_created(string $message, $data = [])
    {
        $response = new Response();

        return $response->created($message, $data);
    }
}

if (!function_exists('respond_error')) {
    /**
     * Respond error 400
     *
     * @param string $message
     * @param array|stdClass $data
     * @return \Illuminate\Http\JsonResponse
     */
    function respond_error(string $message, $data = [])
    {
        $response = new Response();

        return $response->error($message, $data);
    }
}

if (!function_exists('respond_unauthorized')) {
    /**
     * Respond unauthenticated 401
     *
     * @return \Illuminate\Http\JsonResponse
     */
    function respond_unauthorized()
    {
        $response = new Response();

        return $response->unauthorized();
    }
}