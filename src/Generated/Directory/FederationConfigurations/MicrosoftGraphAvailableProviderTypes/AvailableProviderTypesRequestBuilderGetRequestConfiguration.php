<?php

namespace Microsoft\Graph\Generated\Directory\FederationConfigurations\MicrosoftGraphAvailableProviderTypes;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class AvailableProviderTypesRequestBuilderGetRequestConfiguration 
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
     * @var AvailableProviderTypesRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?AvailableProviderTypesRequestBuilderGetQueryParameters $queryParameters = null;
    
}
