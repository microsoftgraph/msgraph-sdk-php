<?php

namespace Microsoft\Graph\Generated\Drive\EscapedList\ContentTypes\Item\BaseTypes\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ContentTypeItemRequestBuilderGetRequestConfiguration 
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
     * @var ContentTypeItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ContentTypeItemRequestBuilderGetQueryParameters $queryParameters = null;
    
}
