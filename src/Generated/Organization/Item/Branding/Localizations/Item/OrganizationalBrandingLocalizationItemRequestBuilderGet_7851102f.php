<?php

namespace Microsoft\Graph\Generated\Organization\Item\Branding\Localizations\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: OrganizationalBrandingLocalizationItemRequestBuilderGetRequestConfiguration
*/
class OrganizationalBrandingLocalizationItemRequestBuilderGet_7851102f extends BaseRequestConfiguration 
{
    /**
     * @var OrganizationalBrandingLocalizationItemRequestBuilderGet_ea894143|null $queryParameters Request query parameters
    */
    public ?OrganizationalBrandingLocalizationItemRequestBuilderGet_ea894143 $queryParameters = null;
    
    /**
     * Instantiates a new OrganizationalBrandingLocalizationItemRequestBuilderGet_7851102f and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param OrganizationalBrandingLocalizationItemRequestBuilderGet_ea894143|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?OrganizationalBrandingLocalizationItemRequestBuilderGet_ea894143 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new OrganizationalBrandingLocalizationItemRequestBuilderGet_ea894143.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return OrganizationalBrandingLocalizationItemRequestBuilderGet_ea894143
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): OrganizationalBrandingLocalizationItemRequestBuilderGet_ea894143 {
        return new OrganizationalBrandingLocalizationItemRequestBuilderGet_ea894143($expand, $select);
    }

}
