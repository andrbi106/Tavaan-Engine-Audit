<?php

declare(strict_types=1);

namespace Tavaan\Engine\Audit\Console;

use Tavaan\Core\Contracts\Console\CommandInterface;

/**
 * audit:prune command.
 */
final class Audit_pruneCommand implements CommandInterface
{
    public function name(): string
    {
        return 'audit:prune';
    }

    public function description(): string
    {
        return 'Run audit:prune (TODO: fill description).';
    }

    public function handle(array $args = []): int
    {
        // TODO: پیاده‌سازی command مطابق مستندات.
        return 0;
    }
}
