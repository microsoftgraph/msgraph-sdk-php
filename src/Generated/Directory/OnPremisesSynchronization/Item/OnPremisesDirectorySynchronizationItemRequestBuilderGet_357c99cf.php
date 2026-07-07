<?php

namespace Microsoft\Graph\Generated\Directory\OnPremisesSynchronization\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: OnPremisesDirectorySynchronizationItemRequestBuilderGetRequestConfiguration
*/
class OnPremisesDirectorySynchronizationItemRequestBuilderGet_357c99cf extends BaseRequestConfiguration 
{
    /**
     * @var OnPremisesDirectorySynchronizationItemRequestBuilderGet_cf976bf0|null $queryParameters Request query parameters
    */
    public ?OnPremisesDirectorySynchronizationItemRequestBuilderGet_cf976bf0 $queryParameters = null;
    
    /**
     * Instantiates a new OnPremisesDirectorySynchronizationItemRequestBuilderGet_357c99cf and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param OnPremisesDirectorySynchronizationItemRequestBuilderGet_cf976bf0|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?OnPremisesDirectorySynchronizationItemRequestBuilderGet_cf976bf0 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new OnPremisesDirectorySynchronizationItemRequestBuilderGet_cf976bf0.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return OnPremisesDirectorySynchronizationItemRequestBuilderGet_cf976bf0
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): OnPremisesDirectorySynchronizationItemRequestBuilderGet_cf976bf0 {
        return new OnPremisesDirectorySynchronizationItemRequestBuilderGet_cf976bf0($expand, $select);
    }

}
