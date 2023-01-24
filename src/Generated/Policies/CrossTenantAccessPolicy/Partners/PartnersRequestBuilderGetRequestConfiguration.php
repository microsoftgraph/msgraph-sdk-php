<?php

namespace Microsoft\Graph\Generated\Policies\CrossTenantAccessPolicy\Partners;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class PartnersRequestBuilderGetRequestConfiguration 
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
     * @var PartnersRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?PartnersRequestBuilderGetQueryParameters $queryParameters = null;
    
}
