<?php

namespace Microsoft\\Graph\\Generated\Teams\Item\Schedule\DayNotes\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class DayNoteItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var DayNoteItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?DayNoteItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new DayNoteItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param DayNoteItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DayNoteItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new DayNoteItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return DayNoteItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): DayNoteItemRequestBuilderGetQueryParameters {
        return new DayNoteItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
