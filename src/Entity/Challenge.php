<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\ChallengeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=ChallengeRepository::class)
 */
class Challenge
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $emoji;

    /**
     * @ORM\Column(type="integer")
     */
    private $points;

    /**
     * @ORM\ManyToMany(targetEntity=SummerList::class, mappedBy="challenges")
     */
    private $summerLists;

    public function __construct()
    {
        $this->summerLists = new ArrayCollection();
    }

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

    public function getEmoji(): ?string
    {
        return $this->emoji;
    }

    public function setEmoji(?string $emoji): self
    {
        $this->emoji = $emoji;

        return $this;
    }

    public function getPoints(): ?int
    {
        return $this->points;
    }

    public function setPoints(int $points): self
    {
        $this->points = $points;

        return $this;
    }

    /**
     * @return Collection|SummerList[]
     */
    public function getSummerLists(): Collection
    {
        return $this->summerLists;
    }

    public function addSummerList(SummerList $summerList): self
    {
        if (!$this->summerLists->contains($summerList)) {
            $this->summerLists[] = $summerList;
            $summerList->addChallenge($this);
        }

        return $this;
    }

    public function removeSummerList(SummerList $summerList): self
    {
        if ($this->summerLists->removeElement($summerList)) {
            $summerList->removeChallenge($this);
        }

        return $this;
    }
}
