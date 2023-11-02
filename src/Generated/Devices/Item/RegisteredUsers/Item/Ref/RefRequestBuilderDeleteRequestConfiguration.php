<?php

namespace Microsoft\Graph\Generated\Devices\Item\RegisteredUsers\Item\Ref;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class RefRequestBuilderDeleteRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var RefRequestBuilderDeleteQueryParameters|null $queryParameters Request query parameters
    */
    public ?RefRequestBuilderDeleteQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new RefRequestBuilderDeleteRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param RefRequestBuilderDeleteQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?RefRequestBuilderDeleteQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new RefRequestBuilderDeleteQueryParameters.
     * @param string|null $id Delete Uri
     * @return RefRequestBuilderDeleteQueryParameters
    */
    public static function createQueryParameters(?string $id = null): RefRequestBuilderDeleteQueryParameters {
        return new RefRequestBuilderDeleteQueryParameters($id);
    }

}
