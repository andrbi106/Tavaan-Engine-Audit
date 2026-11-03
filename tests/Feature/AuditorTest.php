<?php

declare(strict_types=1);

namespace Tavaan\Engine\Audit\Tests\Feature;

use PHPUnit\Framework\TestCase;
use Tavaan\Engine\Audit\Auditor;
use Tavaan\Engine\Audit\AuditorServiceProvider;
use Tavaan\Core\Contracts\Config\RepositoryInterface;

/**
 * تست‌های Feature برای موتور Auditor.
 *
 * هر سناریوی T-NN از مستندات باید به یک متد testTNN_* تبدیل شود.
 */
final class AuditorTest extends TestCase
{
    private Auditor $engine;

    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->createMock(RepositoryInterface::class);
        $config->method('get')->willReturn(null);
        $this->engine = new Auditor($config);
    }

    /**
     * T-01: record با hash chain درست
     */
    public function test_t01_record__hash_chain_(): void
    {
        // TODO: پیاده‌سازی سناریوی T-01 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-01 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-02: دستکاری یک رکورد → `verify` fail
     */
    public function test_t02_____verify_fail(): void
    {
        // TODO: پیاده‌سازی سناریوی T-02 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-02 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-03: حذف یک رکورد → `verify` fail
     */
    public function test_t03_____verify_fail(): void
    {
        // TODO: پیاده‌سازی سناریوی T-03 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-03 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-04: Observer خودکار روی Model
     */
    public function test_t04_observer___model(): void
    {
        // TODO: پیاده‌سازی سناریوی T-04 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-04 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-05: `exclude_fields` mask می‌شود
     */
    public function test_t05_exclude_fields_mask_(): void
    {
        // TODO: پیاده‌سازی سناریوی T-05 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-05 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-06: Queue mode async
     */
    public function test_t06_queue_mode_async(): void
    {
        // TODO: پیاده‌سازی سناریوی T-06 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-06 هنوز پیاده‌سازی نشده است.');
    }

}