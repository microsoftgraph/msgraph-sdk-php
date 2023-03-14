<?php

namespace Microsoft\Graph\Generated\Reports\Security\GetAttackSimulationRepeatOffenders;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class GetAttackSimulationRepeatOffendersRequestBuilderGetRequestConfiguration 
{
    /**
     * @var array<string, array<string>|string>|null $headers Request headers
    */
    public ?array $headers = null;
    
    /**
     * @var array<RequestOption>|null $options Request options
    */
    public ?array $options = null;
    
    /**
     * @var GetAttackSimulationRepeatOffendersRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?GetAttackSimulationRepeatOffendersRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new getAttackSimulationRepeatOffendersRequestBuilderGetQueryParameters.
     * @param bool|null $count Include count of items
     * @param string|null $filter Filter items by property values
     * @param string|null $search Search items by search phrases
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return GetAttackSimulationRepeatOffendersRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?bool $count = null, ?string $filter = null, ?string $search = null, ?int $skip = null, ?int $top = null): GetAttackSimulationRepeatOffendersRequestBuilderGetQueryParameters {
        return new GetAttackSimulationRepeatOffendersRequestBuilderGetQueryParameters($count, $filter, $search, $skip, $top);
    }

    /**
     * Instantiates a new getAttackSimulationRepeatOffendersRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param GetAttackSimulationRepeatOffendersRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?GetAttackSimulationRepeatOffendersRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
