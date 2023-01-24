<?php

namespace Microsoft\Graph\Generated\Communications\Presences;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class PresencesRequestBuilderGetRequestConfiguration 
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
     * @var PresencesRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?PresencesRequestBuilderGetQueryParameters $queryParameters = null;
    
}
