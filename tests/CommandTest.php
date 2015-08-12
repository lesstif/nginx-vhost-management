<?php

use lesstif\NginxSite\SiteCreateCommand;
use lesstif\NginxSite\SiteRemoveCommand;
use lesstif\NginxSite\SiteEnableCommand;
use lesstif\NginxSite\SiteDisableCommand;

use Symfony\Component\Console\Application;
use Symfony\Component\Console\Tester\CommandTester;

class CommandTest extends \PHPUnit_Framework_TestCase
{
    public function testCreateSite()
    {
        $application = new Application();
        $application->add(new SiteCreateCommand());

        $command = $application->find('site:create');
        $commandTester = new CommandTester($command);
        $commandTester->execute(array('command' => $command->getName()));

        $this->assertRegExp('/.../', $commandTester->getDisplay());

        // ...
    }

    /**
     * @depends testCreateSite
     */
    public function testEnableSite()
    {
        $application = new Application();
        $application->add(new SiteEnableCommand());

        $command = $application->find('site:enable');
        $commandTester = new CommandTester($command);
        $commandTester->execute(array('command' => $command->getName()));

        $this->assertRegExp('/.../', $commandTester->getDisplay());

        // ...
    }

    /**
     * @depends testEnableSite
     */
    public function testDisableSite()
    {
        $application = new Application();
        $application->add(new SiteDisableCommand());

        $command = $application->find('site:disable');
        $commandTester = new CommandTester($command);
        $commandTester->execute(array('command' => $command->getName()));

        $this->assertRegExp('/.../', $commandTester->getDisplay());

        // ...
    }

    /**
     * @depends testDisableSite
     */
    public function testRemoveSite()
    {
        $application = new Application();
        $application->add(new SiteRemoveCommand());

        $command = $application->find('site:remove');
        $commandTester = new CommandTester($command);
        $commandTester->execute(array('command' => $command->getName()));

        $this->assertRegExp('/.../', $commandTester->getDisplay());

        // ...
    }
}