<?php

namespace Microsoft\Graph\Generated\InformationProtection\ThreatAssessmentRequests\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ThreatAssessmentRequestItemRequestBuilderGetRequestConfiguration 
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
     * @var ThreatAssessmentRequestItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ThreatAssessmentRequestItemRequestBuilderGetQueryParameters $queryParameters = null;
    
}
