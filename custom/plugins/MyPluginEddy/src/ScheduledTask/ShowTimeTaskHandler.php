<?php
declare(strict_types=1);

namespace MyPluginEddy\ScheduledTask;

use Shopware\Core\Framework\MessageQueue\ScheduledTask\ScheduledTaskHandler;
use MyPluginEddy\Service\FilesystemService;

class ShowTimeTaskHandler extends ScheduledTaskHandler
{
    private FilesystemService $filesystem;

    public function __construct(FilesystemService $filesystem)
    {
        $this->filesystem = $filesystem;
    }

    public static function getHandledMessages(): iterable
    {
        return [ShowTimeTask::class];
    }

    public function run(): void
    {
        $this->filesystem->writeFile(
            'logs/showtime.log',
            "[" . date('Y-m-d H:i:s') . "] Task wurde ausgeführt\n"
        );
    }
}
