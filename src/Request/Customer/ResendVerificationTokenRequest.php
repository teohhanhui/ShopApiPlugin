<?php

declare(strict_types=1);

namespace Sylius\ShopApiPlugin\Request\Customer;

use Sylius\ShopApiPlugin\Command\CommandInterface;
use Sylius\ShopApiPlugin\Command\Customer\SendVerificationToken;
use Sylius\ShopApiPlugin\Request\CommandRequestInterface;

class ResendVerificationTokenRequest implements CommandRequestInterface
{
    protected $email;
    protected $channelCode;

    public function __construct(string $email = '', string $channelCode = '')
    {
        $this->email = $email;
        $this->channelCode = $channelCode;
    }

    /**
     * {@inheritdoc}
     *
     * @return SendVerificationToken
     */
    public function getCommand(): CommandInterface
    {
        return new SendVerificationToken($this->email, $this->channelCode);
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getChannelCode(): string
    {
        return $this->channelCode;
    }
}
