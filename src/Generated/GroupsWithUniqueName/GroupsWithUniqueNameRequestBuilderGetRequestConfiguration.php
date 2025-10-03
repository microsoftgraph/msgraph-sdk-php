<?php

namespace Microsoft\\Graph\\Generated\GroupsWithUniqueName;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class GroupsWithUniqueNameRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var GroupsWithUniqueNameRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?GroupsWithUniqueNameRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new GroupsWithUniqueNameRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param GroupsWithUniqueNameRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?GroupsWithUniqueNameRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new GroupsWithUniqueNameRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return GroupsWithUniqueNameRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): GroupsWithUniqueNameRequestBuilderGetQueryParameters {
        return new GroupsWithUniqueNameRequestBuilderGetQueryParameters($expand, $select);
    }

}
