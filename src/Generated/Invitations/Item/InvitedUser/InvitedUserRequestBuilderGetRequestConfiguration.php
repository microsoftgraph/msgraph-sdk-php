<?php

namespace Microsoft\Graph\Generated\Invitations\Item\InvitedUser;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class InvitedUserRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var InvitedUserRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?InvitedUserRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new invitedUserRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param InvitedUserRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?InvitedUserRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new invitedUserRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return InvitedUserRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): InvitedUserRequestBuilderGetQueryParameters {
        return new InvitedUserRequestBuilderGetQueryParameters($expand, $select);
    }

}
