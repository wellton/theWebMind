<?php

require_once dirname(__FILE__) . '/../../../../../mind3rd/API/classes/Mind.php';
require_once dirname(__FILE__) . '/../../../../../mind3rd/API/languages/pt-BR/Verbalizer.php';

/**
 * Test class for Verbalizer.
 * Generated by PHPUnit on 2010-12-17 at 22:16:50.
 */
class VerbalizerTest extends PHPUnit_Framework_TestCase {

	/**
	 * @var Verbalizer
	 */
	protected $object;

	/**
	 * Sets up the fixture, for example, opens a network connection.
	 * This method is called before a test is executed.
	 */
	protected function setUp() {
		$this->object = new Verbalizer;
	}

	/**
	 * Tears down the fixture, for example, closes a network connection.
	 * This method is called after a test is executed.
	 */
	protected function tearDown() {

	}

	/**
	 * @todo Implement testIsVerb().
	 */
	public function testIsVerb() {
		$this->assertTrue(Verbalizer::isVerb('correr'));
	}
	public function testIsVerb1() {
		$this->assertTrue(Verbalizer::isVerb('nadar'));
	}
	public function testIsVerb2() {
		$this->assertTrue(Verbalizer::isVerb('nadam'));
	}
	public function testIsVerb3() {
		$this->assertTrue(Verbalizer::isVerb('ministrarão'));
	}
	public function testIsVerb4() {
		$this->assertTrue(Verbalizer::isVerb('apresentar'));
	}
	public function testIsVerb5() {
		$this->assertTrue(Verbalizer::isVerb('coloco'));
	}
	public function testIsVerb6() {
		$this->assertTrue(Verbalizer::isVerb('lemos'));
	}
	public function testIsVerb7() {
		$this->assertTrue(Verbalizer::isVerb('correremos'));
	}
	public function testIsVerb8() {
		$this->assertTrue(Verbalizer::isVerb('ministrarão'));
	}
	public function testIsVerb9() {
		$this->assertTrue(Verbalizer::isVerb('tomamos'));
	}
	public function testIsVerb10() {
		$this->assertTrue(Verbalizer::isVerb('comemos'));
	}
	public function testIsVerb11() {
		$this->assertTrue(Verbalizer::isVerb('beberemos'));
	}
	public function testIsVerb12() {
		$this->assertTrue(Verbalizer::isVerb('tomo'));
	}
	public function testIsVerb13() {
		$this->assertTrue(Verbalizer::isVerb('como'));
	}
	public function testIsVerb14() {
		$this->assertTrue(Verbalizer::isVerb('toma'));
	}
	public function testIsVerb15() {
		$this->assertTrue(Verbalizer::isVerb('coma'));
	}
	public function testIsVerb17() {
		$this->assertTrue(Verbalizer::isVerb('levantaremos'));
	}
	public function testIsVerb18() {
		$this->assertFalse(Verbalizer::isVerb('abajur'));
	}
	public function testIsVerb19() {
		$this->assertFalse(Verbalizer::isVerb('cadeira'));
	}
	public function testIsVerb20() {
		$this->assertFalse(Verbalizer::isVerb('violão'));
	}
	public function testIsVerb21() {
		$this->assertTrue(Verbalizer::isVerb('falhar'));
	}
	public function testIsVerb22() {
		$this->assertTrue(Verbalizer::isVerb('falhei'));
	}
	public function testIsVerb23() {
		$this->assertTrue(Verbalizer::isVerb('falharei'));
	}
	public function testIsVerb24() {
		$this->assertTrue(Verbalizer::isVerb('falhou'));
	}
	public function testIsVerb25() {
		$this->assertTrue(Verbalizer::isVerb('falhamos'));
	}
	public function testIsVerb26() {
		$this->assertTrue(Verbalizer::isVerb('falharei'));
	}
	public function testIsVerb27() {
		$this->assertTrue(Verbalizer::isVerb('falharemos'));
	}
	public function testIsVerb28() {
		$this->assertTrue(Verbalizer::isVerb('correu'));
	}
	public function testIsVerb29() {
		$this->assertTrue(Verbalizer::isVerb('correrás'));
	}
	public function testIsVerb30() {
		$this->assertTrue(Verbalizer::isVerb('falhará'));
	}
	public function testIsVerb31() {
		$this->assertTrue(Verbalizer::isVerb('comeu'));
	}
	public function testIsVerb32() {
		$this->assertFalse(Verbalizer::isVerb('professor'));
	}

	// testing the toInfinitive method
	// NOTICE that its goals is about the present/future words...
	// past is not supported
	public function testToInfinitive1() {
		$this->assertEquals('saber', Verbalizer::toInfinitive('sei'));
	}
	public function testToInfinitive2() {
		$this->assertEquals('poderá', Verbalizer::toInfinitive('poderá'));
	}
	public function testToInfinitive3() {
		$this->assertEquals('amar', Verbalizer::toInfinitive('ama'));
	}
	public function testToInfinitive4() {
		$this->assertEquals('correr', Verbalizer::toInfinitive('corre'));
	}
	public function testToInfinitive5() {
		$this->assertEquals('correr', Verbalizer::toInfinitive('correm'));
	}
	public function testToInfinitive6() {
		$this->assertEquals('lavar', Verbalizer::toInfinitive('lavam'));
	}
	public function testToInfinitive7() {
		$this->assertEquals('ministrar', Verbalizer::toInfinitive('ministram'));
	}
	public function testToInfinitive8() {
		$this->assertEquals('ter', Verbalizer::toInfinitive('terão'));
	}
	public function testToInfinitive9() {
		$this->assertEquals('alimentar', Verbalizer::toInfinitive('alimentarão'));
	}
	public function testToInfinitive10() {
		$this->assertEquals('pôr', Verbalizer::toInfinitive('põe'));
	}
	public function testToInfinitive11() {
		$this->assertEquals('colocar', Verbalizer::toInfinitive('colocarão'));
	}
	public function testToInfinitive12() {
		$this->assertEquals('varrer', Verbalizer::toInfinitive('varrer'));
	}

	/**
	 * @todo Implement testLoadVerbs().
	 */
	public function testLoadVerbs() {
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
				'This test has not been implemented yet.'
		);
	}

}

?>
