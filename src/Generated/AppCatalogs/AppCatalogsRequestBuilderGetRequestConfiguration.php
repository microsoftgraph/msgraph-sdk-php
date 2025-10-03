<?php

namespace Microsoft\\Graph\\Generated\AppCatalogs;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class AppCatalogsRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var AppCatalogsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?AppCatalogsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new AppCatalogsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param AppCatalogsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?AppCatalogsRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new AppCatalogsRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return AppCatalogsRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): AppCatalogsRequestBuilderGetQueryParameters {
        return new AppCatalogsRequestBuilderGetQueryParameters($expand, $select);
    }

}
