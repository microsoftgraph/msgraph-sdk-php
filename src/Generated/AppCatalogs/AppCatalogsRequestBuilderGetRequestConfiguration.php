<?php

namespace Microsoft\Graph\Generated\AppCatalogs;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class AppCatalogsRequestBuilderGetRequestConfiguration 
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
     * @var AppCatalogsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?AppCatalogsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new appCatalogsRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return AppCatalogsRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): AppCatalogsRequestBuilderGetQueryParameters {
        return new AppCatalogsRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new appCatalogsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param AppCatalogsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?AppCatalogsRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
