<?php
/**
 * Tests for NftCove
 */

use PHPUnit\Framework\TestCase;
use Nftcove\Nftcove;

class NftcoveTest extends TestCase {
    private Nftcove $instance;

    protected function setUp(): void {
        $this->instance = new Nftcove(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Nftcove::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
