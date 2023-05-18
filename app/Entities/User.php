<?php

namespace App\Entities;

use ReflectionException;

/**
 * @OA\Schema(
 *     title="Product",
 *     description="Product entity model",
 * )
 */
class User
{
    /**
     * @OA\Property(
     *     title="User ID",
     *     description="User ID",
     *     type="integer",
     *     example="123"
     * )
     */
    private int $id;


    /**
     * @OA\Property(
     *     title="User name",
     *     description="User name",
     *     type="string",
     *     example="Antonio García"
     * )
     */
    private string $name;

    /**
     * @OA\Property(
     *     title="User email",
     *     description="User email",
     *     type="string",
     *     example="antoniogarcia@gmail.com"
     * )
     */
    private string $email;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     *
     * @return $this
     */
    public function setId(int $id): self
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
     *
     * @return $this
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     *
     * @return $this
     */
    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }
}
