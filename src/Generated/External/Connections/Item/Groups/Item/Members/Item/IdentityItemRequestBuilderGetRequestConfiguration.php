<?php

namespace Microsoft\Graph\Generated\External\Connections\Item\Groups\Item\Members\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class IdentityItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var IdentityItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?IdentityItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new IdentityItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param IdentityItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?IdentityItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new IdentityItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return IdentityItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): IdentityItemRequestBuilderGetQueryParameters {
        return new IdentityItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
