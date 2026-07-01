<?php

namespace Microsoft\Graph\Generated\Security\SubjectRightsRequests\Item\CollaboratorsWithUserPrincipalName;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: collaboratorsWithUserPrincipalNameRequestBuilderGetRequestConfiguration
*/
class CollaboratorsWithUserPrincipalNameRequestBuilderGetRequ_a92ea57c extends BaseRequestConfiguration 
{
    /**
     * @var CollaboratorsWithUserPrincipalNameRequestBuilderGetQuer_382a68f8|null $queryParameters Request query parameters
    */
    public ?CollaboratorsWithUserPrincipalNameRequestBuilderGetQuer_382a68f8 $queryParameters = null;
    
    /**
     * Instantiates a new CollaboratorsWithUserPrincipalNameRequestBuilderGetRequ_a92ea57c and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param CollaboratorsWithUserPrincipalNameRequestBuilderGetQuer_382a68f8|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?CollaboratorsWithUserPrincipalNameRequestBuilderGetQuer_382a68f8 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new CollaboratorsWithUserPrincipalNameRequestBuilderGetQuer_382a68f8.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return CollaboratorsWithUserPrincipalNameRequestBuilderGetQuer_382a68f8
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): CollaboratorsWithUserPrincipalNameRequestBuilderGetQuer_382a68f8 {
        return new CollaboratorsWithUserPrincipalNameRequestBuilderGetQuer_382a68f8($expand, $select);
    }

}
