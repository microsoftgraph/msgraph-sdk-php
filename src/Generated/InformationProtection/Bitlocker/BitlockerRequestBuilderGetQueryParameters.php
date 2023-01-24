<?php

namespace Microsoft\Graph\Generated\InformationProtection\Bitlocker;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Get bitlocker from informationProtection
*/
class BitlockerRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("%24expand")
     * @var array<string>|null $expand Expand related entities
    */
    public ?array $expand = null;
    
    /**
     * @QueryParameter("%24select")
     * @var array<string>|null $select Select properties to be returned
    */
    public ?array $select = null;
    
}
