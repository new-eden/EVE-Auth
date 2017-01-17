<?php

namespace EVEAuth\Tasks;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class Resque extends Command {
    protected function configure() {
        $this
            ->setName("Resque")
            ->setDescription("Runs the Resque task");
    }

    protected function execute(InputInterface $input, OutputInterface $output) {

    }
}