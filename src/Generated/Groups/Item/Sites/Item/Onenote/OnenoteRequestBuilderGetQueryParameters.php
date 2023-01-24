<?php

namespace Microsoft\Graph\Generated\Groups\Item\Sites\Item\Onenote;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Calls the OneNote service for notebook related operations.
*/
class OnenoteRequestBuilderGetQueryParameters 
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
