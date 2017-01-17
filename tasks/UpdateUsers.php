<?php

namespace EVEAuth\Tasks;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class UpdateUsers extends Command {
    protected function configure() {
        $this
            ->setName("UpdateUsers")
            ->setDescription("Updates all the users in the system, to make sure they're allowed access.");
    }

    protected function execute(InputInterface $input, OutputInterface $output) {

    }
}