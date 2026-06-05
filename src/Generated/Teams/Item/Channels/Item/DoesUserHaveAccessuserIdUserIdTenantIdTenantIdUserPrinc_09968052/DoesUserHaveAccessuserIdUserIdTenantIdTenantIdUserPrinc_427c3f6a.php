<?php

namespace Microsoft\Graph\Generated\Teams\Item\Channels\Item\DoesUserHaveAccessuserIdUserIdTenantIdTenantIdUserPrinc_09968052;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: doesUserHaveAccessuserIdUserIdTenantIdTenantIdUserPrincipalNameUserPrincipalNameRequestBuilderGetRequestConfiguration
*/
class DoesUserHaveAccessuserIdUserIdTenantIdTenantIdUserPrinc_427c3f6a extends BaseRequestConfiguration 
{
    /**
     * @var DoesUserHaveAccessuserIdUserIdTenantIdTenantIdUserPrinc_03a48fe2|null $queryParameters Request query parameters
    */
    public ?DoesUserHaveAccessuserIdUserIdTenantIdTenantIdUserPrinc_03a48fe2 $queryParameters = null;
    
    /**
     * Instantiates a new DoesUserHaveAccessuserIdUserIdTenantIdTenantIdUserPrinc_427c3f6a and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param DoesUserHaveAccessuserIdUserIdTenantIdTenantIdUserPrinc_03a48fe2|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DoesUserHaveAccessuserIdUserIdTenantIdTenantIdUserPrinc_03a48fe2 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new DoesUserHaveAccessuserIdUserIdTenantIdTenantIdUserPrinc_03a48fe2.
     * @param string|null $tenantId Usage: tenantId='@tenantId'
     * @param string|null $userId Usage: userId='@userId'
     * @param string|null $userPrincipalName Usage: userPrincipalName='@userPrincipalName'
     * @return DoesUserHaveAccessuserIdUserIdTenantIdTenantIdUserPrinc_03a48fe2
    */
    public static function createQueryParameters(?string $tenantId = null, ?string $userId = null, ?string $userPrincipalName = null): DoesUserHaveAccessuserIdUserIdTenantIdTenantIdUserPrinc_03a48fe2 {
        return new DoesUserHaveAccessuserIdUserIdTenantIdTenantIdUserPrinc_03a48fe2($tenantId, $userId, $userPrincipalName);
    }

}
