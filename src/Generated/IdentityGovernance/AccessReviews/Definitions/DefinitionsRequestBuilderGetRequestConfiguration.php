<?php

namespace Microsoft\Graph\Generated\IdentityGovernance\AccessReviews\Definitions;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class DefinitionsRequestBuilderGetRequestConfiguration 
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
     * @var DefinitionsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?DefinitionsRequestBuilderGetQueryParameters $queryParameters = null;
    
}
