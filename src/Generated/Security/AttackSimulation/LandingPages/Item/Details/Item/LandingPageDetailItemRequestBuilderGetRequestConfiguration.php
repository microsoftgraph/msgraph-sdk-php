<?php

namespace Microsoft\Graph\Generated\Security\AttackSimulation\LandingPages\Item\Details\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class LandingPageDetailItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var LandingPageDetailItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?LandingPageDetailItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new LandingPageDetailItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param LandingPageDetailItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?LandingPageDetailItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new LandingPageDetailItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return LandingPageDetailItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): LandingPageDetailItemRequestBuilderGetQueryParameters {
        return new LandingPageDetailItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
