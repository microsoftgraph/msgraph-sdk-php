<?php

namespace Microsoft\Graph\Generated\Users\Item\MailFolders\Item\ChildFolders\Item\Move;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\MailFolder;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the move method.
*/
class MoveRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new MoveRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/users/{user%2Did}/mailFolders/{mailFolder%2Did}/childFolders/{mailFolder%2Did1}/move');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Move a mailfolder and its contents to another mailfolder. This API is available in the following national cloud deployments.
     * @param MovePostRequestBody $body The request body
     * @param MoveRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<MailFolder|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/mailfolder-move?view=graph-rest-1.0 Find more info here
    */
    public function post(MovePostRequestBody $body, ?MoveRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [MailFolder::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Move a mailfolder and its contents to another mailfolder. This API is available in the following national cloud deployments.
     * @param MovePostRequestBody $body The request body
     * @param MoveRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(MovePostRequestBody $body, ?MoveRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return MoveRequestBuilder
    */
    public function withUrl(string $rawUrl): MoveRequestBuilder {
        return new MoveRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
