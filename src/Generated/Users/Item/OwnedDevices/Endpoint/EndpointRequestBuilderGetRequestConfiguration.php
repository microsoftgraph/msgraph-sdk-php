<?php

namespace Microsoft\Graph\Generated\Users\Item\OwnedDevices\Endpoint;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class EndpointRequestBuilderGetRequestConfiguration 
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
     * @var EndpointRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?EndpointRequestBuilderGetQueryParameters $queryParameters = null;
    
}
