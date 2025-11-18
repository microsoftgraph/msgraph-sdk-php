<?php

namespace Microsoft\\Graph\\Generated\DeviceManagement\DeviceCompliancePolicies\Item\UserStatusOverview;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class UserStatusOverviewRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var UserStatusOverviewRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?UserStatusOverviewRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new UserStatusOverviewRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param UserStatusOverviewRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?UserStatusOverviewRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new UserStatusOverviewRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return UserStatusOverviewRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): UserStatusOverviewRequestBuilderGetQueryParameters {
        return new UserStatusOverviewRequestBuilderGetQueryParameters($expand, $select);
    }

}
