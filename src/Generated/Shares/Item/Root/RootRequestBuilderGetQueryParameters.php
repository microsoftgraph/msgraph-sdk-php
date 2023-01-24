<?php

namespace Microsoft\Graph\Generated\Shares\Item\Root;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Used to access the underlying driveItem. Deprecated -- use driveItem instead.
*/
class RootRequestBuilderGetQueryParameters 
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
