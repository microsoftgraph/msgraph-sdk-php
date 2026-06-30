<?php

namespace Microsoft\Graph\Generated\DeviceManagement\UserExperienceAnalyticsCategories;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: userExperienceAnalyticsCategoriesRequestBuilderGetRequestConfiguration
*/
class UserExperienceAnalyticsCategoriesRequestBuilderGetReque_0cd9108a extends BaseRequestConfiguration 
{
    /**
     * @var UserExperienceAnalyticsCategoriesRequestBuilderGetQuery_7fbc9691|null $queryParameters Request query parameters
    */
    public ?UserExperienceAnalyticsCategoriesRequestBuilderGetQuery_7fbc9691 $queryParameters = null;
    
    /**
     * Instantiates a new UserExperienceAnalyticsCategoriesRequestBuilderGetReque_0cd9108a and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param UserExperienceAnalyticsCategoriesRequestBuilderGetQuery_7fbc9691|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?UserExperienceAnalyticsCategoriesRequestBuilderGetQuery_7fbc9691 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new UserExperienceAnalyticsCategoriesRequestBuilderGetQuery_7fbc9691.
     * @param bool|null $count Include count of items
     * @param array<string>|null $expand Expand related entities
     * @param string|null $filter Filter items by property values
     * @param array<string>|null $orderby Order items by property values
     * @param string|null $search Search items by search phrases
     * @param array<string>|null $select Select properties to be returned
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return UserExperienceAnalyticsCategoriesRequestBuilderGetQuery_7fbc9691
    */
    public static function createQueryParameters(?bool $count = null, ?array $expand = null, ?string $filter = null, ?array $orderby = null, ?string $search = null, ?array $select = null, ?int $skip = null, ?int $top = null): UserExperienceAnalyticsCategoriesRequestBuilderGetQuery_7fbc9691 {
        return new UserExperienceAnalyticsCategoriesRequestBuilderGetQuery_7fbc9691($count, $expand, $filter, $orderby, $search, $select, $skip, $top);
    }

}
