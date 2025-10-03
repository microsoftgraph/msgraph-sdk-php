<?php

namespace Microsoft\\Graph\\Generated\InformationProtection\ThreatAssessmentRequests\Item\Results\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ThreatAssessmentResultItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var ThreatAssessmentResultItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ThreatAssessmentResultItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ThreatAssessmentResultItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ThreatAssessmentResultItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ThreatAssessmentResultItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ThreatAssessmentResultItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ThreatAssessmentResultItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ThreatAssessmentResultItemRequestBuilderGetQueryParameters {
        return new ThreatAssessmentResultItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
