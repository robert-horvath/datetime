<?php
declare(strict_types = 1);
namespace RHo\DateTime;

use PHPUnit\Framework\TestCase;

final class FormatterTest extends TestCase
{

    protected $dt;

    protected function setUp()
    {
        $this->dt = new \DateTime('2000-01-31 23:59:58.048429 CET');
    }

    public function testHttpLongDateTime(): void
    {
        $this->assertEquals('Mon, 31 Jan 2000 22:59:58 GMT', Formatter::toHttpLongDateTime($this->dt));
    }

    public function testHttpLongDateTimeWithMillisecond(): void
    {
        $this->assertEquals('Mon, 31 Jan 2000 22:59:58.048429 GMT', Formatter::toHttpLongDateTimeWithMillisecond($this->dt));
    }

    public function testMySqlDateTime(): void
    {
        $this->assertEquals('2000-01-31 23:59:58', Formatter::toMySqlDateTime($this->dt));
    }

    public function testMySqlDateTimeWithMillisecond(): void
    {
        $this->assertEquals('2000-01-31 23:59:58.048429', Formatter::toMySqlDateTimeWithMillisecond($this->dt));
    }
}