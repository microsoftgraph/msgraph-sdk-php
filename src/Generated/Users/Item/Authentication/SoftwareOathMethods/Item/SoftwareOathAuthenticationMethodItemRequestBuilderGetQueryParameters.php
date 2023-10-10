<?php

namespace Microsoft\Graph\Generated\Users\Item\Authentication\SoftwareOathMethods\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Retrieve a user's single Software OATH token authentication method object and its properties. This API is available in the following national cloud deployments.
*/
class SoftwareOathAuthenticationMethodItemRequestBuilderGetQueryParameters 
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
    
    /**
     * Instantiates a new SoftwareOathAuthenticationMethodItemRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
