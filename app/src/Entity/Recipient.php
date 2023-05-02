<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: "recipients")]
class Recipient
{
    #[ORM\Id]
    #[ORM\Column(type: "integer")]
    #[ORM\GeneratedValue]
    private ?int $id;

    #[ORM\Column(type: "string")]
    private string $name;

    #[ORM\Column(type: "string", nullable: true)]
    private ?string $telegramUsername;

    #[ORM\Column(type: "string", nullable: true)]
    private ?string $telegramId;

    #[ORM\Column(type: "string", nullable: true)]
    private ?string $phoneNumber;

    #[ORM\Column(type: "string", nullable: true)]
    private ?string $emailAddress;

    #[ORM\Column(type: "datetime")]
    private ?\DateTime $createdAt;

    public function __construct()
    {
        $this->createdAt = new \DateTime();
    }

    /**
     * @return string|null
     */
    public function getTelegramUsername(): ?string
    {
        return $this->telegramUsername;
    }

    /**
     * @param string|null $telegramUsername
     * @return Recipient
     */
    public function setTelegramUsername(?string $telegramUsername): Recipient
    {
        $this->telegramUsername = $telegramUsername;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getTelegramId(): ?string
    {
        return $this->telegramId;
    }

    /**
     * @param string|null $telegramId
     * @return Recipient
     */
    public function setTelegramId(?string $telegramId): Recipient
    {
        $this->telegramId = $telegramId;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int|null $id
     * @return Recipient
     */
    public function setId(?int $id): Recipient
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Recipient
     */
    public function setName(string $name): Recipient
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }

    /**
     * @param \DateTime|null $createdAt
     * @return Recipient
     */
    public function setCreatedAt(?\DateTime $createdAt): Recipient
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPhoneNumber(): ?string
    {
        return $this->phoneNumber;
    }

    /**
     * @param string|null $phoneNumber
     * @return Recipient
     */
    public function setPhoneNumber(?string $phoneNumber): Recipient
    {
        $this->phoneNumber = $phoneNumber;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getEmailAddress(): ?string
    {
        return $this->emailAddress;
    }

    /**
     * @param string|null $emailAddress
     * @return Recipient
     */
    public function setEmailAddress(?string $emailAddress): Recipient
    {
        $this->emailAddress = $emailAddress;
        return $this;
    }
}