<?php

namespace Microsoft\Graph\Generated\Teamwork\WorkforceIntegrations\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class WorkforceIntegrationItemRequestBuilderGetRequestConfiguration 
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
     * @var WorkforceIntegrationItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?WorkforceIntegrationItemRequestBuilderGetQueryParameters $queryParameters = null;
    
}
