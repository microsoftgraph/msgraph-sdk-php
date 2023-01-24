<?php

namespace Microsoft\Graph\Generated\Users\Item\Drives;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class DrivesRequestBuilderGetRequestConfiguration 
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
     * @var DrivesRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?DrivesRequestBuilderGetQueryParameters $queryParameters = null;
    
}
