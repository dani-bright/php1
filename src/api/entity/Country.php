<?php

namespace App\api\entity;

class Country implements \JsonSerializable
{
    public $name = "";
    public $id;
    public $city_id = "";

    /**
     * @return mixed
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getCityId(): string
    {
        return $this->city_id;
    }

    /**
     * @param mixed $id
     */
    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    /**
     * @param mixed $cityId
     */
    public function setCityId(string $cityId): void
    {
        $this->city_id = $cityId;
    }

    /**
     * @param mixed $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }


    /**
     * Specify data which should be serialized to JSON
     * @link https://php.net/manual/en/jsonserializable.jsonserialize.php
     * @return mixed data which can be serialized by <b>json_encode</b>,
     * which is a value of any type other than a resource.
     * @since 5.4.0
     */
    public function jsonSerialize():array
    {
        return [
            'id'=>$this->getId(),
            'name'=>$this->getName(),
            'CityId'=>$this->getCityId(),
        ];
    }
}