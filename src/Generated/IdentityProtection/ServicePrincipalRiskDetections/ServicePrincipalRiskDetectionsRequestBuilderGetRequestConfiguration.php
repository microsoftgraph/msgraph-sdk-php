<?php

namespace Microsoft\Graph\Generated\IdentityProtection\ServicePrincipalRiskDetections;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ServicePrincipalRiskDetectionsRequestBuilderGetRequestConfiguration 
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
     * @var ServicePrincipalRiskDetectionsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ServicePrincipalRiskDetectionsRequestBuilderGetQueryParameters $queryParameters = null;
    
}
