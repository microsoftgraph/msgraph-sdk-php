<?php

namespace Microsoft\Graph\Generated\Directory\Recovery\Snapshots\Item\RecoveryPreviewJobs;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Directory\Recovery\Snapshots\Item\RecoveryPreviewJobs\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Directory\Recovery\Snapshots\Item\RecoveryPreviewJobs\Item\RecoveryPreviewJobItemRequestBuilder;
use Microsoft\Graph\Generated\Models\EntraRecoveryServices\RecoveryPreviewJobCollectionResponse;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the recoveryPreviewJobs property of the microsoft.graph.entraRecoveryServices.snapshot entity.
*/
class RecoveryPreviewJobsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the recoveryPreviewJobs property of the microsoft.graph.entraRecoveryServices.snapshot entity.
     * @param string $recoveryPreviewJobId The unique identifier of recoveryPreviewJob
     * @return RecoveryPreviewJobItemRequestBuilder
    */
    public function byRecoveryPreviewJobId(string $recoveryPreviewJobId): RecoveryPreviewJobItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['recoveryPreviewJob%2Did'] = $recoveryPreviewJobId;
        return new RecoveryPreviewJobItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new RecoveryPreviewJobsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/directory/recovery/snapshots/{snapshot%2Did}/recoveryPreviewJobs{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get recoveryPreviewJobs from directory
     * @param RecoveryPreviewJobsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<RecoveryPreviewJobCollectionResponse|null>
     * @throws Exception
    */
    public function get(?RecoveryPreviewJobsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [RecoveryPreviewJobCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get recoveryPreviewJobs from directory
     * @param RecoveryPreviewJobsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?RecoveryPreviewJobsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return RecoveryPreviewJobsRequestBuilder
    */
    public function withUrl(string $rawUrl): RecoveryPreviewJobsRequestBuilder {
        return new RecoveryPreviewJobsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
