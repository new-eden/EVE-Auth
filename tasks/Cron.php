<?php

namespace EVEAuth\Tasks;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class Cron extends Command {
    protected function configure() {
        $this
            ->setName("Cron")
            ->setDescription("Runs the cron task");
    }

    protected function execute(InputInterface $input, OutputInterface $output) {

    }
}