<?php

namespace App\Http\Controllers;

use App\Models\Gasto;
use Illuminate\Http\Request;
use App\Http\Resources\GastoResource;
use Illuminate\Support\Facades\Log;

class GastoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Request $request)
    {
        try {
            $query = Gasto::query();

            // Filtros de busca
            if ($request->has('descricao')) {
                $query->where('descricao', 'LIKE', '%' . $request->descricao . '%');
            }

            if ($request->has('user_id')) {
                $query->where('user_id', $request->user_id);
            }

            if ($request->has('ano')) {
                $query->whereYear('ano', $request->ano);
            }

            if ($request->has('situacao_id')) {
                $query->where('situacao_id', $request->situacao_id);
            }

            $gastos = $query->paginate(15);
            return GastoResource::collection($gastos);

        } catch (\Exception $e) {
            Log::error('Erro ao listar gastos: ' . $e->getMessage());
            return response()->json(['error' => 'Erro ao listar gastos.'], 500);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'user_id' => 'required|integer',
                'descricao' => 'required|string|max:255',
                'valor' => 'required|numeric|min:0',
                'data' => 'required|date',
                'situacao_id' => 'required|integer',
                'ano' => 'required|date_format:Y',
            ]);

            $gasto = Gasto::create($validatedData);
            return new GastoResource($gasto);

        } catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json(['errors' => $e->errors()], 422);
        } catch (\Exception $e) {
            Log::error('Erro ao criar gasto: ' . $e->getMessage());
            return response()->json(['error' => 'Erro ao criar gasto.'], 500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gasto  $gasto
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Gasto $gasto)
    {
        try {
            return new GastoResource($gasto);

        } catch (\Exception $e) {
            Log::error('Erro ao exibir gasto: ' . $e->getMessage());
            return response()->json(['error' => 'Erro ao exibir gasto.'], 500);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gasto  $gasto
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, Gasto $gasto)
    {
        try {
            $validatedData = $request->validate([
                'descricao' => 'sometimes|string|max:255',
                'valor' => 'sometimes|numeric|min:0',
                'data' => 'sometimes|date',
                'situacao_id' => 'sometimes|integer',
                'ano' => 'sometimes|date_format:Y',
            ]);

            $gasto->update($validatedData);
            return new GastoResource($gasto);

        } catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json(['errors' => $e->errors()], 422);
        } catch (\Exception $e) {
            Log::error('Erro ao atualizar gasto: ' . $e->getMessage());
            return response()->json(['error' => 'Erro ao atualizar gasto.'], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gasto  $gasto
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Gasto $gasto)
    {
        try {
            $gasto->delete();
            return response()->json(['message' => 'Gasto removido com sucesso.'], 200);

        } catch (\Exception $e) {
            Log::error('Erro ao remover gasto: ' . $e->getMessage());
            return response()->json(['error' => 'Erro ao remover gasto.'], 500);
        }
    }
}
