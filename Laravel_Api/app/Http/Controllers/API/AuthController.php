<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Validator;

class AuthController extends Controller
{
    /**
     * Register a new user.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     *
     * @SWG\Post(
     * path="/api/register",
     * tags={"Users"},
     * summary="Cadastro de novo usuário",
     * @SWG\Paramter(
     * name="body",
     * in="body",
     * required=true,
     * @SWG\Schema(ref="#/definitions/User"),
     * description="Json format",
     * ),
     * @SWG\Response(
     * response=201,
     * description="Sucesso: operação realizada com sucesso"
     * ),
     * @SWG\Response(
     * response=401,
     * description="Recusado: Não autenticado"
     * ),
     * @SWG\Response(
     * response="422",
     * description="Campo requerido"
     * ),
     * @SWG\Response(
     * response="404",
     * description="Não encontrado"
     * )
     * ),
     */
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'unit_id' => 'required',
            'key' => 'required|min:4|max:4|unique:users',
            'name' => 'required|max:20',
            'email' => 'required|email',
            'password' => 'required',
            ]);

            if ($validator->fails()) {
                return response()->json($validator->errors(), 422);
            }

            $user =User::create([
                'unit_id' => $request->unit_id,
                'key' => $request->key,
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
                'active' => true,
            ]);

            $token = auth()->login($user);
            return response()->json([
                'access_token' => $token,
                'token_type' => 'bearer',
                'expires_in' => auth()->factory()->getTTL() * 60
            ], 201);

    }

    /**
     * Log in a user.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     *
     * @SWG\Post(
     * path="/api/login",
     * tags={"Users"},
     * summary="Logar um usuário",
     * @SWG\Paramter(
     * name="body",
     * in="body",
     * required=true,
     * @SWG\Schema(ref="#/definitions/User"),
     * description="Json format",
     * ),
     * @SWG\Response(
     * response=200,
     * description="Sucesso: operação realizada com sucesso"
     * ),
     * @SWG\Response(
     * response=401,
     * description="Recusado: Não autenticado"
     * ),
     * @SWG\Response(
     * response="422",
     * description="Campo requerido"
     * ),
     * @SWG\Response(
     * response="404",
     * description="Não encontrado"
     * )
     * ),
     */
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'key' => 'required|min:4|max:4|unique:users',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $credentials = $request->only(['key', 'password']);

        if (!$token = auth()->attempt($credentials)) {
            return response()->json(['error' => 'Credenciais inválidas'], 400);
        }

        $current_user = $request->key;
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60
        ], 200);
    }

    /**
     * Logout in a user.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     *
     * @SWG\Post(
     * path="/api/logout",
     * tags={"Users"},
     * summary="Deslogar um usuário",
     * @SWG\Paramter(
     * name="body",
     * in="body",
     * required=true,
     * @SWG\Schema(ref="#/definitions/User"),
     * description="Json format",
     * ),
     * @SWG\Response(
     * response=200,
     * description="Sucesso: operação realizada com sucesso"
     * ),
     * @SWG\Response(
     * response=401,
     * description="Recusado: Não autenticado"
     * ),
     * @SWG\Response(
     * response="422",
     * description="Campo requerido"
     * ),
     * @SWG\Response(
     * response="404",
     * description="Não encontrado"
     * ),
     * @SWG\Response(
     * response="405",
     * description="Entrada inválida"
     * ),
     * security={
     * { "api_key":{} }
     * }
     * ),
     */
    public function logout(Request $request)
    {
        auth()->logout(true); // Force token to blacklist
        return response()->json(['success' => 'Logged out Successfully.'], 200);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *
     * @SWG\Get(
     * path="/api/users",
     * tags={"Users"},
     * summary="Lista Usuários",
     * @SWG\Response(
     * response=200,
     * description="Sucesso: Lista de todos os usuários",
     * @SWG\Schema(ref="#/definitions/User")
     * ),
     * @SWG\Response(
     * response="404",
     * description="Não Encontrado"
     * )
     * ),
     */
    public function index()
    {
        $listUser = User::all();
        return $listUser;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     *
     * @SWG\Post(
     * path="/api/users/{id}",
     * tags={"Users"},
     * summary="Buscar Usuário Pelo Id",
     * @SWG\Paramter(
     *     name="id",
     *     in="path",
     *     required=true,
     *     type="integer",
     *     description = "Mostrar o usuário especificado pelo id.",
     *  ),
     * @SWG\Response(
     * response 200,
     * description="Sucesso: Retorna o usuário",
     * @SWG\Schema(ref="#/definitions/User")
     * ),
     * @SWG\Response(
     * response="404",
     * description="Não Encontrado",
     * ),
     * @SWG\Response(
     * response="405",
     * description="Metódo HTTP inválido",
     * ),
     * )
     */
    public function show($id)
    {
        $showUserById = User::findOrFail($id);
        return $showUserById;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     *
     * @SWG\Put(
     * path = "/api/users/{id}",
     * tags = {"Users"},
     * summary = "Atualizar Usuário",
     * @SWG\Paramter(
     *     name="id",
     *     in="path",
     *     required=true,
     *     type="integer",
     *     description="Atualizar o usuário especificado pelo id.",
     *  ),
     * @SWG\Paramter(
     *     name="body",
     *     in="body",
     *     required=true,
     *     @SWG\Schema(ref="#/definitions/User"),
     *     description="Json format",
     *  ),
     * @SWG\Response(
     * response=200,
     * description="Sucesso: Retorna o usuário atualizado",
     * @SWG\Schema(ref="#/definitions/User")
     * ),
     * @SWG\Response(
     * response="422",
     * description="Campo requerido não preenchido",
     * ),
     * @SWG\Response(
     * response="404",
     * description="Não Encontrado",
     * ),
     * @SWG\Response(
     * response="405",
     * description="Metódo HTTP inválido",
     * )
     * ),
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'unit_id' => 'required',
            'key' => 'required|min:4|max:4|unique:users',
            'name' => 'required|max:20',
            'email' => 'required|email',
            'password' => 'required',
            ]);

            if ($validator->fails()) {
                return response()->json($validator->errors(), 422);
            }

        $updateUserById = User::findOrFail($id);
        $updateUserById->update($request->all());
        return $updateUserById;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     *
     * @SWG\Delete(
     * path="/api/users/{id}",
     * tags={"Users"},
     * summary="Remover Usuário",
     * description="Remover o usuário especificado pelo id.",
     * @SWG\Paramter(
     *     name="id",
     *     in="path",
     *     required=true,
     *     type="integer",
     *     format="int64",
     *     description="Id do usuário para remover.",
     *  ),
     * @SWG\Response(
     * response="404",
     * description="Não Encontrado",
     * ),
     * @SWG\Response(
     * response="405",
     * description="Metódo HTTP inválido",
     * )
     * @SWG\Response(
     * response=204,
     * description="Sucesso: usuário removido",
     * ),
     * )
     */
    public function destroy($id)
    {
        $deleteById = User::find($id)->delete();
        return response()->json([], 204);
    }
}
