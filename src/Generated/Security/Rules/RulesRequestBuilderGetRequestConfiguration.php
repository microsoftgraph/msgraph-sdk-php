<?php

namespace Microsoft\Graph\Generated\Security\Rules;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class RulesRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var RulesRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?RulesRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new RulesRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param RulesRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?RulesRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new RulesRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return RulesRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): RulesRequestBuilderGetQueryParameters {
        return new RulesRequestBuilderGetQueryParameters($expand, $select);
    }

}
