<?php
/**
 * Created by PhpStorm.
 * User: musilane
 * Date: 8/19/15
 * Time: 8:39 AM
 */

namespace Cvut\Fit\BiWT1\Blog\BaseBundle\Exception;


use Exception;

class ItemAlreadyExistsException extends \Exception
{
    public function __construct($message = "Item already exists.", $code = 0, Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}