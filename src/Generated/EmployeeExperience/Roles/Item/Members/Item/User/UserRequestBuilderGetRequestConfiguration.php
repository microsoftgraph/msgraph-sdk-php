<?php

namespace Microsoft\\Graph\\Generated\EmployeeExperience\Roles\Item\Members\Item\User;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class UserRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var UserRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?UserRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new UserRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param UserRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?UserRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new UserRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return UserRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): UserRequestBuilderGetQueryParameters {
        return new UserRequestBuilderGetQueryParameters($expand, $select);
    }

}
