<?php
/**
 * Created by PhpStorm.
 * User: formation.invite
 * Date: 02/11/2015
 * Time: 16:03
 */

namespace AppBundle\Services;

use Doctrine\ORM\Event\LifecycleEventArgs;
use Symfony\Component\Security\Core\Encoder\EncoderFactoryInterface;
use Symfony\Component\Security\Core\User\UserInterface;
//use AppBundle\Entity\User;




class UserSecurity
{
    private $salt;
    protected $encoderFactory;

    public function __construct(EncoderFactoryInterface $encoderFactory, $salt='test_salt')
    {
        $this->encoderFactory = $encoderFactory;
        $this->salt = $salt;
    }



    public function prePersist(LifecycleEventArgs $args)
    {
        $object = $args->getObject();

        if ($object instanceof UserInterface) {
            $this->updatePassword($object);
        }
    }

    private function updatePassword($user)
    {
        $encoder = $this->encoderFactory->getEncoder($user);
        $user->setPassword($encoder->encodePassword($user->getPlainPassword(),$this->salt));
        $user->setSalt($this->salt);
        $user->eraseCredentials();
    }


}