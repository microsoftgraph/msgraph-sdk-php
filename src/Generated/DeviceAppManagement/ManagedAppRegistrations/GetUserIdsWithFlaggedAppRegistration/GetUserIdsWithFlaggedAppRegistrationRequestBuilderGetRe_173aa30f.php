<?php

namespace Microsoft\Graph\Generated\DeviceAppManagement\ManagedAppRegistrations\GetUserIdsWithFlaggedAppRegistration;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: getUserIdsWithFlaggedAppRegistrationRequestBuilderGetRequestConfiguration
*/
class GetUserIdsWithFlaggedAppRegistrationRequestBuilderGetRe_173aa30f extends BaseRequestConfiguration 
{
    /**
     * @var GetUserIdsWithFlaggedAppRegistrationRequestBuilderGetQu_1d5d0f96|null $queryParameters Request query parameters
    */
    public ?GetUserIdsWithFlaggedAppRegistrationRequestBuilderGetQu_1d5d0f96 $queryParameters = null;
    
    /**
     * Instantiates a new GetUserIdsWithFlaggedAppRegistrationRequestBuilderGetRe_173aa30f and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param GetUserIdsWithFlaggedAppRegistrationRequestBuilderGetQu_1d5d0f96|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?GetUserIdsWithFlaggedAppRegistrationRequestBuilderGetQu_1d5d0f96 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new GetUserIdsWithFlaggedAppRegistrationRequestBuilderGetQu_1d5d0f96.
     * @param bool|null $count Include count of items
     * @param string|null $filter Filter items by property values
     * @param string|null $search Search items by search phrases
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return GetUserIdsWithFlaggedAppRegistrationRequestBuilderGetQu_1d5d0f96
    */
    public static function createQueryParameters(?bool $count = null, ?string $filter = null, ?string $search = null, ?int $skip = null, ?int $top = null): GetUserIdsWithFlaggedAppRegistrationRequestBuilderGetQu_1d5d0f96 {
        return new GetUserIdsWithFlaggedAppRegistrationRequestBuilderGetQu_1d5d0f96($count, $filter, $search, $skip, $top);
    }

}
