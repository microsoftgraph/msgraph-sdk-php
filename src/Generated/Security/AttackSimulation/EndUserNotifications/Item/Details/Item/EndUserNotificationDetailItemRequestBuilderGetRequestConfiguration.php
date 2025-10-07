<?php

namespace Microsoft\\Graph\\Generated\Security\AttackSimulation\EndUserNotifications\Item\Details\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class EndUserNotificationDetailItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var EndUserNotificationDetailItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?EndUserNotificationDetailItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new EndUserNotificationDetailItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param EndUserNotificationDetailItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?EndUserNotificationDetailItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new EndUserNotificationDetailItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return EndUserNotificationDetailItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): EndUserNotificationDetailItemRequestBuilderGetQueryParameters {
        return new EndUserNotificationDetailItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
