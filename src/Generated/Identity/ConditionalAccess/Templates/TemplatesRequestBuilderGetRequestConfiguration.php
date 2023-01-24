<?php

namespace Microsoft\Graph\Generated\Identity\ConditionalAccess\Templates;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class TemplatesRequestBuilderGetRequestConfiguration 
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
     * @var TemplatesRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?TemplatesRequestBuilderGetQueryParameters $queryParameters = null;
    
}
