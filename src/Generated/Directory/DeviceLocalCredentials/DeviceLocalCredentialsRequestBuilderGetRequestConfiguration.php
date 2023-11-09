<?php

namespace Microsoft\Graph\Generated\Directory\DeviceLocalCredentials;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class DeviceLocalCredentialsRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var DeviceLocalCredentialsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?DeviceLocalCredentialsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new deviceLocalCredentialsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param DeviceLocalCredentialsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DeviceLocalCredentialsRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new deviceLocalCredentialsRequestBuilderGetQueryParameters.
     * @param bool|null $count Include count of items
     * @param string|null $filter Filter items by property values
     * @param array<string>|null $orderby Order items by property values
     * @param string|null $search Search items by search phrases
     * @param array<string>|null $select Select properties to be returned
     * @param int|null $top Show only the first n items
     * @return DeviceLocalCredentialsRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?bool $count = null, ?string $filter = null, ?array $orderby = null, ?string $search = null, ?array $select = null, ?int $top = null): DeviceLocalCredentialsRequestBuilderGetQueryParameters {
        return new DeviceLocalCredentialsRequestBuilderGetQueryParameters($count, $filter, $orderby, $search, $select, $top);
    }

}
