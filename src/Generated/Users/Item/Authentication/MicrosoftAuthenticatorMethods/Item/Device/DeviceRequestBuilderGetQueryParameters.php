<?php

namespace Microsoft\Graph\Generated\Users\Item\Authentication\MicrosoftAuthenticatorMethods\Item\Device;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The registered device on which Microsoft Authenticator resides. This property is null if the device is not registered for passwordless Phone Sign-In.
*/
class DeviceRequestBuilderGetQueryParameters 
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
