<?php

namespace lesstif\NginxSite;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArray;
use Symfony\Component\Console\Output\OutputInterface;

class SiteCreateCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('site:create')
            ->setDescription('Create new nginx site in sites-available directory')
            ->addOption(
                'name',
                null,
                InputOption::VALUE_REQUIRED,
                'create site name'
            )
            ->addOption(
               'alias',
               null,
                InputOption::VALUE_REQUIRED|InputOption::VALUE_IS_ARRAY,
               'If set, the task will print verbose messages',
               ['php', 'ruby', 'python', 'html']
            )
             ->addOption(
               'app',
               null,
               InputOption::VALUE_REQUIRED ,
               ' What do you want to creating site([PHP, Ruby, ])?'
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

        $alias = $input->getOption('alias');
        if (!$alias) {
            $text = $alias;
        }

        $app = $input->getOption('app');
        if (!$app) {
            $text = $app;
        }

        $output->writeln($text);
    }
}