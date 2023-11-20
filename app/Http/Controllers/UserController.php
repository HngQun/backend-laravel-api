<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\UserStoreRequest;
use PhpParser\Node\Stmt\TryCatch;

class UserController extends Controller
{
    public function getAllUsers()
    {
        $users = User::all();
        return response()->json([
            'results' => $users
        ], 200);
    }

    public function getUser($id)
    {
        $users = User::find($id);

        if (!$users) {
            return response()->json([
                'message' => 'User Not Found.'
            ], 404);
        }

        return response()->json([
            'results' => $users
        ], 200);
    }

    public function createUser(UserStoreRequest $request)
    {
        try {
            User::created([
                'name' => $request->name,
                'email' => $request->email,
                'password' => $request->password,
                'phone' => $request->phone,
                'address' => $request->address
            ]);

            return response()->json([
                'message' => "Successfully"
            ], 500);
        } catch (\Exception $e) {
            return response()->json([
                'message' => "Something went wrong"
            ], 500);
        }
    }

    public function updateUser(UserStoreRequest $request, $id)
    {
        try {
            $users = User::find($id);
            if (!$users) {
                return response()->json([
                    'message' => "Not Found"
                ], 404);
            }

            $users->name = $request->name;
            $users->email = $request->email;
            $users->password = $request->password;
            $users->phone = $request->phone;
            $users->address = $request->address;

            $users->save();

            return response()->json([
                'message' => "Updated successfully"
            ], 404);

        } catch (\Exception $e) {
            return response()->json([
                'message' => "Something went wrong"
            ], 500);
        }
    }

    public function deleteUser($id)
    {
        $user = User::find($id);

        if (!$user) {
            return response()->json(['message' => 'User not found'], 404);
        }

        $user->delete();

        return response()->json(['message' => 'User deleted successfully']);
    }

    // Thêm các phương thức khác

}
