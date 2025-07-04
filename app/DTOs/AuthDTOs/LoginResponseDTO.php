<?php

namespace App\DTOs\AuthDTOs;

use App\DTOs\UserDTOs\UserDto;

class LoginResponseDto
{
    public function __construct(
        public array $user,
        public string $token,
        public string $tokenType
    ) {}

    public static function fromData(UserDto $userDto, string $token): self
    {
        return new self(
            user: $userDto->toArray(),
            token: $token,
            tokenType: 'Bearer'
        );
    }

    public function toArray(): array
    {
        return [
            'user' => $this->user,
            'token' => $this->token,
            'token_type' => $this->tokenType,
        ];
    }
}