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
     * @ORM\Column(type="float")
     */
    private $balance;

    /**
     * @ORM\Column(type="integer")
     */
    private $agentid;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $payment;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $paydate;

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

    public function getBalance(): ?float
    {
        return $this->balance;
    }

    public function setBalance(float $balance): self
    {
        $this->balance = $balance;

        return $this;
    }

    public function getAgentid(): ?int
    {
        return $this->agentid;
    }

    public function setAgentid(int $agentid): self
    {
        $this->agentid = $agentid;

        return $this;
    }

    public function getPayment(): ?float
    {
        return $this->payment;
    }

    public function setPayment(?float $payment): self
    {
        $this->payment = $payment;

        return $this;
    }

    public function getPaydate(): ?\DateTimeInterface
    {
        return $this->paydate;
    }

    public function setPaydate(?\DateTimeInterface $paydate): self
    {
        $this->paydate = $paydate;

        return $this;
    }
}
