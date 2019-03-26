<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use EllipseSynergie\ApiResponse\Contracts\Response;
use App\User;
use App\Transformer\UserTransformer;


class UserController extends Controller
{
    protected $response;

        public function __construct(Response $response)
        {
            $this->response = $response;
        }

        public function index()
        {
            //Get all user
            $users = User::paginate(50);
            // Return a collection of $user with pagination
            return $this->response->withPaginator($users, new  UserTransformer());
        }

        public function show($id)
        {
            //Get the user
            $user = User::find($id);
            if (!$user) {
                return $this->response->errorNotFound('user Not Found');
            }
            // Return a single user
            return $this->response->withItem($user, new  UserTransformer());
        }

        public function destroy($id)
        {
            //Get the user
            $user = User::find($id);
            if (!$user) {
                return $this->response->errorNotFound('user Not Found');
            }

            if($user->delete()) {
                return $this->response->withItem($user, new  UserTransformer());
            } else {
                return $this->response->errorInternalError('Could not delete a user');
            }

        }

        public function store(Request $request)  {
            if ($request->isMethod('put')) {
                //Get the user
                $user = User::find($request->user_id);
                if (!$user) {
                    return $this->response->errorNotFound('user Not Found');
                }
            } else {
                $user = new User;
            }

            $user->id = $request->input('user_id');
            $user->name = $request->input('name');
            $user->description = $request->input('description');
            $user->user_id =  1; //$request->user()->id;

            if($user->save()) {
                return $this->response->withItem($user, new  UserTransformer());
            } else {
                return $this->response->errorInternalError('Could not updated/created a user');
            }

        }
}
