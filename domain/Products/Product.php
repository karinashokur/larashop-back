<?php
namespace Domain\Products;
use Illuminate\Database\Eloquent\Model;
final class Product extends Model
{
    public function setId(ProductId $productId): void
    {
        $this->uuid = $productId->toString();
    }
    public function setName(ProductName $productName): void
    {
        $this->name = $productName->toString();
    }
}
