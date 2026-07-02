<?php

namespace Microsoft\Graph\Generated\DeviceManagement\UserExperienceAnalyticsCategories\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: UserExperienceAnalyticsCategoryItemRequestBuilderGetRequestConfiguration
*/
class UserExperienceAnalyticsCategoryItemRequestBuilderGetReq_4063cbc5 extends BaseRequestConfiguration 
{
    /**
     * @var UserExperienceAnalyticsCategoryItemRequestBuilderGetQue_292374ca|null $queryParameters Request query parameters
    */
    public ?UserExperienceAnalyticsCategoryItemRequestBuilderGetQue_292374ca $queryParameters = null;
    
    /**
     * Instantiates a new UserExperienceAnalyticsCategoryItemRequestBuilderGetReq_4063cbc5 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param UserExperienceAnalyticsCategoryItemRequestBuilderGetQue_292374ca|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?UserExperienceAnalyticsCategoryItemRequestBuilderGetQue_292374ca $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new UserExperienceAnalyticsCategoryItemRequestBuilderGetQue_292374ca.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return UserExperienceAnalyticsCategoryItemRequestBuilderGetQue_292374ca
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): UserExperienceAnalyticsCategoryItemRequestBuilderGetQue_292374ca {
        return new UserExperienceAnalyticsCategoryItemRequestBuilderGetQue_292374ca($expand, $select);
    }

}
