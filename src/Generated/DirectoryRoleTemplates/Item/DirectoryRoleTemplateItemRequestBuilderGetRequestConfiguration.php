<?php

namespace Microsoft\Graph\Generated\DirectoryRoleTemplates\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class DirectoryRoleTemplateItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var DirectoryRoleTemplateItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?DirectoryRoleTemplateItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new DirectoryRoleTemplateItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param DirectoryRoleTemplateItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DirectoryRoleTemplateItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new DirectoryRoleTemplateItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return DirectoryRoleTemplateItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): DirectoryRoleTemplateItemRequestBuilderGetQueryParameters {
        return new DirectoryRoleTemplateItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
