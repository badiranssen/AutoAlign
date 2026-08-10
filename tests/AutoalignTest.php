<?php
/**
 * Tests for AutoAlign
 */

use PHPUnit\Framework\TestCase;
use Autoalign\Autoalign;

class AutoalignTest extends TestCase {
    private Autoalign $instance;

    protected function setUp(): void {
        $this->instance = new Autoalign(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Autoalign::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
