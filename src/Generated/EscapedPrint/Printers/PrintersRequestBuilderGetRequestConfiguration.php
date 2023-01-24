<?php

namespace Microsoft\Graph\Generated\EscapedPrint\Printers;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class PrintersRequestBuilderGetRequestConfiguration 
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
     * @var PrintersRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?PrintersRequestBuilderGetQueryParameters $queryParameters = null;
    
}
