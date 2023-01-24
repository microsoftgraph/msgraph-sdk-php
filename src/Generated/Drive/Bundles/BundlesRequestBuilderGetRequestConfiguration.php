<?php

namespace Microsoft\Graph\Generated\Drive\Bundles;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class BundlesRequestBuilderGetRequestConfiguration 
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
     * @var BundlesRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?BundlesRequestBuilderGetQueryParameters $queryParameters = null;
    
}
