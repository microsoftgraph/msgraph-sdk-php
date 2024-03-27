<?php

namespace Microsoft\Graph\Generated\Admin\Microsoft365Apps;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class Microsoft365AppsRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var Microsoft365AppsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?Microsoft365AppsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new Microsoft365AppsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param Microsoft365AppsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?Microsoft365AppsRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new Microsoft365AppsRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return Microsoft365AppsRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): Microsoft365AppsRequestBuilderGetQueryParameters {
        return new Microsoft365AppsRequestBuilderGetQueryParameters($expand, $select);
    }

}
