<?php

namespace app\models;

use Yii;
use yii\base\Model;

class Task extends Model
{
    public $id;
    public $userId;
    public $taskName;
    public $description;
    public $ownerId;
    public $status;
    public $timeStart;
    public $timeFinish;

}
