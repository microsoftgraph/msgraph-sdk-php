<?php

namespace Microsoft\Graph\Generated\IdentityGovernance\EntitlementManagement\Catalogs\Item\ResourceRoles\Item\Resource\UploadSessions\Item\Files\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class CustomDataProvidedResourceFileItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var CustomDataProvidedResourceFileItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?CustomDataProvidedResourceFileItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new CustomDataProvidedResourceFileItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param CustomDataProvidedResourceFileItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?CustomDataProvidedResourceFileItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new CustomDataProvidedResourceFileItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return CustomDataProvidedResourceFileItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): CustomDataProvidedResourceFileItemRequestBuilderGetQueryParameters {
        return new CustomDataProvidedResourceFileItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
