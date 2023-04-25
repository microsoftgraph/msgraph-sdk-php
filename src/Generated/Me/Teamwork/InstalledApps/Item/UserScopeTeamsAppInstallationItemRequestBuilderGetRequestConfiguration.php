<?php

namespace Microsoft\Graph\Generated\Me\Teamwork\InstalledApps\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class UserScopeTeamsAppInstallationItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var UserScopeTeamsAppInstallationItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?UserScopeTeamsAppInstallationItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new UserScopeTeamsAppInstallationItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param UserScopeTeamsAppInstallationItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?UserScopeTeamsAppInstallationItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new UserScopeTeamsAppInstallationItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return UserScopeTeamsAppInstallationItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): UserScopeTeamsAppInstallationItemRequestBuilderGetQueryParameters {
        return new UserScopeTeamsAppInstallationItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
