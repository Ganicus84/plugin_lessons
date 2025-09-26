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
?>


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

?>

<?php

declare(strict_types=1);

namespace ShowTime;

use Shopware\Core\Framework\MessageQueue\ScheduledtTask\ScheduledTaskHandler;

class ShowTimeTaskHandler extends ScheduledTaskHandler{

    public static function getHandleMessages() : iterable{

        return[ShowTimeTask::class];
    }

    public function run() : void {
        file_put_contents(
            __DIR__ . '/showtime.log',
            "[" . date('Y-m-d H:i:s') . "] Task wurde ausgeführt\n",
            FILE_APPEND
        );
    }


}
?>

<?php
declare(strict_types=1);

namespace ShowTime;

use Shopware\Core\Framework\MessageQueue\ScheduledTask\ScheduledTaskHandler;

class ShowTimeTaskHandler extends ScheduledTaskHandler
{
    public static function getHandledMessages(): iterable
    {
        // Verknüpft diesen Handler mit deinem Task
        return [ShowTimeTask::class];
    }

    public function run(): void
    {
        // Hier passiert die eigentliche Logik, wenn der Task ausgeführt wird.
        // Beispiel: Schreibe einfach ins Logfile.
        file_put_contents(
            __DIR__ . '/showtime.log',
            "[" . date('Y-m-d H:i:s') . "] Task wurde ausgeführt\n",
            FILE_APPEND
        );
    }
}






























