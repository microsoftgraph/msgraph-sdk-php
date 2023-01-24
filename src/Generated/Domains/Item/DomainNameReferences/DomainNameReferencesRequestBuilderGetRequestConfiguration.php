<?php

namespace Microsoft\Graph\Generated\Domains\Item\DomainNameReferences;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class DomainNameReferencesRequestBuilderGetRequestConfiguration 
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
     * @var DomainNameReferencesRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?DomainNameReferencesRequestBuilderGetQueryParameters $queryParameters = null;
    
}
