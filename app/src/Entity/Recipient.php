<?php

namespace App\Entity;

class Recipient
{
    private ?string $telegramAccount;

    private ?string $phoneNumber;

    private ?string $emailAddress;

    /**
     * @return string|null
     */
    public function getTelegramAccount(): ?string
    {
        return $this->telegramAccount;
    }

    /**
     * @param string|null $telegramAccount
     * @return Recipient
     */
    public function setTelegramAccount(?string $telegramAccount): Recipient
    {
        $this->telegramAccount = $telegramAccount;
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