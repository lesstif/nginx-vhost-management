<?php

namespace lesstif\NginxSite;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArray;
use Symfony\Component\Console\Output\OutputInterface;

class SiteRemoveCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('site:remove')
            ->setDescription('remove nginx site in sites-available directory')
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
            $text = 'Hello '.$name;
        } else {
            $text = 'Hello';
        }

        $output->writeln($text);
    }
}