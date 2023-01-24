<?php

namespace Microsoft\Graph\Generated\InformationProtection\Bitlocker;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class BitlockerRequestBuilderGetRequestConfiguration 
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
     * @var BitlockerRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?BitlockerRequestBuilderGetQueryParameters $queryParameters = null;
    
}
