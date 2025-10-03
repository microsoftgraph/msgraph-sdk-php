<?php

namespace Microsoft\\Graph\\Generated\Organization\Item\Branding\Localizations\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class OrganizationalBrandingLocalizationItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var OrganizationalBrandingLocalizationItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?OrganizationalBrandingLocalizationItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new OrganizationalBrandingLocalizationItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param OrganizationalBrandingLocalizationItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?OrganizationalBrandingLocalizationItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new OrganizationalBrandingLocalizationItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return OrganizationalBrandingLocalizationItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): OrganizationalBrandingLocalizationItemRequestBuilderGetQueryParameters {
        return new OrganizationalBrandingLocalizationItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
