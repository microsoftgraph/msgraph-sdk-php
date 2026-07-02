<?php

namespace Microsoft\Graph\Generated\DeviceManagement\UserExperienceAnalyticsBaselines\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: UserExperienceAnalyticsBaselineItemRequestBuilderGetRequestConfiguration
*/
class UserExperienceAnalyticsBaselineItemRequestBuilderGetReq_471ca55f extends BaseRequestConfiguration 
{
    /**
     * @var UserExperienceAnalyticsBaselineItemRequestBuilderGetQue_269d5001|null $queryParameters Request query parameters
    */
    public ?UserExperienceAnalyticsBaselineItemRequestBuilderGetQue_269d5001 $queryParameters = null;
    
    /**
     * Instantiates a new UserExperienceAnalyticsBaselineItemRequestBuilderGetReq_471ca55f and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param UserExperienceAnalyticsBaselineItemRequestBuilderGetQue_269d5001|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?UserExperienceAnalyticsBaselineItemRequestBuilderGetQue_269d5001 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new UserExperienceAnalyticsBaselineItemRequestBuilderGetQue_269d5001.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return UserExperienceAnalyticsBaselineItemRequestBuilderGetQue_269d5001
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): UserExperienceAnalyticsBaselineItemRequestBuilderGetQue_269d5001 {
        return new UserExperienceAnalyticsBaselineItemRequestBuilderGetQue_269d5001($expand, $select);
    }

}
