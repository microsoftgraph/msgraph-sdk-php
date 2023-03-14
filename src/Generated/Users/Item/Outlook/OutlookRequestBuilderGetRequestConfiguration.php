<?php

namespace Microsoft\Graph\Generated\Users\Item\Outlook;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class OutlookRequestBuilderGetRequestConfiguration 
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
     * @var OutlookRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?OutlookRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new outlookRequestBuilderGetQueryParameters.
     * @param array<string>|null $select Select properties to be returned
     * @return OutlookRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $select = null): OutlookRequestBuilderGetQueryParameters {
        return new OutlookRequestBuilderGetQueryParameters($select);
    }

    /**
     * Instantiates a new outlookRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param OutlookRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?OutlookRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
