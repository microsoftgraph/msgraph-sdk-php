<?php

namespace Microsoft\Graph\Generated\DeviceManagement\UserExperienceAnalyticsWorkFromAnywhereMetrics;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: userExperienceAnalyticsWorkFromAnywhereMetricsRequestBuilderGetRequestConfiguration
*/
class UserExperienceAnalyticsWorkFromAnywhereMetricsRequestBu_fd6815fa extends BaseRequestConfiguration 
{
    /**
     * @var UserExperienceAnalyticsWorkFromAnywhereMetricsRequestBu_8b38f96d|null $queryParameters Request query parameters
    */
    public ?UserExperienceAnalyticsWorkFromAnywhereMetricsRequestBu_8b38f96d $queryParameters = null;
    
    /**
     * Instantiates a new UserExperienceAnalyticsWorkFromAnywhereMetricsRequestBu_fd6815fa and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param UserExperienceAnalyticsWorkFromAnywhereMetricsRequestBu_8b38f96d|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?UserExperienceAnalyticsWorkFromAnywhereMetricsRequestBu_8b38f96d $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new UserExperienceAnalyticsWorkFromAnywhereMetricsRequestBu_8b38f96d.
     * @param bool|null $count Include count of items
     * @param array<string>|null $expand Expand related entities
     * @param string|null $filter Filter items by property values
     * @param array<string>|null $orderby Order items by property values
     * @param string|null $search Search items by search phrases
     * @param array<string>|null $select Select properties to be returned
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return UserExperienceAnalyticsWorkFromAnywhereMetricsRequestBu_8b38f96d
    */
    public static function createQueryParameters(?bool $count = null, ?array $expand = null, ?string $filter = null, ?array $orderby = null, ?string $search = null, ?array $select = null, ?int $skip = null, ?int $top = null): UserExperienceAnalyticsWorkFromAnywhereMetricsRequestBu_8b38f96d {
        return new UserExperienceAnalyticsWorkFromAnywhereMetricsRequestBu_8b38f96d($count, $expand, $filter, $orderby, $search, $select, $skip, $top);
    }

}
