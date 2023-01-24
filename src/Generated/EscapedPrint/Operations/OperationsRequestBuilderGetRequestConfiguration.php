<?php

namespace Microsoft\Graph\Generated\EscapedPrint\Operations;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class OperationsRequestBuilderGetRequestConfiguration 
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
     * @var OperationsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?OperationsRequestBuilderGetQueryParameters $queryParameters = null;
    
}
