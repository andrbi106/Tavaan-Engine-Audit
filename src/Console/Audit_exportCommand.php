<?php

declare(strict_types=1);

namespace Tavaan\Engine\Audit\Console;

use Tavaan\Core\Contracts\Console\CommandInterface;

/**
 * audit:export command.
 */
final class Audit_exportCommand implements CommandInterface
{
    public function name(): string
    {
        return 'audit:export';
    }

    public function description(): string
    {
        return 'Run audit:export (TODO: fill description).';
    }

    public function handle(array $args = []): int
    {
        // TODO: پیاده‌سازی command مطابق مستندات.
        return 0;
    }
}
