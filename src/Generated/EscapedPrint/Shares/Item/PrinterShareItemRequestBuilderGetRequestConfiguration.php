<?php

namespace Microsoft\Graph\Generated\EscapedPrint\Shares\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class PrinterShareItemRequestBuilderGetRequestConfiguration 
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
     * @var PrinterShareItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?PrinterShareItemRequestBuilderGetQueryParameters $queryParameters = null;
    
}
