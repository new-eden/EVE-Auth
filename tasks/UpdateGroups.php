<?php

namespace EVEAuth\Tasks;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class UpdateGroups extends Command {
    protected function configure() {
        $this
            ->setName("UpdateGroups")
            ->setDescription("Updates every character in a group, but only if it's an automatically managed group.");
    }

    protected function execute(InputInterface $input, OutputInterface $output) {

    }
}