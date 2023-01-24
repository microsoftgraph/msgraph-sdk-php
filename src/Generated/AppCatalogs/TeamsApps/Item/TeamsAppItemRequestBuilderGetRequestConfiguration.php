<?php

namespace Microsoft\Graph\Generated\AppCatalogs\TeamsApps\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class TeamsAppItemRequestBuilderGetRequestConfiguration 
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
     * @var TeamsAppItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?TeamsAppItemRequestBuilderGetQueryParameters $queryParameters = null;
    
}
