<?php

declare(strict_types=1);

/*|--------------------------------------------------------------------------
 | Audit Engine Configuration
 |--------------------------------------------------------------------------
 |
 | پیکربندی موتور audit — همهٔ کلیدهای مستندشده در `docs/03-engines/audit.md` بخش «پیکربندی».
 |
 |@see https://github.com/Derogaramin/Tavaan-Doc/blob/main/docs/03-engines/audit.md
 */

return [
    /*| پیش‌فرض موتور (driver/store یا حالت فعال) */
    'default' => env('AUDIT_DEFAULT', 'default'),

    /*| کلید کش (در صورت استفاده) */
    'prefix' => env('AUDIT_PREFIX', 'audit:'),

    /*| تنظیمات لاگ */
    'log' => [
        'channel' => env('AUDIT_LOG_CHANNEL', 'audit'),
    ],

    /*| Facade */
    'facade' => [
        'name' => 'Audit',
        'accessor' => 'audit',
    ],

    /*| سایر کلیدها (طبق مستندات) */
    'options' => [
        // TODO: کلیدهای اضافی طبق سند §۶ (پیکربندی)
    ],
];