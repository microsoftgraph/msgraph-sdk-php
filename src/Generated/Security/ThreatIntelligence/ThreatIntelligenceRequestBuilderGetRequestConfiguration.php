<?php

namespace Microsoft\Graph\Generated\Security\ThreatIntelligence;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ThreatIntelligenceRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var ThreatIntelligenceRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ThreatIntelligenceRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ThreatIntelligenceRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ThreatIntelligenceRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ThreatIntelligenceRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ThreatIntelligenceRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ThreatIntelligenceRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ThreatIntelligenceRequestBuilderGetQueryParameters {
        return new ThreatIntelligenceRequestBuilderGetQueryParameters($expand, $select);
    }

}
