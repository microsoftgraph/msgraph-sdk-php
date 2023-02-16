<?php

namespace Microsoft\Graph\Generated\Domains\Item\FederationConfiguration\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class InternalDomainFederationItemRequestBuilderGetRequestConfiguration 
{
    /**
     * @var array<string, array<string>|string>|null $headers Request headers
    */
    public ?array $headers = null;
    
    /**
     * @var array<string, RequestOption>|null $options Request options
    */
    public ?array $options = null;
    
    /**
     * @var InternalDomainFederationItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?InternalDomainFederationItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new InternalDomainFederationItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return InternalDomainFederationItemRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): InternalDomainFederationItemRequestBuilderGetQueryParameters {
        return new InternalDomainFederationItemRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new InternalDomainFederationItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param InternalDomainFederationItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?InternalDomainFederationItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
