<?php

namespace Microsoft\Graph\Generated\ServicePrincipals\Item\Synchronization\Jobs\Item\BulkUpload;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class BulkUploadRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var BulkUploadRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?BulkUploadRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new BulkUploadRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param BulkUploadRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?BulkUploadRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new BulkUploadRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return BulkUploadRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): BulkUploadRequestBuilderGetQueryParameters {
        return new BulkUploadRequestBuilderGetQueryParameters($expand, $select);
    }

}
