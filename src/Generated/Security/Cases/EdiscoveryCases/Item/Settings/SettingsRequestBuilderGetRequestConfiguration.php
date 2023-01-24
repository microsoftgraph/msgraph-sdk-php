<?php

namespace Microsoft\Graph\Generated\Security\Cases\EdiscoveryCases\Item\Settings;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class SettingsRequestBuilderGetRequestConfiguration 
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
     * @var SettingsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?SettingsRequestBuilderGetQueryParameters $queryParameters = null;
    
}
