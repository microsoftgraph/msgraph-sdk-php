<?php

namespace Microsoft\Graph\Generated\Drives\Item\Items\Item\CreateLink;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\Permission;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the createLink method.
*/
class CreateLinkRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new CreateLinkRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/drives/{drive%2Did}/items/{driveItem%2Did}/createLink');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * You can use createLink action to share a DriveItem via a sharing link. The createLink action will create a new sharing link if the specified link type doesn't already exist for the calling application.If a sharing link of the specified type already exists for the app, the existing sharing link will be returned. DriveItem resources inherit sharing permissions from their ancestors. This API is supported in the following national cloud deployments.
     * @param CreateLinkPostRequestBody $body The request body
     * @param CreateLinkRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
     * @link https://learn.microsoft.com/graph/api/driveitem-createlink?view=graph-rest-1.0 Find more info here
    */
    public function post(CreateLinkPostRequestBody $body, ?CreateLinkRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [Permission::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * You can use createLink action to share a DriveItem via a sharing link. The createLink action will create a new sharing link if the specified link type doesn't already exist for the calling application.If a sharing link of the specified type already exists for the app, the existing sharing link will be returned. DriveItem resources inherit sharing permissions from their ancestors. This API is supported in the following national cloud deployments.
     * @param CreateLinkPostRequestBody $body The request body
     * @param CreateLinkRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(CreateLinkPostRequestBody $body, ?CreateLinkRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return CreateLinkRequestBuilder
    */
    public function withUrl(string $rawUrl): CreateLinkRequestBuilder {
        return new CreateLinkRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
