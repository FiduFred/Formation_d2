<?php
    namespace AppBundle\Command;

    use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
    use Symfony\Component\Console\Input\InputArgument;
    use Symfony\Component\Console\Input\InputInterface;
    use Symfony\Component\Console\Input\InputOption;
    use Symfony\Component\Console\Output\OutputInterface;

    class DisableComputerCommand extends ContainerAwareCommand
    {
        protected function configure()
        {
            $this->setName('park:computer:toggle')->setDescription('Switch on/off the computers')->addArgument(
                'id',
                InputArgument::REQUIRED,
                'Do you want to switch on/off the computer?'
                )->addOption('disable',null,InputOption::VALUE_NONE,'If set, the task will switch on/off the computers');
        }

        protected function execute(InputInterface $input, OutputInterface $output)
        {
            $id = $input->getArgument('id');
            $em = $this->getContainer()->get("doctrine")->getManager();
            $entity = $em->getRepository("AppBundle:Computer")->find($id);
            if (!$entity) {
                $output->writeln("Computer ".$id." not found");

            } else {
                if ($entity->getEnabled() == true) {
                    $entity->setEnabled(false);
                    $output->writeln("Computer ".$id." switch off");
                } else {
                    $entity->setEnabled(true);
                    $output->writeln("Computer ".$id." switch on");
                }
                $em->flush();

            }
        }
    }