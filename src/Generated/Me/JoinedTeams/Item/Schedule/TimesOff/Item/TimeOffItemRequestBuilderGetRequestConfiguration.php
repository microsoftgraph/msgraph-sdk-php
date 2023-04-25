<?php

namespace Microsoft\Graph\Generated\Me\JoinedTeams\Item\Schedule\TimesOff\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class TimeOffItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var TimeOffItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?TimeOffItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new TimeOffItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param TimeOffItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?TimeOffItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new TimeOffItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $select Select properties to be returned
     * @return TimeOffItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $select = null): TimeOffItemRequestBuilderGetQueryParameters {
        return new TimeOffItemRequestBuilderGetQueryParameters($select);
    }

}
