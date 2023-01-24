<?php

namespace Microsoft\Graph\Generated\Agreements\Item\Files;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class FilesRequestBuilderGetRequestConfiguration 
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
     * @var FilesRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?FilesRequestBuilderGetQueryParameters $queryParameters = null;
    
}
