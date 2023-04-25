<?php

namespace Microsoft\Graph\Generated\Connections\Item\Items\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ExternalItemItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var ExternalItemItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ExternalItemItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ExternalItemItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ExternalItemItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ExternalItemItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ExternalItemItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ExternalItemItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ExternalItemItemRequestBuilderGetQueryParameters {
        return new ExternalItemItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
