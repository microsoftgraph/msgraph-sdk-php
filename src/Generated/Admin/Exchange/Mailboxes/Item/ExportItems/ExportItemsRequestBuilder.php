<?php

namespace Microsoft\Graph\Generated\Admin\Exchange\Mailboxes\Item\ExportItems;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the exportItems method.
*/
class ExportItemsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new ExportItemsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/admin/exchange/mailboxes/{mailbox%2Did}/exportItems');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Export Exchange mailboxItem objects in full fidelity. This API exports each item as an opaque stream. The data stream isn't intended for parsing, but can be used to import an item back into an Exchange mailbox. For more information, see Overview of the mailbox import and export APIs in Microsoft Graph. You can export up to 20 items in a single export request.
     * @param ExportItemsPostRequestBody $body The request body
     * @param ExportItemsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ExportItemsPostResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/mailbox-exportitems?view=graph-rest-1.0 Find more info here
    */
    public function post(ExportItemsPostRequestBody $body, ?ExportItemsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ExportItemsPostResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Export Exchange mailboxItem objects in full fidelity. This API exports each item as an opaque stream. The data stream isn't intended for parsing, but can be used to import an item back into an Exchange mailbox. For more information, see Overview of the mailbox import and export APIs in Microsoft Graph. You can export up to 20 items in a single export request.
     * @param ExportItemsPostRequestBody $body The request body
     * @param ExportItemsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(ExportItemsPostRequestBody $body, ?ExportItemsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return ExportItemsRequestBuilder
    */
    public function withUrl(string $rawUrl): ExportItemsRequestBuilder {
        return new ExportItemsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
