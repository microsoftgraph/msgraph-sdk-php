<?php

namespace Microsoft\Graph\Generated\Users\Item\OwnedObjects;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class OwnedObjectsRequestBuilderGetRequestConfiguration 
{
    /**
     * @var array<string, array<string>|string>|null $headers Request headers
    */
    public ?array $headers = null;
    
    /**
     * @var array<string, RequestOption>|null $options Request options
    */
    public ?array $options = null;
    
    /**
     * @var OwnedObjectsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?OwnedObjectsRequestBuilderGetQueryParameters $queryParameters = null;
    
}
