<?php

namespace lesstif\NginxSite;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArray;
use Symfony\Component\Console\Output\OutputInterface;

class SiteEnableCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('site:enable')
            ->setDescription('enable nginx site in sites-enable directory')
            ->addOption(
                'name',
                 null,
                InputOption::VALUE_REQUIRED,
                'Who do you want to greet?'
            )         
        ;

    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $name = $input->getOption('name');
        if ($name) {
            $text = 'site: '.$name;
        } else {
            $text = 'site:';
        }

        $output->writeln($text);
    }
}