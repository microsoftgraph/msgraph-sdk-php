<?php

namespace Microsoft\Graph\Generated\Identity\RiskPrevention\WebApplicationFirewallVerifications\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: WebApplicationFirewallVerificationModelItemRequestBuilderGetRequestConfiguration
*/
class WebApplicationFirewallVerificationModelItemRequestBuild_cead9d0a extends BaseRequestConfiguration 
{
    /**
     * @var WebApplicationFirewallVerificationModelItemRequestBuild_1ae21c3d|null $queryParameters Request query parameters
    */
    public ?WebApplicationFirewallVerificationModelItemRequestBuild_1ae21c3d $queryParameters = null;
    
    /**
     * Instantiates a new WebApplicationFirewallVerificationModelItemRequestBuild_cead9d0a and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param WebApplicationFirewallVerificationModelItemRequestBuild_1ae21c3d|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?WebApplicationFirewallVerificationModelItemRequestBuild_1ae21c3d $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new WebApplicationFirewallVerificationModelItemRequestBuild_1ae21c3d.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return WebApplicationFirewallVerificationModelItemRequestBuild_1ae21c3d
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): WebApplicationFirewallVerificationModelItemRequestBuild_1ae21c3d {
        return new WebApplicationFirewallVerificationModelItemRequestBuild_1ae21c3d($expand, $select);
    }

}
