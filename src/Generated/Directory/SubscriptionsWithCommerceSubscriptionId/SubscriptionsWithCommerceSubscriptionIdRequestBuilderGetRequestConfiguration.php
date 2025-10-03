<?php

namespace Microsoft\\Graph\\Generated\Directory\SubscriptionsWithCommerceSubscriptionId;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class SubscriptionsWithCommerceSubscriptionIdRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var SubscriptionsWithCommerceSubscriptionIdRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?SubscriptionsWithCommerceSubscriptionIdRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new SubscriptionsWithCommerceSubscriptionIdRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param SubscriptionsWithCommerceSubscriptionIdRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?SubscriptionsWithCommerceSubscriptionIdRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new SubscriptionsWithCommerceSubscriptionIdRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return SubscriptionsWithCommerceSubscriptionIdRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): SubscriptionsWithCommerceSubscriptionIdRequestBuilderGetQueryParameters {
        return new SubscriptionsWithCommerceSubscriptionIdRequestBuilderGetQueryParameters($expand, $select);
    }

}
