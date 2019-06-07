<?php

namespace App\Http\Controllers\User;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller {

    public function register(Request $request) {
        $retObj = new \stdClass();
        try {

            $user_id = $request->user_id;
            $name = $request->name;
            $gender = $request->gender;
            $stream = $request->stream;
            $dob = $request->dob;
            $hobbies = json_encode($request->hobbies);
            if (!$user_id) {
                $res = User::insert(['name' => $name,
                            'gender' => $gender,
                            'stream' => $stream,
                            'dob' => $dob,
                            'hobbies' => $hobbies]);
            } else {
                $res = User::where('user_id', $user_id)->update(['name' => $name,
                    'gender' => $gender,
                    'stream' => $stream,
                    'dob' => $dob,
                    'hobbies' => $hobbies]);
            }
            if ($res) {
                $retObj->status = 0;
            } else {
                $retObj->status = 1;
            }
        } catch (\Exception $ex) {
            dd($ex);
        }
        return json_encode($retObj);
    }

    public function getuserdetails() {
        $retObj = new \stdClass();
        try {
            $res = User::all();
            if ($res) {
                $retObj->status = 0;
                $retObj->userdetails = $res;
            } else {
                $retObj->status = 1;
            }
        } catch (\Exception $ex) {
            dd($ex);
        }
        return json_encode($retObj);
    }

    public function delete(Request $request) {
        $retObj = new \stdClass();
        try {
            $user_id = $request->user_id;
            $res = User::where('user_id', $user_id)->delete();
            if ($res) {
                $retObj->status = 0;
            } else {
                $retObj->status = 1;
            }
        } catch (Exception $ex) {
            dd($ex);
        }
        return json_encode($retObj);
    }

    public function update(Request $request) {
        $retObj = new \stdClass();
        try {
            $user_id = $request->user_id;
            $name = $request->name;
            $gender = $request->gender;
            $stream = $request->stream;
            $dob = $request->dob;
            $hobbies = json_encode($request->hobbies);

            $res = User::where('user_id', $user_id)->update(['name' => $name,
                'gender' => $gender,
                'stream' => $stream,
                'dob' => $dob,
                'hobbies' => $hobbies]);
            if ($res) {
                $retObj->status = 0;
            } else {
                $retObj->status = 1;
            }
        } catch (Exception $ex) {
            dd($ex);
        }
        return json_encode($retObj);
    }

    public function userdetails(Request $request) {
        $retObj = new \stdClass();
        try {
            $user_id = $request->user_id;
            $res = User::where('user_id', $user_id)->first();
            if ($res) {
                $retObj->status = 0;
                $retObj->userdetails = $res;
            } else {
                $retObj->status = 1;
            }
        } catch (\Exception $ex) {
            dd($ex);
        }
        return json_encode($retObj);
    }

}
