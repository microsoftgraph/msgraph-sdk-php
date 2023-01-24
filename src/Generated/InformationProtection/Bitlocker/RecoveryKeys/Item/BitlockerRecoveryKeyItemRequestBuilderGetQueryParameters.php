<?php

namespace Microsoft\Graph\Generated\InformationProtection\Bitlocker\RecoveryKeys\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The recovery keys associated with the bitlocker entity.
*/
class BitlockerRecoveryKeyItemRequestBuilderGetQueryParameters 
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
