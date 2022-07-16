<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    private $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function index(Request $request)
    {
        $params = $request->all();

        $query = $this->user;
        if (isset($params['name']) && !empty($params['name'])) {
            $query = $query->where('name', 'like', "%{$params['name']}%");
        }
        if (isset($params['phone']) && !empty($params['phone'])) {
            $query = $query->where('phone', 'like', "%{$params['phone']}%");
        }
        if (isset($params['address']) && !empty($params['address'])) {
            $query = $query->where('address', 'like', "%{$params['address']}%");
        }
        $response = $query->orderBy('id', 'desc')->paginate();

        return $this->responseSuccess($response);
    }

    public function store(Request $request)
    {
        $data = $request->only('name', 'phone', 'address');
        $user = $this->user->create($data);
        return $this->responseSuccess($user);
    }

    public function update(Request $request, $id)
    {
        $user = $this->user->where('id', $id)->first();
        if (!$user) {
            return $this->responseError('User not found');
        }
        $data = $request->only('name', 'phone', 'address');
        $user->update($data);
        return $this->responseSuccess($user);
    }

    public function destroy($id)
    {
        $user = $this->user->where('id', $id)->first();
        if (!$user) {
            return $this->responseError('User not found');
        }
        $user->delete();
        return $this->responseSuccess();
    }
}
