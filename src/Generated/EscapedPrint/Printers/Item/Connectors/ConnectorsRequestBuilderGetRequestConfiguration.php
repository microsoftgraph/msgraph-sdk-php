<?php

namespace Microsoft\Graph\Generated\EscapedPrint\Printers\Item\Connectors;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ConnectorsRequestBuilderGetRequestConfiguration 
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
     * @var ConnectorsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ConnectorsRequestBuilderGetQueryParameters $queryParameters = null;
    
}
