<?php

class Product {
  private int $id;
  private string $name;
  private float $price;
  private string $category;

  public function __construct(int $id, string $name, float $price, string $category) {
    $this->id = $id;
    $this->name = $name;
    $this->price = $price;
    $this->category = $category;
  }

  // Getter
  public function getId(): int {
    return $this->id;
  }

  public function getName(): string {
    return $this->name;
  }

  public function getPrice(): float {
    return $this->price;
  }

  public function getCategory(): string {
    return $this->category;
  }

  public function setId(int $id): void {
    $this->id = $id;
  }

  public function setName(string $name): void {
    $this->name = $name;
  }

  public function setPrice(float $price): void {
    $this->price = $price;
  }

  public function setCategory(string $category): void {
    $this->category = $category;
  }
}

$products = [
  new Product(1, 'Product 1', 10, 'Shoes'),
  new Product(2, 'Product 2', 20, 'TelePhone'),
  new Product(3, 'Product 3', 30, 'Shoes'),
  new Product(4, 'Product 4', 40, 'Clothing'),
  new Product(5, 'Product 5', 50, 'TelePhone')
];

function filterProductsByCategory($products, $categoryName){
  $result = [];
  foreach($products as $product){
    if($product->getCategory() === $categoryName){
      $result[] = $product;
    }
  }
  return $result;
}

$filteredProducts = filterProductsByCategory($products, 'Shoes');
print_r($filteredProducts);

function applyDiscount($products, $percent){
  foreach($products as $product){
    $product->setPrice($product->getPrice() * (1 - $percent / 100));
  }
}

applyDiscount($filteredProducts, 10);
print_r($filteredProducts);
