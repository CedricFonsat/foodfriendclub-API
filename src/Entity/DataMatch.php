<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\DataMatchRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DataMatchRepository::class)]
#[ApiResource]
class DataMatch
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $championnat = null;

    #[ORM\Column(length: 255)]
    private ?string $teamfirst = null;

    #[ORM\Column(length: 255)]
    private ?string $teamsecond = null;

    #[ORM\Column(length: 255)]
    private ?string $time = null;

    #[ORM\Column]
    private ?float $firstcote = null;

    #[ORM\Column]
    private ?float $secondcote = null;

    #[ORM\Column]
    private ?float $nullcote = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getChampionnat(): ?string
    {
        return $this->championnat;
    }

    public function setChampionnat(string $championnat): self
    {
        $this->championnat = $championnat;

        return $this;
    }

    public function getTeamfirst(): ?string
    {
        return $this->teamfirst;
    }

    public function setTeamfirst(string $teamfirst): self
    {
        $this->teamfirst = $teamfirst;

        return $this;
    }

    public function getTeamsecond(): ?string
    {
        return $this->teamsecond;
    }

    public function setTeamsecond(string $teamsecond): self
    {
        $this->teamsecond = $teamsecond;

        return $this;
    }

    public function getTime(): ?string
    {
        return $this->time;
    }

    public function setTime(string $time): self
    {
        $this->time = $time;

        return $this;
    }

    public function getFirstcote(): ?float
    {
        return $this->firstcote;
    }

    public function setFirstcote(float $firstcote): self
    {
        $this->firstcote = $firstcote;

        return $this;
    }

    public function getSecondcote(): ?float
    {
        return $this->secondcote;
    }

    public function setSecondcote(float $secondcote): self
    {
        $this->secondcote = $secondcote;

        return $this;
    }

    public function getNullcote(): ?float
    {
        return $this->nullcote;
    }

    public function setNullcote(float $nullcote): self
    {
        $this->nullcote = $nullcote;

        return $this;
    }
}
