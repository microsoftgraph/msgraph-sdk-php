<?php

namespace Microsoft\Graph\Generated\DeviceManagement\UserExperienceAnalyticsWorkFromAnywhereMetrics\Item\MetricDevices\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: UserExperienceAnalyticsWorkFromAnywhereDeviceItemRequestBuilderGetRequestConfiguration
*/
class UserExperienceAnalyticsWorkFromAnywhereDeviceItemReques_76b6570c extends BaseRequestConfiguration 
{
    /**
     * @var UserExperienceAnalyticsWorkFromAnywhereDeviceItemReques_11f691ae|null $queryParameters Request query parameters
    */
    public ?UserExperienceAnalyticsWorkFromAnywhereDeviceItemReques_11f691ae $queryParameters = null;
    
    /**
     * Instantiates a new UserExperienceAnalyticsWorkFromAnywhereDeviceItemReques_76b6570c and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param UserExperienceAnalyticsWorkFromAnywhereDeviceItemReques_11f691ae|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?UserExperienceAnalyticsWorkFromAnywhereDeviceItemReques_11f691ae $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new UserExperienceAnalyticsWorkFromAnywhereDeviceItemReques_11f691ae.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return UserExperienceAnalyticsWorkFromAnywhereDeviceItemReques_11f691ae
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): UserExperienceAnalyticsWorkFromAnywhereDeviceItemReques_11f691ae {
        return new UserExperienceAnalyticsWorkFromAnywhereDeviceItemReques_11f691ae($expand, $select);
    }

}
