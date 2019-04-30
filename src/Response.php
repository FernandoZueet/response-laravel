<?php

/**
 * This file is part of the FzResponse package
 *
 * @link http://github.com/fernandozueet/response-laravel
 * @copyright 2019
 * @license MIT License
 * @author Fernando Zueet <fernandozueet@hotmail.com>
 */

namespace FzResponse;

class Response
{
    /**
     * Respond 204
     *
     * @param string $message
     * @return void
     */
    public function empty()
    {
        return response('', 204);
    }

    /**
     * Respond success 200
     *
     * @param string $message
     * @param array|stdClass $data
     * @return \Illuminate\Http\JsonResponse
     */
    public function success(string $message, $data = [])
    {
        return $this->responseJson($this->message(false, trans($message), $data), 200);
    }

    /**
     * Respond success created 201
     *
     * @param string $message
     * @param array|stdClass $data
     * @return \Illuminate\Http\JsonResponse
     */
    public function created(string $message, $data = [])
    {
        return $this->responseJson($this->message(false, trans($message), $data), 201);
    }

    /**
     * Respond error 400
     *
     * @param string $message
     * @param array|stdClass $data
     * @return \Illuminate\Http\JsonResponse
     */
    public function error(string $message, $data = [])
    {
        return $this->responseJson($this->message(true, trans($message), $data), 400);
    }

    /**
     * Respond unauthenticated 401
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function unauthorized()
    {
        return $this->responseJson($this->message(true, trans('auth.unauthenticated')), 401);
    }

    /**
     * Message error or success
     *
     * @param boolean $error
     * @param string $message
     * @param array|stdClass $data
     * @return array
     */
    public function message(bool $error, string $message, $data = []) : array
    {
        $return['status'] = $error ? 'error' : 'success';
        $return['message'] = $message;
        if(!empty($data)) {
            $return['data'] = $data;
        }

        return $return;
    }

    /**
     * Response json
     *
     * @param array $content
     * @param integer $status
     * @return \Illuminate\Http\JsonResponse
     */
    public function responseJson(array $content, int $status)
    {
        return response()->json($content, $status);
    }

}
