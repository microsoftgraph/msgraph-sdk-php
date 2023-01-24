<?php

namespace Microsoft\Graph\Generated\Me\Drives\Item\EscapedList\ContentTypes\Item\BaseTypes;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class BaseTypesRequestBuilderGetRequestConfiguration 
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
     * @var BaseTypesRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?BaseTypesRequestBuilderGetQueryParameters $queryParameters = null;
    
}
