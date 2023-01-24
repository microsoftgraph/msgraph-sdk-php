<?php

namespace Microsoft\Graph\Generated\Drive\Root\Permissions;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class PermissionsRequestBuilderGetRequestConfiguration 
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
     * @var PermissionsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?PermissionsRequestBuilderGetQueryParameters $queryParameters = null;
    
}
