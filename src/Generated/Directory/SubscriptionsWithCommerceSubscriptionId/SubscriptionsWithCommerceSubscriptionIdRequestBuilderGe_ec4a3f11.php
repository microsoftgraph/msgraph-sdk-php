<?php

namespace Microsoft\Graph\Generated\Directory\SubscriptionsWithCommerceSubscriptionId;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: subscriptionsWithCommerceSubscriptionIdRequestBuilderGetRequestConfiguration
*/
class SubscriptionsWithCommerceSubscriptionIdRequestBuilderGe_ec4a3f11 extends BaseRequestConfiguration 
{
    /**
     * @var SubscriptionsWithCommerceSubscriptionIdRequestBuilderGe_e8486876|null $queryParameters Request query parameters
    */
    public ?SubscriptionsWithCommerceSubscriptionIdRequestBuilderGe_e8486876 $queryParameters = null;
    
    /**
     * Instantiates a new SubscriptionsWithCommerceSubscriptionIdRequestBuilderGe_ec4a3f11 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param SubscriptionsWithCommerceSubscriptionIdRequestBuilderGe_e8486876|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?SubscriptionsWithCommerceSubscriptionIdRequestBuilderGe_e8486876 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new SubscriptionsWithCommerceSubscriptionIdRequestBuilderGe_e8486876.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return SubscriptionsWithCommerceSubscriptionIdRequestBuilderGe_e8486876
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): SubscriptionsWithCommerceSubscriptionIdRequestBuilderGe_e8486876 {
        return new SubscriptionsWithCommerceSubscriptionIdRequestBuilderGe_e8486876($expand, $select);
    }

}
