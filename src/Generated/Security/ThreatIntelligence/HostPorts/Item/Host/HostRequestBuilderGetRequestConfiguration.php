<?php

namespace Microsoft\Graph\Generated\Security\ThreatIntelligence\HostPorts\Item\Host;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class HostRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var HostRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?HostRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new HostRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param HostRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?HostRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new HostRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return HostRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): HostRequestBuilderGetQueryParameters {
        return new HostRequestBuilderGetQueryParameters($expand, $select);
    }

}
