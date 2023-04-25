<?php

namespace Microsoft\Graph\Generated\Users\Item\Planner\Plans\Item\Details;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class DetailsRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var DetailsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?DetailsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new detailsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param DetailsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DetailsRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new detailsRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return DetailsRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): DetailsRequestBuilderGetQueryParameters {
        return new DetailsRequestBuilderGetQueryParameters($expand, $select);
    }

}
