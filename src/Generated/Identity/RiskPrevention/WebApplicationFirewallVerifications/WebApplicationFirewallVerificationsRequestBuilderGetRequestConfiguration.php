<?php

namespace Microsoft\Graph\Generated\Identity\RiskPrevention\WebApplicationFirewallVerifications;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class WebApplicationFirewallVerificationsRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var WebApplicationFirewallVerificationsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?WebApplicationFirewallVerificationsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new WebApplicationFirewallVerificationsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param WebApplicationFirewallVerificationsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?WebApplicationFirewallVerificationsRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new WebApplicationFirewallVerificationsRequestBuilderGetQueryParameters.
     * @param bool|null $count Include count of items
     * @param array<string>|null $expand Expand related entities
     * @param string|null $filter Filter items by property values
     * @param array<string>|null $orderby Order items by property values
     * @param string|null $search Search items by search phrases
     * @param array<string>|null $select Select properties to be returned
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return WebApplicationFirewallVerificationsRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?bool $count = null, ?array $expand = null, ?string $filter = null, ?array $orderby = null, ?string $search = null, ?array $select = null, ?int $skip = null, ?int $top = null): WebApplicationFirewallVerificationsRequestBuilderGetQueryParameters {
        return new WebApplicationFirewallVerificationsRequestBuilderGetQueryParameters($count, $expand, $filter, $orderby, $search, $select, $skip, $top);
    }

}
