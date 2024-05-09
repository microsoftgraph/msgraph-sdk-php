<?php

namespace Microsoft\Graph\Generated\Reports\DailyPrintUsageByUser;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\PrintUsageByUser;
use Microsoft\Graph\Generated\Models\PrintUsageByUserCollectionResponse;
use Microsoft\Graph\Generated\Reports\DailyPrintUsageByUser\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Reports\DailyPrintUsageByUser\Item\PrintUsageByUserItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the dailyPrintUsageByUser property of the microsoft.graph.reportRoot entity.
*/
class DailyPrintUsageByUserRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the dailyPrintUsageByUser property of the microsoft.graph.reportRoot entity.
     * @param string $printUsageByUserId The unique identifier of printUsageByUser
     * @return PrintUsageByUserItemRequestBuilder
    */
    public function byPrintUsageByUserId(string $printUsageByUserId): PrintUsageByUserItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['printUsageByUser%2Did'] = $printUsageByUserId;
        return new PrintUsageByUserItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new DailyPrintUsageByUserRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/reports/dailyPrintUsageByUser{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Retrieve a list of daily print usage summaries, grouped by user.
     * @param DailyPrintUsageByUserRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<PrintUsageByUserCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/reportroot-list-dailyprintusagebyuser?view=graph-rest-1.0 Find more info here
    */
    public function get(?DailyPrintUsageByUserRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [PrintUsageByUserCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to dailyPrintUsageByUser for reports
     * @param PrintUsageByUser $body The request body
     * @param DailyPrintUsageByUserRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<PrintUsageByUser|null>
     * @throws Exception
    */
    public function post(PrintUsageByUser $body, ?DailyPrintUsageByUserRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [PrintUsageByUser::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Retrieve a list of daily print usage summaries, grouped by user.
     * @param DailyPrintUsageByUserRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?DailyPrintUsageByUserRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to dailyPrintUsageByUser for reports
     * @param PrintUsageByUser $body The request body
     * @param DailyPrintUsageByUserRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(PrintUsageByUser $body, ?DailyPrintUsageByUserRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return DailyPrintUsageByUserRequestBuilder
    */
    public function withUrl(string $rawUrl): DailyPrintUsageByUserRequestBuilder {
        return new DailyPrintUsageByUserRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
