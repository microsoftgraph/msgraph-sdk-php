<?php

namespace Microsoft\Graph\Generated\Domains\Item\FederationConfiguration\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class InternalDomainFederationItemRequestBuilderGetRequestConfiguration 
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
     * @var InternalDomainFederationItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?InternalDomainFederationItemRequestBuilderGetQueryParameters $queryParameters = null;
    
}
