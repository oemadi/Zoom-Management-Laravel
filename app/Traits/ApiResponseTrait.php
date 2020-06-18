<?php

namespace App\Traits;

use Illuminate\Http\Response;

trait ApiResponseTrait
{
    /**
     * This will be return during success
     * @param  mixed $data
     * @param  integer $code
     * @return \Illuminate\Http\Response
     */
    public function success($data, $message = 'Success', $code = 200)
    {
        return response([
            "status" => true,
            "message" => __($message),
            "data" => $data,            
        ], $code);
    }

    public function successMessage($message = 'Success', $code = 200)
    {
        return response([
            "status" => true,
            "message" => __($message),                   
        ], $code);
    }

    /**
     * This will be return after successfully created
     * @param  mixed $data
     * @param  integer $code
     * @return \Illuminate\Http\Response
     */
    public function created($data, $code = 201)
    {
        return response([
            "status" => true,
            "data" => $data,
        ], $code);
    }

    /**
     * This will be return after successfully created
     * @param  mixed $data
     * @param  integer $code
     * @return \Illuminate\Http\Response
     */
    public function accepted($data, $code = 202)
    {
        return response([
            "status" => true,
            "data" => $data,
        ], $code);
    }

    /**
     * This will be return during failure
     * @param  mixed $data
     * @param  integer $code
     * @return \Illuminate\Http\Response
     */
    public function failed($message = 'Failed', $code = 400)
    {
        return response([
            "status" => false,
            "message" => __($message),
        ], $code);
    }

    /**
     * This will be return during failure
     * @param  integer $code
     * @return \Illuminate\Http\Response
     */
    public function notFound($code = 404)
    {
        return response([
            "status" => false,
            "message" => __("No record found."),
        ], $code);
    }

    /**
     * This will be return for forbidden action
     * @param  integer $code
     * @return \Illuminate\Http\Response
     */
    public function forbidden($code = 403)
    {
        return response([
            "status" => false,
            "message" => __("Forbidden request."),
        ], $code);
    }

    /**
     * This will be return for unauthorize access
     * @param  integer $code
     * @return \Illuminate\Http\Response
     */
    public function unauthorize($code = 401)
    {
        return response([
            "status" => false,
            "message" => __("Unauthorize request."),
        ], $code);
    }

    public function invalidLogin($code = 401)
    {
        return response([
            "status" => false,
            "message" => __("Email / Phone No did not match with the password."),
        ], $code);
    }

    public function serverError($code = 500, $message = null)
    {
        return response([            
            "status" => false,
            "message" => $message ?: __("Internal server error."),
        ], $code);
    }

    /**
     * This will be return for Server Error
     * @param  integer $code
     * @return \Illuminate\Http\Response
     */
    public function error($code = 500, $message = null)
    {
        return response([            
            "status" => false,
            "message" => $message ?: __("Error."),
        ], $code);
    }

    /**
     * This will be return for Server Error
     * @param  integer $code
     * @return \Illuminate\Http\Response
     */
    public function errors($errors, $message = null, $code = 422)
    {
        return response([            
            "status" => false,
            "message" => $message ?: __("Error."),
            "errors" => $errors ?? null,
        ], $code);
    }

    /**
     * This will be return if record is exist
     * @param  mixed $data
     * @param  integer $code
     * @return \Illuminate\Http\Response
     */
    public function exist($data, $code = 200)
    {
        return response([
            "status" => false,
            "data" => $data,
        ], $code);
    }

    public function validationError($errors, $code = 422)
    {
        return response([            
            "status" => false,
            "message" => __("Validation error."),
            "errors" => $errors,
        ], $code);
    }

    public function handleResponse($response){
        if(isset($response->status) && $response->status) {
            if (isset($response->message)) {
                return $this->success($response->data, $response->message);
            } else {
                return $this->success($response->data);
            }            
        }

        if(isset($response->message) || isset($response->errors)) {
            if(isset($response->errors)) {
                return $this->validationError($response->errors);
            } else{
                return $this->failed($response->message);
            }
        }

        return $this->failed(__("Error."));
    }

}
