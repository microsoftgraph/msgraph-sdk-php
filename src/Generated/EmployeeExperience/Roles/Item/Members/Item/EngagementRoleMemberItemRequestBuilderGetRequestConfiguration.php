<?php

namespace Microsoft\Graph\Generated\EmployeeExperience\Roles\Item\Members\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class EngagementRoleMemberItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var EngagementRoleMemberItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?EngagementRoleMemberItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new EngagementRoleMemberItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param EngagementRoleMemberItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?EngagementRoleMemberItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new EngagementRoleMemberItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return EngagementRoleMemberItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): EngagementRoleMemberItemRequestBuilderGetQueryParameters {
        return new EngagementRoleMemberItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
