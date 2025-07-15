<?php

namespace Microsoft\Graph\Generated\Groups\Item\Sites\Item\GetByPathWithPath\Drives;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class DrivesRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var DrivesRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?DrivesRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new DrivesRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param DrivesRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DrivesRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new DrivesRequestBuilderGetQueryParameters.
     * @param bool|null $count Include count of items
     * @param array<string>|null $expand Expand related entities
     * @param string|null $filter Filter items by property values
     * @param string|null $search Search items by search phrases
     * @param array<string>|null $select Select properties to be returned
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return DrivesRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?bool $count = null, ?array $expand = null, ?string $filter = null, ?string $search = null, ?array $select = null, ?int $skip = null, ?int $top = null): DrivesRequestBuilderGetQueryParameters {
        return new DrivesRequestBuilderGetQueryParameters($count, $expand, $filter, $search, $select, $skip, $top);
    }

}
