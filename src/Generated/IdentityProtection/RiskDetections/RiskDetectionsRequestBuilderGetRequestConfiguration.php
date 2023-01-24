<?php

namespace Microsoft\Graph\Generated\IdentityProtection\RiskDetections;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class RiskDetectionsRequestBuilderGetRequestConfiguration 
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
     * @var RiskDetectionsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?RiskDetectionsRequestBuilderGetQueryParameters $queryParameters = null;
    
}
