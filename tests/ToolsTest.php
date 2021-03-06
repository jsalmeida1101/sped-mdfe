<?php

/**
 * Class ToolsMDFeTest
 * @author Roberto L. Machado <linux.rlm at gmail dot com>
 */
use NFePHP\MDFe\Tools;

class ToolsTest extends PHPUnit_Framework_TestCase
{
    public $mdfe;
    
    /**
     * @expectedException NFePHP\Common\Exception\InvalidArgumentException
     */
    public function testeInstanciar()
    {
        $configJson = dirname(__FILE__) . '/fixtures/config/fakeconfig.json';
        $this->mdfe = new Tools($configJson);
    }
}
