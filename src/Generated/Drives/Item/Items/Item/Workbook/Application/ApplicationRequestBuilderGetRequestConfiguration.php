<?php

namespace Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Application;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ApplicationRequestBuilderGetRequestConfiguration 
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
     * @var ApplicationRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ApplicationRequestBuilderGetQueryParameters $queryParameters = null;
    
}
