<?php
/**
 * This is project's console commands configuration for Robo task runner.
 *
 * @see http://robo.li/
 */
class RoboFile extends \Robo\Tasks
{
    public function test($arg)
    {
    	$this->say("Menjalakan perintah dengan parameter: " . $arg);
    	$this->_exec("git " . $arg);
    }
}