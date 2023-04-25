<?php

namespace Microsoft\Graph\Generated\Me\JoinedTeams\Item\Schedule\OpenShifts\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class OpenShiftItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var OpenShiftItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?OpenShiftItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new OpenShiftItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param OpenShiftItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?OpenShiftItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new OpenShiftItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return OpenShiftItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): OpenShiftItemRequestBuilderGetQueryParameters {
        return new OpenShiftItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
