<?php

namespace Microsoft\Graph\Generated\Solutions\BackupRestore\Enable;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\ServiceStatus;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the enable method.
*/
class EnableRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new EnableRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/solutions/backupRestore/enable');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Enable the Microsoft 365 Backup Storage service for a tenant. Before you call this API, call List protection policies to initialize the data store in the tenant. Data store initialization takes about 5 minutes. If you call this API before the data store is initialized, the call results in an error.
     * @param EnablePostRequestBody $body The request body
     * @param EnableRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ServiceStatus|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/backuprestoreroot-enable?view=graph-rest-1.0 Find more info here
    */
    public function post(EnablePostRequestBody $body, ?EnableRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ServiceStatus::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Enable the Microsoft 365 Backup Storage service for a tenant. Before you call this API, call List protection policies to initialize the data store in the tenant. Data store initialization takes about 5 minutes. If you call this API before the data store is initialized, the call results in an error.
     * @param EnablePostRequestBody $body The request body
     * @param EnableRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(EnablePostRequestBody $body, ?EnableRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return EnableRequestBuilder
    */
    public function withUrl(string $rawUrl): EnableRequestBuilder {
        return new EnableRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
