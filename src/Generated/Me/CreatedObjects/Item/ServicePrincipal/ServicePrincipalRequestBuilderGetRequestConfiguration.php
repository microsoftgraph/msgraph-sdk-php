<?php

namespace Microsoft\Graph\Generated\Me\CreatedObjects\Item\ServicePrincipal;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ServicePrincipalRequestBuilderGetRequestConfiguration 
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
     * @var ServicePrincipalRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ServicePrincipalRequestBuilderGetQueryParameters $queryParameters = null;
    
}
