<?php

namespace Microsoft\Graph\Generated\Sites\Item\Lists\Item\ContentTypes;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ContentTypesRequestBuilderGetRequestConfiguration 
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
     * @var ContentTypesRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ContentTypesRequestBuilderGetQueryParameters $queryParameters = null;
    
}
