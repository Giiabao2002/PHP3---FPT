<?php

namespace App\Http\Resources;

use Illuminate\Support\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class Product extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id'=>$this->id,
            'tenSP'=>$this->tenSP,
            'giaSP'=>$this->gia,
            'status'=>$this->anHien,
            // sử dụng Carbon để ko lỗi date
            'created_at'=>Carbon::parse($this->created_at)->format('d/m/Y'),
            'updated_at'=>Carbon::parse($this->update_at)->format('d/m/Y'),
        ];
    }
}
