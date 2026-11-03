<?php

declare(strict_types=1);

namespace Tavaan\Engine\Audit\Console;

use Tavaan\Core\Contracts\Console\CommandInterface;

/**
 * audit:verify command.
 */
final class Audit_verifyCommand implements CommandInterface
{
    public function name(): string
    {
        return 'audit:verify';
    }

    public function description(): string
    {
        return 'Run audit:verify (TODO: fill description).';
    }

    public function handle(array $args = []): int
    {
        // TODO: پیاده‌سازی command مطابق مستندات.
        return 0;
    }
}
