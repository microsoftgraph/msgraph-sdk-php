<?php

namespace Microsoft\\Graph\\Generated\Security\ThreatIntelligence\Hosts\Item\Subdomains\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class SubdomainItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var SubdomainItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?SubdomainItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new SubdomainItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param SubdomainItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?SubdomainItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new SubdomainItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return SubdomainItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): SubdomainItemRequestBuilderGetQueryParameters {
        return new SubdomainItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
