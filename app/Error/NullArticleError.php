<?php

declare(strict_types=1);

namespace Modules\Blog\Error;

<<<<<<< HEAD
use DomainException;

class NullArticleError extends DomainException
=======
<<<<<<< HEAD
use DomainException;

class NullArticleError extends DomainException
=======
class NullArticleError extends \DomainException
>>>>>>> origin/develop
>>>>>>> 336b9b7 (.)
{
    public function __construct(string $articleId)
    {
        parent::__construct("The article <fg=yellow>{$articleId}</> is null");
    }
}
