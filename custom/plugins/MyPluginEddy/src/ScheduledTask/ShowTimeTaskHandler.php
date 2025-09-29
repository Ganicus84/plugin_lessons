<?php
declare(strict_types=1);

namespace MyPluginEddy\ScheduledTask;

use Shopware\Core\Framework\MessageQueue\ScheduledTask\ScheduledTaskHandler;
use MyPluginEddy\Service\FilesystemService;
use Psr\Log\LoggerInterface;

class ShowTimeTaskHandler extends ScheduledTaskHandler
{
    private FilesystemService $filesystem;
    private LoggerInterface $logger;

    public function __construct(FilesystemService $filesystem, LoggerInterface $logger)
    {
        $this->filesystem = $filesystem;
        $this->logger = $logger;
    }

    public static function getHandledMessages(): iterable
    {
        return [ShowTimeTask::class];
    }

    public function run(): void
    {
        // Schreiben in eigene Datei
        $this->filesystem->writeFile(
            'logs/showtime.log',
            "[" . date('Y-m-d H:i:s') . "] Task wurde ausgeführt\n"
        );

        // Schreiben ins Shopware-Log (var/log/prod.log)
        $this->logger->info('ShowTimeTaskHandler wurde ausgeführt!');
    }
}
