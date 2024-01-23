<?php

namespace Microsoft\Graph\Generated\Sites\Item\GetByPathWithPath\GetByPathWithPath1\Onenote;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class OnenoteRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var OnenoteRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?OnenoteRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new onenoteRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param OnenoteRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?OnenoteRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new onenoteRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return OnenoteRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): OnenoteRequestBuilderGetQueryParameters {
        return new OnenoteRequestBuilderGetQueryParameters($expand, $select);
    }

}
