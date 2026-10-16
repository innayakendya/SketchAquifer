<?php
/**
 * Tests for SketchAquifer
 */

use PHPUnit\Framework\TestCase;
use Sketchaquifer\Sketchaquifer;

class SketchaquiferTest extends TestCase {
    private Sketchaquifer $instance;

    protected function setUp(): void {
        $this->instance = new Sketchaquifer(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Sketchaquifer::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
