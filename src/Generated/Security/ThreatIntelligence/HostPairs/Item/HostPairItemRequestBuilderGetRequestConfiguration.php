<?php

namespace Microsoft\Graph\Generated\Security\ThreatIntelligence\HostPairs\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class HostPairItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var HostPairItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?HostPairItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new HostPairItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param HostPairItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?HostPairItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new HostPairItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return HostPairItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): HostPairItemRequestBuilderGetQueryParameters {
        return new HostPairItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
