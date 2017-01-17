<?php

namespace EVEAuth\Tasks;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class DeleteUser extends Command {
    protected function configure() {
        $this
            ->setName("DeleteUser")
            ->setDescription("Deletes a single user from the system.");
    }

    protected function execute(InputInterface $input, OutputInterface $output) {

    }
}