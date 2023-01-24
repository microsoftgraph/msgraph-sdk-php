<?php

namespace Microsoft\Graph\Generated\IdentityProtection\ServicePrincipalRiskDetections\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ServicePrincipalRiskDetectionItemRequestBuilderGetRequestConfiguration 
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
     * @var ServicePrincipalRiskDetectionItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ServicePrincipalRiskDetectionItemRequestBuilderGetQueryParameters $queryParameters = null;
    
}
