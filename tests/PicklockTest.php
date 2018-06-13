<?php
declare(strict_types=1);


namespace m0rtis\Picklock\Test;

use m0rtis\Picklock\Picklock;
use PHPUnit\Framework\TestCase;

class PicklockTest extends TestCase
{

    public function testCallMethod(): void
    {
        $testClass = new class
        {
            private function test(string $value): string
            {
                return $value;
            }
        };

        $this->assertEquals(
            'testValue',
            Picklock::callMethod($testClass, 'test', 'testValue')
        );

        $this->expectException(\RuntimeException::class);
        $this->expectExceptionMessage(
            sprintf(
                'Class %s does not have the method %s',
                \get_class($testClass),
                'unknownMethod'
            )
        );

        Picklock::callMethod($testClass, 'unknownMethod');
    }
}
