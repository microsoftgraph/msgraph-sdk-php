<?php

namespace Microsoft\Graph\Generated\Drives\Item\Root\Subscriptions;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class SubscriptionsRequestBuilderGetRequestConfiguration 
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
     * @var SubscriptionsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?SubscriptionsRequestBuilderGetQueryParameters $queryParameters = null;
    
}
