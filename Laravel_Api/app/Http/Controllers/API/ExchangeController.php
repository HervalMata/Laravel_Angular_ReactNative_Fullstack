<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Exchange;
use Validator;

class ExchangeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *
     * @SWG\Get(
     * path = "/api/exchanges",
     * tags = {"Exchanges"},
     * summary = "Lista Situações",
     * @SWG\Response(
     * response = 200,
     * description = "Sucesso: Lista de todas as situações",
     * @SWG\Schema(ref = "#/definitions/Exchange")
     * ),
     * @SWG\Response(
     * response = "404",
     * description = "Não Encontrado"
     * )
     * ),
     */
    public function index()
    {
        $listExchange = Exchange::all();
        return $listExchange;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     *
     * @SWG\Post(
     * path = "/api/exchanges",
     * tags = {"Exchanges"},
     * summary = "Cadastrar Troca",
     * @SWG\Paramter(
     *     name = "body",
     *     in = "body",
     *     required = true,
     *     @SWG\Schema(ref = "#/definitions/Exchange"),
     *     description = "Json format",
     *  ),
     * @SWG\Response(
     * response = 201,
     * description = "Sucesso: Uma nova troca foi cadastrada",
     * @SWG\Schema(ref = "#/definitions/Exchange")
     * ),
     *  @SWG\Response(
     * response = "422",
     * description = "Campo requerido não preenchido",
     * ),
     *  @SWG\Response(
     * response = "404",
     * description = "Não Encontrado",
     * ),
     *  @SWG\Response(
     * response = "405",
     * description = "Metódo HTTP inválido",
     * )
     * ).
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'unit_id' => 'required',
            'user1_id' => 'required',
            'team1_id' => 'required',
            'user2_id' => 'required',
            'team2_id' => 'required',
            'date1' => 'required',
            'turn1_id' => 'required',
            'type1_id' => 'required',
            'type2_id' => 'required',
            'date2' => 'required',
            'turn2_id' => 'required',
            'type3_id' => 'required',
            'type4_id' => 'required',
            'situation_id' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $createExchange = Exchange::create($request->all());
        return $createExchange;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     *
     * @SWG\Post(
     * path = "/api/exchanges/{id}",
     * tags = {"Exchanges"},
     * summary = "Buscar Troca Pelo Id",
     * @SWG\Paramter(
     *     name = "id",
     *     in = "path",
     *     required = true,
     *     type = "integer",
     *     description = "Mostrar a troca especificada pelo id.",
     *  ),
     *  @SWG\Response(
     * response = 200,
     * description = "Sucesso: Retorna a troca",
     * @SWG\Schema(ref = "#/definitions/Exchange")
     * ),
     *  @SWG\Response(
     * response = "404",
     * description = "Não Encontrado",
     * ),
     *  @SWG\Response(
     * response = "405",
     * description = "Metódo HTTP inválido",
     * )
     * )
     */
    public function show($id)
    {
        $showExchangeById = Exchange::findOrFail($id);
        return $showExchangeById;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     *
     * @SWG\Put(
     * path = "/api/exchanges/{id}",
     * tags = {"Exchanges"},
     * summary = "Atualizar Troca",
     * @SWG\Paramter(
     *     name = "id",
     *     in = "path",
     *     required = true,
     *     type = "integer",
     *     description = "Atualizar a troca especificada pelo id.",
     *  ),
     * @SWG\Paramter(
     *     name = "body",
     *     in = "body",
     *     required = true,
     *     @SWG\Schema(ref = "#/definitions/Exchange"),
     *     description = "Json format",
     *  ),
     *  @SWG\Response(
     * response = 200,
     * description = "Sucesso: Retorna a troca atualizada",
     * @SWG\Schema(ref = "#/definitions/Exchange")
     * ),
     * @SWG\Response(
     * response = "422",
     * description = "Campo requerido não preenchido",
     * ),
     *  @SWG\Response(
     * response = "404",
     * description = "Não Encontrado",
     * ),
     *  @SWG\Response(
     * response = "405",
     * description = "Metódo HTTP inválido",
     * )
     * ),
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'unit_id' => 'required',
            'user1_id' => 'required',
            'team1_id' => 'required',
            'user2_id' => 'required',
            'team2_id' => 'required',
            'date1' => 'required',
            'turn1_id' => 'required',
            'type1_id' => 'required',
            'type2_id' => 'required',
            'date2' => 'required',
            'turn2_id' => 'required',
            'type3_id' => 'required',
            'type4_id' => 'required',
            'situation_id' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $updateExchangeById = Exchange::findOrFail($id);
        $updateExchangeById->update($request->all());
        return $updateExchangeById;
    }
}
