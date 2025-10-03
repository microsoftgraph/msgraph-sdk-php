<?php

namespace Microsoft\\Graph\\Generated\Admin;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class AdminRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var AdminRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?AdminRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new AdminRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param AdminRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?AdminRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new AdminRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return AdminRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): AdminRequestBuilderGetQueryParameters {
        return new AdminRequestBuilderGetQueryParameters($expand, $select);
    }

}
