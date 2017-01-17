<?php

namespace EVEAuth\Tasks;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class TestSystems extends Command {
    protected function configure() {
        $this
            ->setName("test:systems")
            ->setDescription("Tests the various integrations in the auth system.");
    }

    protected function execute(InputInterface $input, OutputInterface $output) {

    }

}