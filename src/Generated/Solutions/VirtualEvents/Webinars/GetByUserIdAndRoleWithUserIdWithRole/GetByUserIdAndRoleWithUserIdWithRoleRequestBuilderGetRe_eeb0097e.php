<?php

namespace Microsoft\Graph\Generated\Solutions\VirtualEvents\Webinars\GetByUserIdAndRoleWithUserIdWithRole;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: getByUserIdAndRoleWithUserIdWithRoleRequestBuilderGetRequestConfiguration
*/
class GetByUserIdAndRoleWithUserIdWithRoleRequestBuilderGetRe_eeb0097e extends BaseRequestConfiguration 
{
    /**
     * @var GetByUserIdAndRoleWithUserIdWithRoleRequestBuilderGetQu_affc9a69|null $queryParameters Request query parameters
    */
    public ?GetByUserIdAndRoleWithUserIdWithRoleRequestBuilderGetQu_affc9a69 $queryParameters = null;
    
    /**
     * Instantiates a new GetByUserIdAndRoleWithUserIdWithRoleRequestBuilderGetRe_eeb0097e and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param GetByUserIdAndRoleWithUserIdWithRoleRequestBuilderGetQu_affc9a69|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?GetByUserIdAndRoleWithUserIdWithRoleRequestBuilderGetQu_affc9a69 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new GetByUserIdAndRoleWithUserIdWithRoleRequestBuilderGetQu_affc9a69.
     * @param bool|null $count Include count of items
     * @param array<string>|null $expand Expand related entities
     * @param string|null $filter Filter items by property values
     * @param array<string>|null $orderby Order items by property values
     * @param string|null $search Search items by search phrases
     * @param array<string>|null $select Select properties to be returned
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return GetByUserIdAndRoleWithUserIdWithRoleRequestBuilderGetQu_affc9a69
    */
    public static function createQueryParameters(?bool $count = null, ?array $expand = null, ?string $filter = null, ?array $orderby = null, ?string $search = null, ?array $select = null, ?int $skip = null, ?int $top = null): GetByUserIdAndRoleWithUserIdWithRoleRequestBuilderGetQu_affc9a69 {
        return new GetByUserIdAndRoleWithUserIdWithRoleRequestBuilderGetQu_affc9a69($count, $expand, $filter, $orderby, $search, $select, $skip, $top);
    }

}
