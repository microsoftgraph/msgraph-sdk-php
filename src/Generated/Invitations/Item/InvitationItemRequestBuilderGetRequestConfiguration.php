<?php

namespace Microsoft\Graph\Generated\Invitations\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class InvitationItemRequestBuilderGetRequestConfiguration 
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
     * @var InvitationItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?InvitationItemRequestBuilderGetQueryParameters $queryParameters = null;
    
}
