<?php

namespace Microsoft\Graph\Generated\ServicePrincipals\Item\CreatedObjects\MicrosoftGraphServicePrincipal;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class MicrosoftGraphServicePrincipalRequestBuilderGetRequestConfiguration 
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
     * @var MicrosoftGraphServicePrincipalRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?MicrosoftGraphServicePrincipalRequestBuilderGetQueryParameters $queryParameters = null;
    
}
