<?php

namespace Microsoft\Graph\Generated\IdentityGovernance\EntitlementManagement\ResourceEnvironments\Item\Resources\Item\Roles\Item\Resource\Scopes\Item\Resource\UploadSessions\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class CustomDataProvidedResourceUploadSessionItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var CustomDataProvidedResourceUploadSessionItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?CustomDataProvidedResourceUploadSessionItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new CustomDataProvidedResourceUploadSessionItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param CustomDataProvidedResourceUploadSessionItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?CustomDataProvidedResourceUploadSessionItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new CustomDataProvidedResourceUploadSessionItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return CustomDataProvidedResourceUploadSessionItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): CustomDataProvidedResourceUploadSessionItemRequestBuilderGetQueryParameters {
        return new CustomDataProvidedResourceUploadSessionItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
