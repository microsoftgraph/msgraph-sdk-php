<?php

namespace Microsoft\Graph\Generated\Policies\DeviceRegistrationPolicy;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Get deviceRegistrationPolicy from policies
*/
class DeviceRegistrationPolicyRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("%24select")
     * @var array<string>|null $select Select properties to be returned
    */
    public ?array $select = null;
    
    /**
     * Instantiates a new DeviceRegistrationPolicyRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $select = null) {
        $this->select = $select;
    }

}
