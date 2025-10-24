<?php

namespace Microsoft\\Graph\\Generated\Security\AttackSimulation\Simulations\Item\LandingPage;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class LandingPageRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var LandingPageRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?LandingPageRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new LandingPageRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param LandingPageRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?LandingPageRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new LandingPageRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return LandingPageRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): LandingPageRequestBuilderGetQueryParameters {
        return new LandingPageRequestBuilderGetQueryParameters($expand, $select);
    }

}
