<?php

namespace Microsoft\Graph\Generated\Admin\Exchange\Tracing\MessageTraces\Item\GetDetailsByRecipientWithRecipientAddress;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the getDetailsByRecipient method.
*/
class GetDetailsByRecipientWithRecipientAddressRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new GetDetailsByRecipientWithRecipientAddressRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
     * @param string|null $recipientAddress Usage: recipientAddress='{recipientAddress}'
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter, ?string $recipientAddress = null) {
        parent::__construct($requestAdapter, [], '{+baseurl}/admin/exchange/tracing/messageTraces/{exchangeMessageTrace%2Did}/getDetailsByRecipient(recipientAddress=\'{recipientAddress}\'){?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $urlTplParams = $pathParametersOrRawUrl;
            $urlTplParams['recipientAddress'] = $recipientAddress;
            $this->pathParameters = $urlTplParams;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a list of exchangeMessageTraceDetail objects filtered on the recipient.
     * @param GetDetailsByRecipientWithRecipientAddressRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<GetDetailsByRecipientWithRecipientAddressGetResponse|null>
     * @throws Exception
    */
    public function get(?GetDetailsByRecipientWithRecipientAddressRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [GetDetailsByRecipientWithRecipientAddressGetResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get a list of exchangeMessageTraceDetail objects filtered on the recipient.
     * @param GetDetailsByRecipientWithRecipientAddressRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?GetDetailsByRecipientWithRecipientAddressRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return GetDetailsByRecipientWithRecipientAddressRequestBuilder
    */
    public function withUrl(string $rawUrl): GetDetailsByRecipientWithRecipientAddressRequestBuilder {
        return new GetDetailsByRecipientWithRecipientAddressRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
