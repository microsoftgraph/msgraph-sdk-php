<?php

namespace Microsoft\Graph\Generated\ApplicationsWithUniqueName;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ApplicationsWithUniqueNameRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var ApplicationsWithUniqueNameRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ApplicationsWithUniqueNameRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ApplicationsWithUniqueNameRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ApplicationsWithUniqueNameRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ApplicationsWithUniqueNameRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ApplicationsWithUniqueNameRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ApplicationsWithUniqueNameRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ApplicationsWithUniqueNameRequestBuilderGetQueryParameters {
        return new ApplicationsWithUniqueNameRequestBuilderGetQueryParameters($expand, $select);
    }

}
