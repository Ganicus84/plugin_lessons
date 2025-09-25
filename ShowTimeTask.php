<?php

declare(strict_type =1);

namespace ShowTime;

use Shopware\Core\Framework\MessageQueue\ScheduledTask\ScheduledTask;

class ShowTimeTask extends ScheduledTask
{

    public static function getTaskName() : string{

        return 'show_time.task';
  
    }

    public static function getDefaultInterval() : int{
        return 60;
    }


}



<?php


declare(strict_types = 1);

namespace ShowTime;

use Shopware\Core\Framework\MessageQueue\ScheduledTask\ScheduledTask;

class ShowTimeTask extends ScheduledTask {

    public static function getTaskName() :string {
        return 'show_time.task';
    }

    public static function getDefaultInterval() : int {
        return 60;
    }
}




























