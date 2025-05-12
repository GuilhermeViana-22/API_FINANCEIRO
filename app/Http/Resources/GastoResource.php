<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Carbon\Carbon;

class GastoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'user_id' => $this->user_id,
            'usuario_nome' => $this->user ? $this->user->name : null, // Nome do usuário
            'descricao' => $this->descricao,
            'valor' => 'R$ ' . number_format($this->valor, 2, ',', '.'),
            'data' => Carbon::parse($this->data)->format('d/m/Y'),
            'situacao_id' => $this->situacao_id,
            'ano' => Carbon::parse($this->ano)->format('Y'),
            'total' => 'R$ ' . number_format($this->total, 2, ',', '.'),
            'created_at' => Carbon::parse($this->created_at)->format('d/m/Y H:i:s'),
            'updated_at' => Carbon::parse($this->updated_at)->format('d/m/Y H:i:s'),
        ];
    }
}
