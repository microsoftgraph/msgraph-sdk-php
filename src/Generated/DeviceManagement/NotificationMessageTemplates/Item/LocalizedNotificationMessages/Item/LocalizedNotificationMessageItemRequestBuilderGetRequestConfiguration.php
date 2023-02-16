<?php

namespace Microsoft\Graph\Generated\DeviceManagement\NotificationMessageTemplates\Item\LocalizedNotificationMessages\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class LocalizedNotificationMessageItemRequestBuilderGetRequestConfiguration 
{
    /**
     * @var array<string, array<string>|string>|null $headers Request headers
    */
    public ?array $headers = null;
    
    /**
     * @var array<string, RequestOption>|null $options Request options
    */
    public ?array $options = null;
    
    /**
     * @var LocalizedNotificationMessageItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?LocalizedNotificationMessageItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new LocalizedNotificationMessageItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return LocalizedNotificationMessageItemRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): LocalizedNotificationMessageItemRequestBuilderGetQueryParameters {
        return new LocalizedNotificationMessageItemRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new LocalizedNotificationMessageItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param LocalizedNotificationMessageItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?LocalizedNotificationMessageItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
