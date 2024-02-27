<?php

namespace Microsoft\Graph\Generated\Drives\Item\EscapedList;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ListRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var ListRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ListRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ListRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ListRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ListRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ListRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ListRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ListRequestBuilderGetQueryParameters {
        return new ListRequestBuilderGetQueryParameters($expand, $select);
    }

}
