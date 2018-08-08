<?php

namespace SidSpears;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Output\OutputInterface;
use SidSpears\Sum;

class SumCommand extends Command
{
	public function configure()
	{
		$this->setName("sum")
		     ->setDescription("This command sums two numbers")
                     ->addArgument('a', InputArgument::REQUIRED, 'First')
		     ->addArgument('b', InputArgument::REQUIRED, 'Second');
	}

	protected function execute (InputInterface $input, OutputInterface $output)
	{
		$a = $input->getArgument('a');
		$b = $input->getArgument('b');

		$sum = new Sum();
		$res = $sum->sum($a, $b);

		$output->writeln("$res");
	}
}
