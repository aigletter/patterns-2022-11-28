<?php

/*$promotionRepository = new \patterns\Facade\PromotionRepository();
$userRepository = new \patterns\Facade\UserRepository();
$mailer = new \patterns\Facade\Mailer();

$users = $userRepository->getItemsDirect();
$actions = $promotionRepository->getCurrentActions();
foreach ($users as $user) {
    foreach ($actions as $action) {
        $mailer->mail($user['email'], $action['subject'], $action['content']);
    }
}*/

use patterns\Facade\PromotionManager;

$promotionManger = new PromotionManager();
$promotionManger->start();