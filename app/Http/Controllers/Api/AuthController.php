<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
    public function getUsers(){
        Log::info('AuthController@getUsers called');
        return response()->json([
            'users' => "Hello"
        ]);
    }

}
