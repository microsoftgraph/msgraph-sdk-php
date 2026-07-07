<?php

namespace Microsoft\Graph\Generated\Privacy\SubjectRightsRequests\Item\ApproversWithUserPrincipalName;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ApproversWithUserPrincipalNameRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var ApproversWithUserPrincipalNameRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ApproversWithUserPrincipalNameRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ApproversWithUserPrincipalNameRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ApproversWithUserPrincipalNameRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ApproversWithUserPrincipalNameRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ApproversWithUserPrincipalNameRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ApproversWithUserPrincipalNameRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ApproversWithUserPrincipalNameRequestBuilderGetQueryParameters {
        return new ApproversWithUserPrincipalNameRequestBuilderGetQueryParameters($expand, $select);
    }

}
