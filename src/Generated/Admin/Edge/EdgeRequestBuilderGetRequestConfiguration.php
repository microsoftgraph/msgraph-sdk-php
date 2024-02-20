<?php

namespace Microsoft\Graph\Generated\Admin\Edge;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class EdgeRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var EdgeRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?EdgeRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new EdgeRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param EdgeRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?EdgeRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new EdgeRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return EdgeRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): EdgeRequestBuilderGetQueryParameters {
        return new EdgeRequestBuilderGetQueryParameters($expand, $select);
    }

}
