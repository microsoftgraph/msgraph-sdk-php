<?php

namespace Microsoft\Graph\Generated\Identity\RiskPrevention\WebApplicationFirewallProviders\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: WebApplicationFirewallProviderItemRequestBuilderGetRequestConfiguration
*/
class WebApplicationFirewallProviderItemRequestBuilderGetRequ_2960549c extends BaseRequestConfiguration 
{
    /**
     * @var WebApplicationFirewallProviderItemRequestBuilderGetQuer_95c600ce|null $queryParameters Request query parameters
    */
    public ?WebApplicationFirewallProviderItemRequestBuilderGetQuer_95c600ce $queryParameters = null;
    
    /**
     * Instantiates a new WebApplicationFirewallProviderItemRequestBuilderGetRequ_2960549c and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param WebApplicationFirewallProviderItemRequestBuilderGetQuer_95c600ce|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?WebApplicationFirewallProviderItemRequestBuilderGetQuer_95c600ce $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new WebApplicationFirewallProviderItemRequestBuilderGetQuer_95c600ce.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return WebApplicationFirewallProviderItemRequestBuilderGetQuer_95c600ce
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): WebApplicationFirewallProviderItemRequestBuilderGetQuer_95c600ce {
        return new WebApplicationFirewallProviderItemRequestBuilderGetQuer_95c600ce($expand, $select);
    }

}
