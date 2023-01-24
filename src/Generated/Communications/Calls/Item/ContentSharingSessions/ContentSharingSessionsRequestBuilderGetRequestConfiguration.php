<?php

namespace Microsoft\Graph\Generated\Communications\Calls\Item\ContentSharingSessions;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ContentSharingSessionsRequestBuilderGetRequestConfiguration 
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
     * @var ContentSharingSessionsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ContentSharingSessionsRequestBuilderGetQueryParameters $queryParameters = null;
    
}
