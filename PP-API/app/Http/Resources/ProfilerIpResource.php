<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProfilerIpResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param Request $request
     * @return array
     */
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'ip_name' => $this->ip_name,
            'ip_description' => $this->ip_description,
            'ip_img' => env('APP_URL') . $this->ip_img,
            'profiler_info' => profilerInfoResource::make($this->profilerInfo),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
