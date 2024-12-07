<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AuthenticationController extends Controller
{
    public function getPhoneNumber(Request $request)
    {
        // ----------------- step 1 -----------------
        $validator = Validator::make($request->all(), [
            'phone_number' => 'required|digits:10',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 422);
        }

        // ----------------- step 2 -----------------
        // store otp
        $otp = rand(1000, 9999);
        // otp, phone_number, created_at, updated_at, expired_at (now()->addMinutes(5)), isUsed
        // $otpDB;

        // ----------------- step 3 -----------------
        // send otp
        // serum system sms

        $isSMSSend = true;

        // ----------------- step 4 -----------------
        return response()->json([
            'message' => 'otp send',
            'status' => $isSMSSend,
            'expired_at' => now()->addMinutes(5)
        ], 200);

        // required
        // create otp in db
        // send otp
        // return response
    }
}
