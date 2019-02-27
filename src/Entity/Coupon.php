<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CouponRepository")
 */
class Coupon
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $num;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $referee;

    /**
     * @ORM\Column(type="float")
     */
    private $balance;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNum(): ?string
    {
        return $this->num;
    }

    public function setNum(string $num): self
    {
        $this->num = $num;

        return $this;
    }

    public function getReferee(): ?string
    {
        return $this->referee;
    }

    public function setReferee(string $referee): self
    {
        $this->referee = $referee;

        return $this;
    }

    public function getBalance(): ?float
    {
        return $this->balance;
    }

    public function setBalance(float $balance): self
    {
        $this->balance = $balance;

        return $this;
    }
}
