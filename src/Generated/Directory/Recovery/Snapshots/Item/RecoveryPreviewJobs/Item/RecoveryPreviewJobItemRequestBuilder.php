<?php

namespace Microsoft\Graph\Generated\Directory\Recovery\Snapshots\Item\RecoveryPreviewJobs\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\EntraRecoveryServices\RecoveryPreviewJob;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the recoveryPreviewJobs property of the microsoft.graph.entraRecoveryServices.snapshot entity.
*/
class RecoveryPreviewJobItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new RecoveryPreviewJobItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/directory/recovery/snapshots/{snapshot%2Did}/recoveryPreviewJobs/{recoveryPreviewJob%2Did}{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get recoveryPreviewJobs from directory
     * @param RecoveryPreviewJobItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<RecoveryPreviewJob|null>
     * @throws Exception
    */
    public function get(?RecoveryPreviewJobItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [RecoveryPreviewJob::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get recoveryPreviewJobs from directory
     * @param RecoveryPreviewJobItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?RecoveryPreviewJobItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return RecoveryPreviewJobItemRequestBuilder
    */
    public function withUrl(string $rawUrl): RecoveryPreviewJobItemRequestBuilder {
        return new RecoveryPreviewJobItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
