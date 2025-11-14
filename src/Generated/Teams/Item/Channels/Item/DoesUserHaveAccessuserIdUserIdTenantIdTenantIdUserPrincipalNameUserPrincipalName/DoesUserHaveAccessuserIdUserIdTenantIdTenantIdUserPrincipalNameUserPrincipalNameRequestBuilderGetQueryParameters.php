<?php

namespace Microsoft\Graph\Generated\Teams\Item\Channels\Item\DoesUserHaveAccessuserIdUserIdTenantIdTenantIdUserPrincipalNameUserPrincipalName;

/**
 * Determine whether a user has access to a channel.
*/
class DoesUserHaveAccessuserIdUserIdTenantIdTenantIdUserPrincipalNameUserPrincipalNameRequestBuilderGetQueryParameters 
{
    /**
     * @var string|null $tenantId Usage: tenantId='@tenantId'
    */
    public ?string $tenantId = null;
    
    /**
     * @var string|null $userId Usage: userId='@userId'
    */
    public ?string $userId = null;
    
    /**
     * @var string|null $userPrincipalName Usage: userPrincipalName='@userPrincipalName'
    */
    public ?string $userPrincipalName = null;
    
    /**
     * Instantiates a new DoesUserHaveAccessuserIdUserIdTenantIdTenantIdUserPrincipalNameUserPrincipalNameRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $tenantId Usage: tenantId='@tenantId'
     * @param string|null $userId Usage: userId='@userId'
     * @param string|null $userPrincipalName Usage: userPrincipalName='@userPrincipalName'
    */
    public function __construct(?string $tenantId = null, ?string $userId = null, ?string $userPrincipalName = null) {
        $this->tenantId = $tenantId;
        $this->userId = $userId;
        $this->userPrincipalName = $userPrincipalName;
    }

}
