<?php

namespace Microsoft\Graph\Generated\Security\Labels\RetentionLabels\Item\Descriptors\AuthorityTemplate;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class AuthorityTemplateRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var AuthorityTemplateRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?AuthorityTemplateRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new AuthorityTemplateRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param AuthorityTemplateRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?AuthorityTemplateRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new AuthorityTemplateRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return AuthorityTemplateRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): AuthorityTemplateRequestBuilderGetQueryParameters {
        return new AuthorityTemplateRequestBuilderGetQueryParameters($expand, $select);
    }

}
