<?php

namespace Microsoft\Graph\Generated\Solutions\Migrations;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class MigrationsRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var MigrationsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?MigrationsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new MigrationsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param MigrationsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?MigrationsRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new MigrationsRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return MigrationsRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): MigrationsRequestBuilderGetQueryParameters {
        return new MigrationsRequestBuilderGetQueryParameters($expand, $select);
    }

}
