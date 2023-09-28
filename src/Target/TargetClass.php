<?php

namespace Etshy\Rector8237\Target;

use OpenApi\Annotations as OA;

class TargetClass
{
    /**
     * @OA\QueryParameter(name="orderBy", @OA\Schema(type="string"), required=false, description="List of value:
     *  - <b>TRY</b>: To try
     *  - <b>TEST</b>: to test (Default if no parameters given)")
     */
    public function test()
    {}
}