<?php

namespace Microsoft\\Graph\\Generated\Reports\Partners\Billing\Usage\Unbilled\MicrosoftGraphPartnersBillingExport;

use Exception;
use Http\Promise\Promise;
use Microsoft\\Graph\\Generated\Models\ODataErrors\ODataError;
use Microsoft\\Graph\\Generated\Models\Partners\Billing\Operation;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the export method.
*/
class MicrosoftGraphPartnersBillingExportRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new MicrosoftGraphPartnersBillingExportRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/reports/partners/billing/usage/unbilled/microsoft.graph.partners.billing.export');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Export unbilled Azure usage data for a specific billing period and currency.
     * @param ExportPostRequestBody $body The request body
     * @param MicrosoftGraphPartnersBillingExportRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<Operation|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/partners-billing-unbilledusage-export?view=graph-rest-1.0 Find more info here
    */
    public function post(ExportPostRequestBody $body, ?MicrosoftGraphPartnersBillingExportRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [Operation::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Export unbilled Azure usage data for a specific billing period and currency.
     * @param ExportPostRequestBody $body The request body
     * @param MicrosoftGraphPartnersBillingExportRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(ExportPostRequestBody $body, ?MicrosoftGraphPartnersBillingExportRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return MicrosoftGraphPartnersBillingExportRequestBuilder
    */
    public function withUrl(string $rawUrl): MicrosoftGraphPartnersBillingExportRequestBuilder {
        return new MicrosoftGraphPartnersBillingExportRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
