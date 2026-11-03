<?php

declare(strict_types=1);

namespace Tavaan\Engine\Audit;

use Tavaan\Core\Contracts\Container\ContainerInterface;
use Tavaan\Core\Contracts\Config\RepositoryInterface as ConfigRepository;
use Tavaan\Engine\Audit\Contracts\AuditorInterface;
use Tavaan\Core\Provider\ServiceProvider;

/**
 * AuditorServiceProvider — ثبت سرویس‌های موتور Auditor.
 */
final class AuditorServiceProvider extends ServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public function register(): void
    {
        $this->app->singleton(AuditorInterface::class, function (ContainerInterface $app) {
            /** @var ConfigRepository $config */
            $config = $app->get(ConfigRepository::class);
            return new Auditor($config);
        });
    }

    /**
     * {@inheritdoc}
     */
    public function boot(): void
    {
        // ثبت Facade
        $this->app->instance('audit', $this->app->get(AuditorInterface::class));

        // ثبت commandها
        $this->commands[] = \Tavaan\Engine\Audit\Console\Audit_verifyCommand::class;
        $this->commands[] = \Tavaan\Engine\Audit\Console\Audit_exportCommand::class;
        $this->commands[] = \Tavaan\Engine\Audit\Console\Audit_pruneCommand::class;
        $this->commands[] = \Tavaan\Engine\Audit\Console\Audit_showCommand::class;

    }

    /**
     * {@inheritdoc}
     */
    public function provides(): array
    {
        return [
            AuditorInterface::class,
            'audit',
        ];
    }
}