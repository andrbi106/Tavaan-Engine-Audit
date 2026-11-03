<?php

declare(strict_types=1);

namespace Tavaan\Engine\Audit\Contracts;

/**
 * قرارداد Auditor.
 *
 * @see \Tavaan\Engine\Audit\Auditor
 * @api 1.0
 */
interface AuditorInterface
{
    /**
     * متد record.
     *
     * @return mixed
     */
    public function record(/* ... */): mixed;

    /**
     * متد verify.
     *
     * @return mixed
     */
    public function verify(/* ... */): mixed;

    /**
     * متد export.
     *
     * @return mixed
     */
    public function export(/* ... */): mixed;

    /**
     * متد prune.
     *
     * @return mixed
     */
    public function prune(/* ... */): mixed;

    /**
     * متد lastHash.
     *
     * @return mixed
     */
    public function lastHash(/* ... */): mixed;
}