<?php

namespace Microsoft\Graph\Generated\Communications\CallRecords\MicrosoftGraphCallRecordsGetPstnCallsWithFromDateTimeWithToDateTime;

use DateTime;
use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

/**
 * Provides operations to call the getPstnCalls method.
*/
class GetPstnCallsWithFromDateTimeWithToDateTimeRequestBuilder 
{
    /**
     * @var array<string, mixed> $pathParameters Path parameters for the request
    */
    private array $pathParameters;
    
    /**
     * @var RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    private RequestAdapter $requestAdapter;
    
    /**
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
    /**
     * Instantiates a new GetPstnCallsWithFromDateTimeWithToDateTimeRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
     * @param DateTime|null $fromDateTime Usage: fromDateTime={fromDateTime}
     * @param DateTime|null $toDateTime Usage: toDateTime={toDateTime}
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter, ?DateTime $fromDateTime = null, ?DateTime $toDateTime = null) {
        $this->urlTemplate = '{+baseurl}/communications/callRecords/microsoft.graph.callRecords.getPstnCalls(fromDateTime={fromDateTime},toDateTime={toDateTime}){?%24top,%24skip,%24search,%24filter,%24count}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
        $urlTplParams = $pathParameters;
        $urlTplParams['fromDateTime'] = $fromDateTime;
        $urlTplParams['toDateTime'] = $toDateTime;
        $this->pathParameters = array_merge($this->pathParameters, $urlTplParams);
    }

    /**
     * Invoke function getPstnCalls
     * @param GetPstnCallsWithFromDateTimeWithToDateTimeRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function get(?GetPstnCallsWithFromDateTimeWithToDateTimeRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [GetPstnCallsWithFromDateTimeWithToDateTimeResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Invoke function getPstnCalls
     * @param GetPstnCallsWithFromDateTimeWithToDateTimeRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?GetPstnCallsWithFromDateTimeWithToDateTimeRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->addHeaders($requestConfiguration->headers);
            }
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        return $requestInfo;
    }

}
