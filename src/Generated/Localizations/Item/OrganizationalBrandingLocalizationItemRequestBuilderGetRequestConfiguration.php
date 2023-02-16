<?php

namespace Microsoft\Graph\Generated\Localizations\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class OrganizationalBrandingLocalizationItemRequestBuilderGetRequestConfiguration 
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
     * @var OrganizationalBrandingLocalizationItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?OrganizationalBrandingLocalizationItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new OrganizationalBrandingLocalizationItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return OrganizationalBrandingLocalizationItemRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): OrganizationalBrandingLocalizationItemRequestBuilderGetQueryParameters {
        return new OrganizationalBrandingLocalizationItemRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new OrganizationalBrandingLocalizationItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param OrganizationalBrandingLocalizationItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?OrganizationalBrandingLocalizationItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
