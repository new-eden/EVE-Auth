<?php

namespace EVEAuth\Tasks;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class ListUsers extends Command {
    protected function configure() {
        $this
            ->setName("ListUsers")
            ->setDescription("List all users registered in the system.");
    }

    protected function execute(InputInterface $input, OutputInterface $output) {

    }
}