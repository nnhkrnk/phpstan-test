<?php 
namespace Koya\Phpstantest\level;

class Level2
{

}

/**
 * @method void defiend(String $param)
 */
class DefinedClass
{
    /**
     * @param $test
     */
    public function definedMethod($test2) {
        // do the work
    }
}

$instance = new DefinedClass();
$instance->definedMethod("");
$instance->undefinedMethod("");