<?php

namespace App\Entity;

use App\Repository\CustomerRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CustomerRepository::class)]
class Customer
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $fullName = null;

    #[ORM\Column(length: 255)]
    private ?string $adress = null;

    #[ORM\Column(length: 255)]
    private ?string $mapsLongetude = null;

    #[ORM\Column(length: 255)]
    private ?string $mapsLatitude = null;

    #[ORM\Column(length: 255)]
    private ?string $shopImage = null;

    #[ORM\Column(length: 255)]
    private ?string $phoneNumber = null;

    #[ORM\ManyToOne(inversedBy: 'customers')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Company $company = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFullName(): ?string
    {
        return $this->fullName;
    }

    public function setFullName(string $fullName): static
    {
        $this->fullName = $fullName;

        return $this;
    }

    public function getAdress(): ?string
    {
        return $this->adress;
    }

    public function setAdress(string $adress): static
    {
        $this->adress = $adress;

        return $this;
    }

    public function getMapsLongetude(): ?string
    {
        return $this->mapsLongetude;
    }

    public function setMapsLongetude(string $mapsLongetude): static
    {
        $this->mapsLongetude = $mapsLongetude;

        return $this;
    }

    public function getMapsLatitude(): ?string
    {
        return $this->mapsLatitude;
    }

    public function setMapsLatitude(string $mapsLatitude): static
    {
        $this->mapsLatitude = $mapsLatitude;

        return $this;
    }

    public function getShopImage(): ?string
    {
        return $this->shopImage;
    }

    public function setShopImage(string $shopImage): static
    {
        $this->shopImage = $shopImage;

        return $this;
    }

    public function getPhoneNumber(): ?string
    {
        return $this->phoneNumber;
    }

    public function setPhoneNumber(string $phoneNumber): static
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    public function getCompany(): ?Company
    {
        return $this->company;
    }

    public function setCompany(?Company $company): static
    {
        $this->company = $company;

        return $this;
    }
}
