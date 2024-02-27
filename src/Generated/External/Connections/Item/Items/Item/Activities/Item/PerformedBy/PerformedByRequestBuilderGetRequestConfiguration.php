<?php

namespace Microsoft\Graph\Generated\External\Connections\Item\Items\Item\Activities\Item\PerformedBy;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class PerformedByRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var PerformedByRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?PerformedByRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new PerformedByRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param PerformedByRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?PerformedByRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new PerformedByRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return PerformedByRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): PerformedByRequestBuilderGetQueryParameters {
        return new PerformedByRequestBuilderGetQueryParameters($expand, $select);
    }

}
