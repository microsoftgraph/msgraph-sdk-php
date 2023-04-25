<?php

namespace Microsoft\Graph\Generated\Me\ContactFolders\Item\ChildFolders;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ChildFoldersRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var ChildFoldersRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ChildFoldersRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new childFoldersRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ChildFoldersRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ChildFoldersRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new childFoldersRequestBuilderGetQueryParameters.
     * @param bool|null $count Include count of items
     * @param array<string>|null $expand Expand related entities
     * @param string|null $filter Filter items by property values
     * @param array<string>|null $orderby Order items by property values
     * @param array<string>|null $select Select properties to be returned
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return ChildFoldersRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?bool $count = null, ?array $expand = null, ?string $filter = null, ?array $orderby = null, ?array $select = null, ?int $skip = null, ?int $top = null): ChildFoldersRequestBuilderGetQueryParameters {
        return new ChildFoldersRequestBuilderGetQueryParameters($count, $expand, $filter, $orderby, $select, $skip, $top);
    }

}
