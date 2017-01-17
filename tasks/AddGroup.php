<?php

namespace EVEAuth\Tasks;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class AddGroup extends Command {
    protected function configure() {
        $this
            ->setName("AddGroup")
            ->setDescription("Adds a group to the system.");
    }

    protected function execute(InputInterface $input, OutputInterface $output) {

    }
}