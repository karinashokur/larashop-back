<?php
namespace App\Http\Resources\Products;
use Domain\Products\Product;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
final class ProductResource extends JsonResource
{
    public function toArray($request): array
    {
        $product = $this->resource;
        return [
            'id' => $product->getId()->toString(),
            'name' => $product->getName()->toString(),
            'price' => $product->getPrice()->getValue(),
        ];
    }
}
