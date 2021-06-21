<?php
namespace Tests\Unit\Http\Resources\Products;
use App\Http\Resources\Products\ProductResource;
use Domain\Products\Product;
use Illuminate\Http\Request;
use Tests\TestCase;
final class ProductResourceTest extends TestCase
{
    public function itTransformsProductIntoArray(): void
    {
        $product = factory(Product::class)->make();
        $resource = new ProductResource($product);
        $this->assertEquals(
            [
                'id' => $product->getId()->toString(),
                'name' => $product->getName()->toString(),
                'price' => $product->getPrice()->getValue(),
            ],
            $resource->toArray(new Request())
        );
    }
}
