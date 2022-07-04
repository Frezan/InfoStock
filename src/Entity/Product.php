<?php

namespace App\Entity;

use App\Repository\ProductRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProductRepository::class)]
class Product
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $name;

    #[ORM\Column(type: 'float')]
    private $price;

    #[ORM\Column(type: 'boolean', nullable: true)]
    private $promotion;

    #[ORM\Column(type: 'float', nullable: true)]
    private $promotionPercentage;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $description;

    #[ORM\Column(type: 'string', length: 255)]
    private $brand;

    #[ORM\ManyToOne(targetEntity: SubCategory::class, inversedBy: 'products')]
    #[ORM\JoinColumn(nullable: false)]
    private $subCat;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(float $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function isPromotion(): ?bool
    {
        return $this->promotion;
    }

    public function setPromotion(?bool $promotion): self
    {
        $this->promotion = $promotion;

        return $this;
    }

    public function getPromotionPercentage(): ?float
    {
        return $this->promotionPercentage;
    }

    public function setPromotionPercentage(?float $promotionPercentage): self
    {
        $this->promotionPercentage = $promotionPercentage;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getBrand(): ?string
    {
        return $this->brand;
    }

    public function setBrand(string $brand): self
    {
        $this->brand = $brand;

        return $this;
    }

    public function getSubCat(): ?SubCategory
    {
        return $this->subCat;
    }

    public function setSubCat(?SubCategory $subCat): self
    {
        $this->subCat = $subCat;

        return $this;
    }
}
