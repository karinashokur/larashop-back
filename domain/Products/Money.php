<?php
namespace Domain\Products;
use RuntimeException;
final class Money
{
    private $value;
    public function __construct(float $value)
    {
        if ($value <= 0) {
            return new RuntimeException('Money value must be positive');
        }
        $this->value = $value;
    }
    public static function fromValue(float $value): self
    {
        return new self($value);
    }
    public function getValue(): float
    {
        return $this->value;
    }
}
