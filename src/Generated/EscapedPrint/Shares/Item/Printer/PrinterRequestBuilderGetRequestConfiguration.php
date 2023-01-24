<?php

namespace Microsoft\Graph\Generated\EscapedPrint\Shares\Item\Printer;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class PrinterRequestBuilderGetRequestConfiguration 
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
     * @var PrinterRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?PrinterRequestBuilderGetQueryParameters $queryParameters = null;
    
}
