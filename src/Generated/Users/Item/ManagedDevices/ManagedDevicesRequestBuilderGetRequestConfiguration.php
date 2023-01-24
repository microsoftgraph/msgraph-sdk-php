<?php

namespace Microsoft\Graph\Generated\Users\Item\ManagedDevices;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ManagedDevicesRequestBuilderGetRequestConfiguration 
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
     * @var ManagedDevicesRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ManagedDevicesRequestBuilderGetQueryParameters $queryParameters = null;
    
}
