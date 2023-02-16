<?php

namespace Microsoft\Graph\Generated\IdentityGovernance\EntitlementManagement\ConnectedOrganizations\Item\ExternalSponsors\Item\Ref;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class RefRequestBuilderDeleteRequestConfiguration 
{
    /**
     * @var array<string, array<string>|string>|null $headers Request headers
    */
    public ?array $headers = null;
    
    /**
     * @var array<string, RequestOption>|null $options Request options
    */
    public ?array $options = null;
    
    /**
     * @var RefRequestBuilderDeleteQueryParameters|null $queryParameters Request query parameters
    */
    public ?RefRequestBuilderDeleteQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new RefRequestBuilderDeleteQueryParameters.
     * @param string|null $id Delete Uri
     * @return RefRequestBuilderDeleteQueryParameters
    */
    public static function addQueryParameters(?string $id = null): RefRequestBuilderDeleteQueryParameters {
        return new RefRequestBuilderDeleteQueryParameters($id);
    }

    /**
     * Instantiates a new RefRequestBuilderDeleteRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param RefRequestBuilderDeleteQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?RefRequestBuilderDeleteQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
