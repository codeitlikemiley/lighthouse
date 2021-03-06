<?php

namespace Nuwave\Lighthouse\Support\Traits;

use Nuwave\Lighthouse\Execution\ErrorBuffer;

trait HasErrorBuffer
{
    /**
     * @var ErrorBuffer
     */
    protected $errorBuffer;

    /**
     * Get the ErrorBuffer instance.
     *
     * @return ErrorBuffer
     */
    public function errorBuffer(): ErrorBuffer
    {
        return $this->errorBuffer;
    }

    /**
     * Set the ErrorBuffer instance.
     *
     * @param ErrorBuffer $errorBuffer
     *
     * @return static
     */
    public function setErrorBuffer(ErrorBuffer $errorBuffer)
    {
        $this->errorBuffer = $errorBuffer;

        return $this;
    }
}
