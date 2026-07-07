<?php

namespace Microsoft\Graph\Generated\DeviceManagement\UserExperienceAnalyticsDeviceStartupHistory\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: UserExperienceAnalyticsDeviceStartupHistoryItemRequestBuilderGetRequestConfiguration
*/
class UserExperienceAnalyticsDeviceStartupHistoryItemRequestB_f59d905d extends BaseRequestConfiguration 
{
    /**
     * @var UserExperienceAnalyticsDeviceStartupHistoryItemRequestB_4f18b8d3|null $queryParameters Request query parameters
    */
    public ?UserExperienceAnalyticsDeviceStartupHistoryItemRequestB_4f18b8d3 $queryParameters = null;
    
    /**
     * Instantiates a new UserExperienceAnalyticsDeviceStartupHistoryItemRequestB_f59d905d and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param UserExperienceAnalyticsDeviceStartupHistoryItemRequestB_4f18b8d3|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?UserExperienceAnalyticsDeviceStartupHistoryItemRequestB_4f18b8d3 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new UserExperienceAnalyticsDeviceStartupHistoryItemRequestB_4f18b8d3.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return UserExperienceAnalyticsDeviceStartupHistoryItemRequestB_4f18b8d3
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): UserExperienceAnalyticsDeviceStartupHistoryItemRequestB_4f18b8d3 {
        return new UserExperienceAnalyticsDeviceStartupHistoryItemRequestB_4f18b8d3($expand, $select);
    }

}
