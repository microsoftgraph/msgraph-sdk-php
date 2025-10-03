<?php

namespace Microsoft\\Graph\\Generated\Security\ThreatIntelligence\Hosts\Item\Cookies\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class HostCookieItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var HostCookieItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?HostCookieItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new HostCookieItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param HostCookieItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?HostCookieItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new HostCookieItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return HostCookieItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): HostCookieItemRequestBuilderGetQueryParameters {
        return new HostCookieItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
