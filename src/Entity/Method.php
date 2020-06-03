<?php

namespace App\Entity;

use App\Repository\MethodRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MethodRepository::class)
 */
class Method
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $meth_name;

    /**
     * @ORM\Column(type="datetime")
     */
    private $meth_createdAt;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMethName(): ?string
    {
        return $this->meth_name;
    }

    public function setMethName(string $meth_name): self
    {
        $this->meth_name = $meth_name;

        return $this;
    }

    public function getMethCreatedAt(): ?\DateTimeInterface
    {
        return $this->meth_createdAt;
    }

    public function setMethCreatedAt(\DateTimeInterface $meth_createdAt): self
    {
        $this->meth_createdAt = $meth_createdAt;

        return $this;
    }
}
