<?php

namespace Microsoft\Graph\Generated\Storage\FileStorage\Containers\Item\Drive\Items\Item\Workbook\Tables\Item\ClearFilters;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ClearFiltersRequestBuilderPostRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * Instantiates a new ClearFiltersRequestBuilderPostRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
    */
    public function __construct(?array $headers = null, ?array $options = null) {
        parent::__construct($headers ?? [], $options ?? []);
    }

}
