<?php

namespace app\controllers;

use Yii;
use DateTime;

class BaseController {

    public function createdAt() {
        $date = new DateTime('now', new \DateTimeZone('Asia/Jakarta'));
        return $created_at = $date->format('Y:m:d H:i:s');
    }

    public function createdBy() {
        return $userId = Yii::$app->user->id;
    }
}
