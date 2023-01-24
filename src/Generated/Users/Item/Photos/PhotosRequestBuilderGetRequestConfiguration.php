<?php

namespace Microsoft\Graph\Generated\Users\Item\Photos;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class PhotosRequestBuilderGetRequestConfiguration 
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
     * @var PhotosRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?PhotosRequestBuilderGetQueryParameters $queryParameters = null;
    
}
