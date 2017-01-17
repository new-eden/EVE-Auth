<?php

namespace EVEAuth\Tasks;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class ListGroups extends Command {
    protected function configure() {
        $this
            ->setName("ListGroups")
            ->setDescription("Lists all groups registered in the system.");
    }

    protected function execute(InputInterface $input, OutputInterface $output) {

    }
}