<?php

namespace App\Http\Controllers\V1;

use App\Http\Requests\RegisterAuthRequest;
use App\Traits\ApiResponseTrait;
use Illuminate\Http\Request;
use App\Models\User;
use Validator;
use JWTAuth;
use App\Http\Controllers\Controller;
use Tymon\JWTAuth\Exceptions\JWTException;

class ApiController extends Controller
{
    use ApiResponseTrait;
    private $request;

    // public $loginAfterSignUp = true;

    public function __construct(Request $request) {
    $this->request = $request;
    }

    public function register(Request $request)
    {

     $this->validate($request, [
            'name'  => 'required|max:30',
            'email' => 'required|max:100|email',
        ]);

        $user = User::where('email', $request->email)->first();
        $users = json_decode($user);

         if($user)
         {
            return $this->exist('Email Sudah Ada');
         }
         else
         {
            $user           = new User();
            $user->name     = $request->name;
            $user->email    = $request->email;
            $user->password = bcrypt($request->password);
            $user->save();

            return $this->success($user);
         }
    }

    public function login(Request $request)
    {
        $input = $request->only('email', 'password');
        $jwt_token = null;
        $user = User::where('email', $this->request->input('email'))->first();

        if (!$jwt_token = JWTAuth::attempt($input)) {
            return response()->json([
                'success' => false,
                'message' => 'Invalid Email or Password',
            ], 401);
        }

        $data = array(
                        'id' => $user->id,
                        'name' => $user->name,
                        'email' => $user->email,
                        'token' => $jwt_token,
                     );

        return response()->json([
            'success' => true,
            'data' => $data,
        ]);
    }

    public function logout(Request $request)
    {
        $token = $request->bearerToken();

        try {
            JWTAuth::invalidate($token);

            return response()->json([
                'success' => true,
                'message' => 'User logged out successfully'
            ]);
        } catch (JWTException $exception) {
            return response()->json([
                'success' => false,
                'message' => 'Sorry, the user cannot be logged out'
            ], 500);
        }
    }

    public function getAuthUser(Request $request)
    {

        $token = $request->bearerToken();
        $user  = JWTAuth::authenticate($token);

        return $this->success($user);
    }
}
