<?php

namespace Microsoft\Graph\Generated\DeviceManagement\UserExperienceAnalyticsDeviceStartupProcesses\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: UserExperienceAnalyticsDeviceStartupProcessItemRequestBuilderGetRequestConfiguration
*/
class UserExperienceAnalyticsDeviceStartupProcessItemRequestB_822b2130 extends BaseRequestConfiguration 
{
    /**
     * @var UserExperienceAnalyticsDeviceStartupProcessItemRequestB_72cdcd7a|null $queryParameters Request query parameters
    */
    public ?UserExperienceAnalyticsDeviceStartupProcessItemRequestB_72cdcd7a $queryParameters = null;
    
    /**
     * Instantiates a new UserExperienceAnalyticsDeviceStartupProcessItemRequestB_822b2130 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param UserExperienceAnalyticsDeviceStartupProcessItemRequestB_72cdcd7a|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?UserExperienceAnalyticsDeviceStartupProcessItemRequestB_72cdcd7a $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new UserExperienceAnalyticsDeviceStartupProcessItemRequestB_72cdcd7a.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return UserExperienceAnalyticsDeviceStartupProcessItemRequestB_72cdcd7a
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): UserExperienceAnalyticsDeviceStartupProcessItemRequestB_72cdcd7a {
        return new UserExperienceAnalyticsDeviceStartupProcessItemRequestB_72cdcd7a($expand, $select);
    }

}
