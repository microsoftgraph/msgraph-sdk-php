<?php

namespace Microsoft\Graph\Generated\Me\Onenote\Pages\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class OnenotePageItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var OnenotePageItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?OnenotePageItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new OnenotePageItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param OnenotePageItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?OnenotePageItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new OnenotePageItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return OnenotePageItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): OnenotePageItemRequestBuilderGetQueryParameters {
        return new OnenotePageItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
