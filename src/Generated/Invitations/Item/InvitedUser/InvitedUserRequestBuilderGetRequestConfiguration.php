<?php

namespace Microsoft\Graph\Generated\Invitations\Item\InvitedUser;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class InvitedUserRequestBuilderGetRequestConfiguration 
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
     * @var InvitedUserRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?InvitedUserRequestBuilderGetQueryParameters $queryParameters = null;
    
}
