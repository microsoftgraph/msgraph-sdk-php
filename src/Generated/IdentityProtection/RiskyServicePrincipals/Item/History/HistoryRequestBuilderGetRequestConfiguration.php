<?php

namespace Microsoft\Graph\Generated\IdentityProtection\RiskyServicePrincipals\Item\History;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class HistoryRequestBuilderGetRequestConfiguration 
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
     * @var HistoryRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?HistoryRequestBuilderGetQueryParameters $queryParameters = null;
    
}
