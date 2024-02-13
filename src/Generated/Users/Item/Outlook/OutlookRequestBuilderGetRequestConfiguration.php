<?php

namespace Microsoft\Graph\Generated\Users\Item\Outlook;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class OutlookRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var OutlookRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?OutlookRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new OutlookRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param OutlookRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?OutlookRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new OutlookRequestBuilderGetQueryParameters.
     * @param array<string>|null $select Select properties to be returned
     * @return OutlookRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $select = null): OutlookRequestBuilderGetQueryParameters {
        return new OutlookRequestBuilderGetQueryParameters($select);
    }

}
