<?php
/**
 * Created by PhpStorm.
 * User: musilane
 * Date: 03.03.16
 * Time: 10:16
 */

namespace Cvut\Fit\BiWT1\Blog\BaseBundle\Security\Voter;

use Cvut\Fit\BiWT1\Blog\BaseBundle\Entity\Post;
use Cvut\Fit\BiWT1\Blog\BaseBundle\Entity\User;
use Symfony\Component\Security\Core\Authorization\Voter\AbstractVoter;
use Symfony\Component\Security\Core\User\UserInterface;

class PostVoter extends AbstractVoter
{
    const POST_VIEW = 'view';
    const POST_EDIT = 'edit';

    protected function getSupportedClasses()
    {
        return array('Cvut\Fit\BiWT1\Blog\BaseBundle\Entity\Post');
    }

    /**
     * @param string $attribute
     * @param Post $post
     * @param null $user
     * @return bool
     */
    protected function isGranted($attribute, $post, $user = null)
    {
        // make sure there is a user object (i.e. that the user is logged in)
        if (!$user instanceof UserInterface) {
            return false;
        }
        // double-check that the User object is the expected entity (this
        // only happens when you did not configure the security system properly)
        if (!($user instanceof User or $user instanceof \Symfony\Component\Security\Core\User\User)){
            throw new \LogicException('The user is somehow not our User class!');
        }

        if (in_array('ROLE_ADMIN', $user->getRoles())) {
            return true;
        }

        switch ($attribute) {
            case self::POST_VIEW:
                // the data object could have for example a method isPrivate()
                // which checks the Boolean attribute $private
                if (!$post->isPrivate()) {
                    return true;
                }
                else {
                    if ($post->getAuthor()==$user) {
                        return true;
                    }
                }

                break;
            case self::POST_EDIT:
                // this assumes that the data object has a getOwner() method
                // to get the entity of the user who owns this data object
                if ($user === $post->getAuthor()) {
                    return true;
                }

                break;
        }

        return false;
    }

    /**
     * Return an array of supported attributes. This will be called by supportsAttribute.
     *
     * @return array an array of supported attributes, i.e. array('CREATE', 'READ')
     */
    protected function getSupportedAttributes()
    {
        return array(self::POST_VIEW, self::POST_EDIT);
    }
}