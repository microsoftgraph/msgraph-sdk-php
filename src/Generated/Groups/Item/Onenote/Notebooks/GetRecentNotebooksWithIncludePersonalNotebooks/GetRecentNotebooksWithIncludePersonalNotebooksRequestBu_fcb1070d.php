<?php

namespace Microsoft\Graph\Generated\Groups\Item\Onenote\Notebooks\GetRecentNotebooksWithIncludePersonalNotebooks;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: getRecentNotebooksWithIncludePersonalNotebooksRequestBuilderGetRequestConfiguration
*/
class GetRecentNotebooksWithIncludePersonalNotebooksRequestBu_fcb1070d extends BaseRequestConfiguration 
{
    /**
     * @var GetRecentNotebooksWithIncludePersonalNotebooksRequestBu_eaf0c6c6|null $queryParameters Request query parameters
    */
    public ?GetRecentNotebooksWithIncludePersonalNotebooksRequestBu_eaf0c6c6 $queryParameters = null;
    
    /**
     * Instantiates a new GetRecentNotebooksWithIncludePersonalNotebooksRequestBu_fcb1070d and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param GetRecentNotebooksWithIncludePersonalNotebooksRequestBu_eaf0c6c6|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?GetRecentNotebooksWithIncludePersonalNotebooksRequestBu_eaf0c6c6 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new GetRecentNotebooksWithIncludePersonalNotebooksRequestBu_eaf0c6c6.
     * @param bool|null $count Include count of items
     * @param string|null $filter Filter items by property values
     * @param string|null $search Search items by search phrases
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return GetRecentNotebooksWithIncludePersonalNotebooksRequestBu_eaf0c6c6
    */
    public static function createQueryParameters(?bool $count = null, ?string $filter = null, ?string $search = null, ?int $skip = null, ?int $top = null): GetRecentNotebooksWithIncludePersonalNotebooksRequestBu_eaf0c6c6 {
        return new GetRecentNotebooksWithIncludePersonalNotebooksRequestBu_eaf0c6c6($count, $filter, $search, $skip, $top);
    }

}
