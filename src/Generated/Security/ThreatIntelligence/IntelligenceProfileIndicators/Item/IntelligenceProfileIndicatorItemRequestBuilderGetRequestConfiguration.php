<?php

namespace Microsoft\Graph\Generated\Security\ThreatIntelligence\IntelligenceProfileIndicators\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class IntelligenceProfileIndicatorItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var IntelligenceProfileIndicatorItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?IntelligenceProfileIndicatorItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new IntelligenceProfileIndicatorItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param IntelligenceProfileIndicatorItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?IntelligenceProfileIndicatorItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new IntelligenceProfileIndicatorItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return IntelligenceProfileIndicatorItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): IntelligenceProfileIndicatorItemRequestBuilderGetQueryParameters {
        return new IntelligenceProfileIndicatorItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
