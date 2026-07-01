<?php

namespace Microsoft\Graph\Generated\IdentityGovernance\EntitlementManagement\SubjectsWithObjectId;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class SubjectsWithObjectIdRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var SubjectsWithObjectIdRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?SubjectsWithObjectIdRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new SubjectsWithObjectIdRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param SubjectsWithObjectIdRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?SubjectsWithObjectIdRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new SubjectsWithObjectIdRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return SubjectsWithObjectIdRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): SubjectsWithObjectIdRequestBuilderGetQueryParameters {
        return new SubjectsWithObjectIdRequestBuilderGetQueryParameters($expand, $select);
    }

}
