<?php

namespace Microsoft\Graph\Generated\Security\ThreatIntelligence\Hosts\Item\Whois;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class WhoisRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var WhoisRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?WhoisRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new WhoisRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param WhoisRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?WhoisRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new WhoisRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return WhoisRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): WhoisRequestBuilderGetQueryParameters {
        return new WhoisRequestBuilderGetQueryParameters($expand, $select);
    }

}
