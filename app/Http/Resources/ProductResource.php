<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'description' => $this->description,
            'image' => $this->image,
            'category' => $this->category,
            'category_display' => $this->category_display,
            'subcategory' => $this->subcategory,
            'price' => $this->price,
            'gallery' => $this->gallery,
            'features' => $this->features,
            'specifications' => $this->specifications,
            'tech_sheet_url' => $this->tech_sheet_url,
            'serial_prefix' => $this->serial_prefix,
            'slug' => $this->slug,
            'meta_description' => $this->meta_description,
            'is_active' => $this->is_active,
            'created_at' => $this->created_at?->format('Y-m-d H:i:s'),
            'updated_at' => $this->updated_at?->format('Y-m-d H:i:s'),
        ];
    }
}
