<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    /**
     * Listar todos los usuarios (solo admin).
     */
    public function index()
    {
        return response()->json(Usuario::with('rol')->get());
    }

    /**
     * Ver un usuario por id.
     */
    public function show($id)
    {
        $usuario = Usuario::with('rol')->findOrFail($id);
        return response()->json($usuario);
    }

    /**
     * Actualizar usuario.
     */
    public function update(Request $request, $id)
    {
        $usuario = Usuario::findOrFail($id);

        $request->validate([
            'nombre' => 'sometimes|string|max:255',
            'email' => 'sometimes|string|email|unique:users,email,' . $id,
            'password' => 'nullable|string|min:6|confirmed',
            'rol_id' => 'sometimes|exists:roles,id',
        ]);

        $usuario->update([
            'nombre' => $request->nombre ?? $usuario->nombre,
            'email' => $request->email ?? $usuario->email,
            'rol_id' => $request->rol_id ?? $usuario->rol_id,
            'password' => $request->password ? Hash::make($request->password) : $usuario->password,
        ]);

        return response()->json($usuario);
    }

    /**
     * Eliminar usuario.
     */
    public function destroy($id)
    {
        $usuario = Usuario::findOrFail($id);
        $usuario->delete();

        return response()->json(['message' => 'Usuario eliminado correctamente']);
    }
}
