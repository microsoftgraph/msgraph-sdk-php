<?php

namespace Microsoft\\Graph\\Generated\Groups\Item\Sites\Item\CreatedByUser;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class CreatedByUserRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var CreatedByUserRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?CreatedByUserRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new CreatedByUserRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param CreatedByUserRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?CreatedByUserRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new CreatedByUserRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return CreatedByUserRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): CreatedByUserRequestBuilderGetQueryParameters {
        return new CreatedByUserRequestBuilderGetQueryParameters($expand, $select);
    }

}
