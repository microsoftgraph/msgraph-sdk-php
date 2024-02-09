<?php

namespace Microsoft\Graph\Generated\Devices\Item\TransitiveMemberOf\Item\GraphGroup;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class GraphGroupRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var GraphGroupRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?GraphGroupRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new GraphGroupRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param GraphGroupRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?GraphGroupRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new GraphGroupRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return GraphGroupRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): GraphGroupRequestBuilderGetQueryParameters {
        return new GraphGroupRequestBuilderGetQueryParameters($expand, $select);
    }

}
