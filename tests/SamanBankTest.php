<?php

/**
 * Class SamanBankTest
 */
class SamanBankTest extends PHPUnit_Framework_TestCase
{
    /**
     * Just check if the SamanBank has no syntax error
     *
     * This is just a simple check to make sure your library has no syntax error. This helps you troubleshoot
     * any typo before you even use this library in a real project.
     *
     */
    public function testIsThereAnySyntaxError()
    {
        $var = new SamanBank\Gateway\SamanBank;
        $this->assertTrue(is_object($var));
        unset($var);
    }

    /**
     * Just check if the SamanBank has no syntax error
     *
     * This is just a simple check to make sure your library has no syntax error. This helps you troubleshoot
     * any typo before you even use this library in a real project.
     *
     */
    public function testConnect()
    {
        $var = new SamanBank\Gateway\SamanBank;
        $this->assertTrue($var->connect("hey") == 'Hello World');
        unset($var);
    }

}