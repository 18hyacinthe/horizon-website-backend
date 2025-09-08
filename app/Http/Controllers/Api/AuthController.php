<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    /**
     * Login admin
     */
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $admin = Admin::where('email', $request->email)->first();

        if (!$admin || !Hash::check($request->password, $admin->password)) {
            throw ValidationException::withMessages([
                'email' => ['Les informations d\'identification fournies sont incorrectes.'],
            ]);
        }

        // Create a simple token (you could use Sanctum for production)
        $token = base64_encode($admin->id . '|' . now()->timestamp . '|' . $admin->email);

        return response()->json([
            'message' => 'Connexion réussie',
            'admin' => [
                'id' => $admin->id,
                'name' => $admin->name,
                'email' => $admin->email,
            ],
            'token' => $token,
        ]);
    }

    /**
     * Logout admin
     */
    public function logout(Request $request)
    {
        return response()->json([
            'message' => 'Déconnexion réussie',
        ]);
    }

    /**
     * Check if admin is authenticated
     */
    public function me(Request $request)
    {
        $token = $request->bearerToken();

        if (!$token) {
            return response()->json(['message' => 'Non authentifié'], 401);
        }

        try {
            $decoded = base64_decode($token);
            $parts = explode('|', $decoded);

            if (count($parts) !== 3) {
                return response()->json(['message' => 'Token invalide'], 401);
            }

            $adminId = $parts[0];
            $admin = Admin::find($adminId);

            if (!$admin) {
                return response()->json(['message' => 'Admin non trouvé'], 401);
            }

            return response()->json([
                'admin' => [
                    'id' => $admin->id,
                    'name' => $admin->name,
                    'email' => $admin->email,
                ],
            ]);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Token invalide'], 401);
        }
    }
}
