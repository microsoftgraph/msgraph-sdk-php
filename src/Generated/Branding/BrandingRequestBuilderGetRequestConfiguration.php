<?php

namespace Microsoft\Graph\Generated\Branding;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class BrandingRequestBuilderGetRequestConfiguration 
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
     * @var BrandingRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?BrandingRequestBuilderGetQueryParameters $queryParameters = null;
    
}
