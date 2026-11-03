<?php

declare(strict_types=1);

namespace Tavaan\Engine\Audit\Console;

use Tavaan\Core\Contracts\Console\CommandInterface;

/**
 * audit:show command.
 */
final class Audit_showCommand implements CommandInterface
{
    public function name(): string
    {
        return 'audit:show';
    }

    public function description(): string
    {
        return 'Run audit:show (TODO: fill description).';
    }

    public function handle(array $args = []): int
    {
        // TODO: پیاده‌سازی command مطابق مستندات.
        return 0;
    }
}
