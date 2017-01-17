<?php

namespace EVEAuth\Tasks;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class DeleteGroup extends Command {
    protected function configure() {
        $this
            ->setName("DeleteGroup")
            ->setDescription("Deletes a single group from the system.");
    }

    protected function execute(InputInterface $input, OutputInterface $output) {

    }
}