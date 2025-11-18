<?php

namespace Microsoft\\Graph\\Generated\Identity\RiskPrevention\WebApplicationFirewallVerifications\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class WebApplicationFirewallVerificationModelItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var WebApplicationFirewallVerificationModelItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?WebApplicationFirewallVerificationModelItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new WebApplicationFirewallVerificationModelItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param WebApplicationFirewallVerificationModelItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?WebApplicationFirewallVerificationModelItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new WebApplicationFirewallVerificationModelItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return WebApplicationFirewallVerificationModelItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): WebApplicationFirewallVerificationModelItemRequestBuilderGetQueryParameters {
        return new WebApplicationFirewallVerificationModelItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
