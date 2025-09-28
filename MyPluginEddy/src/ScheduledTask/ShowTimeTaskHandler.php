<?php
declare(strict_types=1);

namespace ShowTime;

use Shopware\Core\Framework\MessageQueue\ScheduledTask\ScheduledTaskHandler;

class ShowTimeTaskHandler extends ScheduledTaskHandler
{
    public static function getHandledMessages(): iterable
    {
        return [ShowTimeTask::class];
    }

    public function run(): void
    {
        file_put_contents(
            __DIR__ . '/showtime.log',
            "[" . date('Y-m-d H:i:s') . "] Task wurde ausgeführt\n",
            FILE_APPEND
        );
    }
}
