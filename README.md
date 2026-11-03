# Tavaan Engine — Audit

> **ممیزی** — موتور Audit در فریمورک تَوان

## مشخصات

| فیلد | مقدار |
|---|---|
| شناسه | `tavaan.engine.audit` |
| نام | `Audit` |
| عنوان فارسی | ممیزی |
| نسخه | `0.1.0` |
| namespace | `Tavaan\Engine\Audit` |
| نوع | `engine` |
| Facade | `Audit` (accessor: `audit`) |

## Facadeها

- `Tavaan\Engine\Audit\Facades\Audit`

## کلاس‌های اصلی

- `src/Audit.php`
- `src/AuditEvent.php`
- `src/AuditObserver.php`
- `src/Auditor.php`
- `src/Console/AuditExportCommand.php`
- `src/Console/AuditPruneCommand.php`
- `src/Console/AuditShowCommand.php`
- `src/Console/AuditVerifyCommand.php`
- `src/Observed.php`
- `src/VerifyResult.php`

## Service Providerها

- `Tavaan\Engine\Audit\AuditServiceProvider`

## وابستگی‌ها

**موتورهای مورد‌نیاز:**

- `event`
- `log`
- `crypt`
- `config`

## جداول دیتابیس

- `tvn_audit_logs`

## پیکربندی

- فایل پیکربندی: `config/audit.php`
- کلید: `audit`

## نصب

```bash
git clone https://github.com/andrbi106/Tavaan-Engine-Audit.git
```

این موتور بخشی از فریمورک تَوان است و معمولاً به‌صورت مستقیم نصب نمی‌شود،
بلکه توسط [Tavaan-Core](https://github.com/andrbi106/Tavaan-Core) مدیریت می‌شود.

## روابط با سایر مخازن

| مخزن | نقش |
|---|---|
| **`andrbi106/Tavaan-Engine-Audit`** (این مخزن) | موتور Audit |
| `andrbi106/Tavaan-Engine-Core` | ساختار پایه + درگاه ارتباط موتورها |
| `andrbi106/Tavaan-Core` | اسکلت اپلیکیشن + همهٔ موتورها |
| `Derogaramin/Tavaan-Framework` | فریمورک مادر (monorepo) |

## مجوز

MIT — هم‌راستا با فریمورک مادر تَوان.
