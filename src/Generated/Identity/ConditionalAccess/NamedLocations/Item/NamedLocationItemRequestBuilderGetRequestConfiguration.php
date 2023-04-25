<?php

namespace Microsoft\Graph\Generated\Identity\ConditionalAccess\NamedLocations\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class NamedLocationItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var NamedLocationItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?NamedLocationItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new NamedLocationItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param NamedLocationItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?NamedLocationItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new NamedLocationItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return NamedLocationItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): NamedLocationItemRequestBuilderGetQueryParameters {
        return new NamedLocationItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
