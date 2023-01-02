<?php

namespace patterns\Facade;

class PromotionRepository
{
    public function getCurrentActions()
    {
        return [
            'id' => 1,
            'title' => 'Большие скидки на рыбу',
            'content' => 'Длинный текст'
        ];
    }
}