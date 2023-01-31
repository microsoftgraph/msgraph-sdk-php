<?php

namespace Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Operations;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The status of workbook operations. Getting an operation collection is not supported, but you can get the status of a long-running operation if the Location header is returned in the response. Read-only.
*/
class OperationsRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("%24expand")
     * @var array<string>|null $expand Expand related entities
    */
    public ?array $expand = null;
    
    /**
     * @QueryParameter("%24orderby")
     * @var array<string>|null $orderby Order items by property values
    */
    public ?array $orderby = null;
    
    /**
     * @QueryParameter("%24search")
     * @var string|null $search Search items by search phrases
    */
    public ?string $search = null;
    
    /**
     * @QueryParameter("%24select")
     * @var array<string>|null $select Select properties to be returned
    */
    public ?array $select = null;
    
}
