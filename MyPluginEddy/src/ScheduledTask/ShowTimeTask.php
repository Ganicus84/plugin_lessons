<?php
declare(strict_types=1);

namespace MyPluginEddy;

use Shopware\Core\Framework\MessageQueue\ScheduledTask\ScheduledTask;

class ShowTimeTask extends ScheduledTask
{
    public static function getTaskName(): string
    {
        return 'show_time.task';
    }

    public static function getDefaultInterval(): int
    {
        return 60;
    }
}
