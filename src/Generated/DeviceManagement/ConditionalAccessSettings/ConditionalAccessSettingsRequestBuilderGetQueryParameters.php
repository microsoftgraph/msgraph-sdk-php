<?php

namespace Microsoft\Graph\Generated\DeviceManagement\ConditionalAccessSettings;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The Exchange on premises conditional access settings. On premises conditional access will require devices to be both enrolled and compliant for mail access
*/
class ConditionalAccessSettingsRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("%24expand")
     * @var array<string>|null $expand Expand related entities
    */
    public ?array $expand = null;
    
    /**
     * @QueryParameter("%24select")
     * @var array<string>|null $select Select properties to be returned
    */
    public ?array $select = null;
    
}
