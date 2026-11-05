<?php

namespace Microsoft\Graph\Generated\Solutions\BackupRestore\Reports\GetStatisticsByPolicyWithPolicyId;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\BackupPolicyReport;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the getStatisticsByPolicy method.
*/
class GetStatisticsByPolicyWithPolicyIdRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new GetStatisticsByPolicyWithPolicyIdRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
     * @param string|null $policyId Usage: policyId='{policyId}'
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter, ?string $policyId = null) {
        parent::__construct($requestAdapter, [], '{+baseurl}/solutions/backupRestore/reports/getStatisticsByPolicy(policyId=\'{policyId}\')');
        if (is_array($pathParametersOrRawUrl)) {
            $urlTplParams = $pathParametersOrRawUrl;
            $urlTplParams['policyId'] = $policyId;
            $this->pathParameters = $urlTplParams;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get the statistics that correspond to the specified policy ID of a backupPolicyReport.
     * @param GetStatisticsByPolicyWithPolicyIdRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<BackupPolicyReport|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/backupreport-getstatisticsbypolicy?view=graph-rest-1.0 Find more info here
    */
    public function get(?GetStatisticsByPolicyWithPolicyIdRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [BackupPolicyReport::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get the statistics that correspond to the specified policy ID of a backupPolicyReport.
     * @param GetStatisticsByPolicyWithPolicyIdRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?GetStatisticsByPolicyWithPolicyIdRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return GetStatisticsByPolicyWithPolicyIdRequestBuilder
    */
    public function withUrl(string $rawUrl): GetStatisticsByPolicyWithPolicyIdRequestBuilder {
        return new GetStatisticsByPolicyWithPolicyIdRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
