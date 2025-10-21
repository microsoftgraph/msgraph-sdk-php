<?php

namespace Microsoft\\Graph\\Generated\Privacy\SubjectRightsRequests\Item\CollaboratorsWithUserPrincipalName;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class CollaboratorsWithUserPrincipalNameRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var CollaboratorsWithUserPrincipalNameRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?CollaboratorsWithUserPrincipalNameRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new CollaboratorsWithUserPrincipalNameRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param CollaboratorsWithUserPrincipalNameRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?CollaboratorsWithUserPrincipalNameRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new CollaboratorsWithUserPrincipalNameRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return CollaboratorsWithUserPrincipalNameRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): CollaboratorsWithUserPrincipalNameRequestBuilderGetQueryParameters {
        return new CollaboratorsWithUserPrincipalNameRequestBuilderGetQueryParameters($expand, $select);
    }

}
