<?php

namespace Microsoft\Graph\Generated\DeviceManagement\ResourceOperations;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ResourceOperationsRequestBuilderGetRequestConfiguration 
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
     * @var ResourceOperationsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ResourceOperationsRequestBuilderGetQueryParameters $queryParameters = null;
    
}
