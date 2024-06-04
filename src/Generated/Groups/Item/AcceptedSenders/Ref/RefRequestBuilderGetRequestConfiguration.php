<?php

namespace Microsoft\Graph\Generated\Groups\Item\AcceptedSenders\Ref;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class RefRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var RefRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?RefRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new RefRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param RefRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?RefRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new RefRequestBuilderGetQueryParameters.
     * @param bool|null $count Include count of items
     * @param string|null $filter Filter items by property values
     * @param array<string>|null $orderby Order items by property values
     * @param string|null $search Search items by search phrases
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return RefRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?bool $count = null, ?string $filter = null, ?array $orderby = null, ?string $search = null, ?int $skip = null, ?int $top = null): RefRequestBuilderGetQueryParameters {
        return new RefRequestBuilderGetQueryParameters($count, $filter, $orderby, $search, $skip, $top);
    }

}
