<?php

namespace Microsoft\Graph\Generated\Me\Calendar\Events\Item\Instances\Item\Extensions;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ExtensionsRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var ExtensionsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ExtensionsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new extensionsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ExtensionsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ExtensionsRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new extensionsRequestBuilderGetQueryParameters.
     * @param bool|null $count Include count of items
     * @param array<string>|null $expand Expand related entities
     * @param string|null $filter Filter items by property values
     * @param array<string>|null $orderby Order items by property values
     * @param array<string>|null $select Select properties to be returned
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return ExtensionsRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?bool $count = null, ?array $expand = null, ?string $filter = null, ?array $orderby = null, ?array $select = null, ?int $skip = null, ?int $top = null): ExtensionsRequestBuilderGetQueryParameters {
        return new ExtensionsRequestBuilderGetQueryParameters($count, $expand, $filter, $orderby, $select, $skip, $top);
    }

}
