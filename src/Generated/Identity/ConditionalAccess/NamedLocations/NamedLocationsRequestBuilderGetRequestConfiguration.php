<?php

namespace Microsoft\Graph\Generated\Identity\ConditionalAccess\NamedLocations;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class NamedLocationsRequestBuilderGetRequestConfiguration 
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
     * @var NamedLocationsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?NamedLocationsRequestBuilderGetQueryParameters $queryParameters = null;
    
}
