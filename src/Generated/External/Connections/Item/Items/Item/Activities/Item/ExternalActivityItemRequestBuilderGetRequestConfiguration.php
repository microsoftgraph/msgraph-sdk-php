<?php

namespace Microsoft\Graph\Generated\External\Connections\Item\Items\Item\Activities\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ExternalActivityItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var ExternalActivityItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ExternalActivityItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ExternalActivityItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ExternalActivityItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ExternalActivityItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ExternalActivityItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ExternalActivityItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ExternalActivityItemRequestBuilderGetQueryParameters {
        return new ExternalActivityItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
