<?php

namespace Moovin\Job\Backend\Tests;

use Moovin\Job\Backend;

/**
 * Teste unitário da classe Moovin\Job\Backend\Exemplo
 */
class ExemploTest extends \PHPUnit_Framework_TestCase
{
    /** @var Backend\Exemplo */
    protected $exemplo;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        $this->exemplo = new Backend\Exemplo();
    }

    /**
     * @covers Moovin\Job\Backend\Example::examplo
     */
    public function testExemplo()
    {
        $this->assertEquals('Exemplo', $this->exemplo->exemplo());
    }
}
