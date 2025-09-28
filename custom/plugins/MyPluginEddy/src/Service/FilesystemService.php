<?php
declare(strict_types=1);

namespace MyPluginEddy\Service;

use League\Flysystem\FilesystemOperator;

class FilesystemService
{
    private FilesystemOperator $filesystem;

    public function __construct(FilesystemOperator $defaultFilesystem)
    {
        $this->filesystem = $defaultFilesystem;
    }

    public function writeFile(string $path, string $content): void
    {
        $this->filesystem->write($path, $content);
    }

    public function readFile(string $path): ?string
    {
        if (!$this->filesystem->fileExists($path)) {
            return null;
        }

        return $this->filesystem->read($path);
    }

    public function deleteFile(string $path): void
    {
        if ($this->filesystem->fileExists($path)) {
            $this->filesystem->delete($path);
        }
    }
}
