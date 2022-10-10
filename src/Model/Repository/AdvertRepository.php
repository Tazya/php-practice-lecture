<?php

namespace App\Model\Repository;

use App\Model\Entity\Advert;

class AdvertRepository
{
    private const DB_PATH = '../storage/adverts.json';

    public function getAll()
    {
        $result = [];

        foreach ($this->getData() as $advertData) {
            $result[] = new Advert($advertData);
        }

        return $result;
    }

    private function getData(): array
    {
        return json_decode(file_get_contents(self::DB_PATH), true) ?? [];
    }

    private function saveData(array $data):void
    {
        file_put_contents(self::DB_PATH, json_encode($data));
    }
}
