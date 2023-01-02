<?php

namespace patterns\Facade;

class UserRepository
{
    public function getItemsDirect()
    {
        return [
            [
                'id' => 1,
                'name' => 'John',
                'email' => 'john@gmail.com'
            ],
            [
                'id' => 2,
                'name' => 'Sergey',
                'email' => 'sergey@gmail.com'
            ]
        ];
    }

    public function getItemsCallback(callable $callback)
    {
        $items = $this->getItemsDirect();

        return $callback($items);
    }
}