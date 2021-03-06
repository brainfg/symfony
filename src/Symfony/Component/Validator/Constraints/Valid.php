<?php

namespace Symfony\Component\Validator\Constraints;

/*
 * This file is part of the Symfony framework.
 *
 * (c) Fabien Potencier <fabien.potencier@symfony-project.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

class Valid extends \Symfony\Component\Validator\Constraint
{
    public $message = 'This value should be instance of class {{ class }}';
    public $class;
}