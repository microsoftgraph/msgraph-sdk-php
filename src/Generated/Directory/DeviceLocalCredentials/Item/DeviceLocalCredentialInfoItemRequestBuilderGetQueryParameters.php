<?php

namespace Microsoft\Graph\Generated\Directory\DeviceLocalCredentials\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The credentials of the device's local administrator account backed up to Microsoft Entra ID.
*/
class DeviceLocalCredentialInfoItemRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("%24select")
     * @var array<string>|null $select Select properties to be returned
    */
    public ?array $select = null;
    
    /**
     * Instantiates a new DeviceLocalCredentialInfoItemRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $select = null) {
        $this->select = $select;
    }

}
