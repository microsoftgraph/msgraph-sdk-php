<?php

namespace Microsoft\Graph\Generated\Users\Item\Outlook\SupportedLanguages;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the supportedLanguages method.
*/
class SupportedLanguagesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new SupportedLanguagesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/users/{user%2Did}/outlook/supportedLanguages(){?%24top,%24skip,%24search,%24filter,%24count}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get the list of locales and languages that are supported for the user, as configured on the user's mailbox server. When setting up an Outlook client, the user selects the preferred language from this supported list. You can subsequently get the preferred language bygetting the user's mailbox settings. This API is available in the following national cloud deployments.
     * @param SupportedLanguagesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<SupportedLanguagesGetResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/outlookuser-supportedlanguages?view=graph-rest-1.0 Find more info here
    */
    public function get(?SupportedLanguagesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [SupportedLanguagesGetResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get the list of locales and languages that are supported for the user, as configured on the user's mailbox server. When setting up an Outlook client, the user selects the preferred language from this supported list. You can subsequently get the preferred language bygetting the user's mailbox settings. This API is available in the following national cloud deployments.
     * @param SupportedLanguagesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?SupportedLanguagesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
        $requestInfo->tryAddHeader('Accept', "application/json;q=1");
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return SupportedLanguagesRequestBuilder
    */
    public function withUrl(string $rawUrl): SupportedLanguagesRequestBuilder {
        return new SupportedLanguagesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
