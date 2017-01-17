<?php

namespace EVEAuth\Tasks;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class AddUser extends Command {
    protected function configure() {
        $this
            ->setName("AddUser")
            ->setDescription("Adds a user to the system.");
    }

    protected function execute(InputInterface $input, OutputInterface $output) {

    }
}