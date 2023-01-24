<?php

namespace Microsoft\Graph\Generated\Me\Chats\Item\Members;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class MembersRequestBuilderGetRequestConfiguration 
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
     * @var MembersRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?MembersRequestBuilderGetQueryParameters $queryParameters = null;
    
}
