<?php

declare(strict_types=1);

namespace Tavaan\Engine\Audit\Tests\Unit;

use Tavaan\Testing\TestCase;
use Tavaan\Engine\Audit\Auditor;

/**
 * T-NN scenario tests for the audit engine.
 *
 * Generated from ROADMAP.md scenarios — real implementations, not placeholders.
 */
final class AuditScenarioTest extends TestCase
{'    public function t01_record_hash_chain(): void\n    {\n        // Scenario T-01\n$a = new Auditor("secret-key");\n        $id1 = $a->record(["action" => "login", "user" => "u1"]);\n        $id2 = $a->record(["action" => "logout", "user" => "u1"]);\n        $this->assertCount(2, $a->entries());\n        $this->assertTrue($a->verify(), "hash chain should verify");\n        $this->assertNotEmpty($id1);\n        $this->assertNotEmpty($id2);\n    }\n    public function t02_tamper_breaks_verify(): void\n    {\n        // Scenario T-02\n$a = new Auditor("k");\n        $a->record(["amount" => 100]);\n        $a->record(["amount" => 200]);\n        // Mutate the first entry\'s data\n        $entries = $a->entries();\n        $this->assertCount(2, $entries);\n        // Tamper via reflection\n        $r = new \\ReflectionClass($a);\n        $prop = $r->getProperty("entries");\n        $entries = $prop->getValue($a);\n        $entries[0]["data"]["amount"] = 999;\n        $prop->setValue($a, $entries);\n        $this->assertFalse($a->verify(), "tampered chain should fail verify");\n    }\n    public function t03_export_filters(): void\n    {\n        // Scenario T-03\n$a = new Auditor();\n        $a->record(["type" => "auth", "user" => "u1"]);\n        $a->record(["type" => "data", "user" => "u2"]);\n        $a->record(["type" => "auth", "user" => "u3"]);\n        $auth = $a->export(fn($e) => ($e["data"]["type"] ?? "") === "auth");\n        $this->assertCount(2, $auth);\n    }\n    public function t04_prune_old_entries(): void\n    {\n        // Scenario T-04\n$a = new Auditor();\n        $a->record(["v" => 1]);\n        $a->record(["v" => 2]);\n        $deleted = $a->prune(90);\n        $this->assertSame(0, $deleted, "nothing older than 90 days yet");\n        $this->assertCount(2, $a->entries());\n    }\n    public function t05_last_hash_tracks_chain(): void\n    {\n        // Scenario T-05\n$a = new Auditor("secret");\n        $this->assertSame("", $a->lastHash());\n        $a->record(["x" => 1]);\n        $h1 = $a->lastHash();\n        $this->assertNotEmpty($h1);\n        $a->record(["x" => 2]);\n        $h2 = $a->lastHash();\n        $this->assertNotSame($h1, $h2);\n    }'}
