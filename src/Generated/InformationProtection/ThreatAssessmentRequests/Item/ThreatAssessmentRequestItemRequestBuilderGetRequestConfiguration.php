<?php

namespace Microsoft\Graph\Generated\InformationProtection\ThreatAssessmentRequests\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ThreatAssessmentRequestItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var ThreatAssessmentRequestItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ThreatAssessmentRequestItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ThreatAssessmentRequestItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ThreatAssessmentRequestItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ThreatAssessmentRequestItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ThreatAssessmentRequestItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ThreatAssessmentRequestItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ThreatAssessmentRequestItemRequestBuilderGetQueryParameters {
        return new ThreatAssessmentRequestItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
