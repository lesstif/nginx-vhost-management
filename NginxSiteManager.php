<?php

namespace lesstif\NginxSite;

require __DIR__.'/vendor/autoload.php';

use Symfony\Component\Console\Application;

use lesstif\NginxSite\SiteCreateCommand;
use lesstif\NginxSite\SiteRemoveCommand;
use lesstif\NginxSite\SiteEnableCommand;
use lesstif\NginxSite\SiteDisableCommand;

$application = new Application();

// add commands

$application->add(new SiteRemoveCommand());
$application->add(new SiteEnableCommand());
$application->add(new SiteDisableCommand());
$application->add(new SiteCreateCommand());

//
$application->run();