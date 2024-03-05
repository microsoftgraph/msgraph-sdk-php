<?php

namespace Microsoft\Graph\Generated\Security\ThreatIntelligence\HostPairs\Item\ChildHost;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ChildHostRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var ChildHostRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ChildHostRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ChildHostRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ChildHostRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ChildHostRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ChildHostRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ChildHostRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ChildHostRequestBuilderGetQueryParameters {
        return new ChildHostRequestBuilderGetQueryParameters($expand, $select);
    }

}
