<?php

namespace Microsoft\Graph\Generated\EscapedPrint\Printers\Item\TaskTriggers;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\EscapedPrint\Printers\Item\TaskTriggers\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\EscapedPrint\Printers\Item\TaskTriggers\Item\PrintTaskTriggerItemRequestBuilder;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\PrintTaskTrigger;
use Microsoft\Graph\Generated\Models\PrintTaskTriggerCollectionResponse;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the taskTriggers property of the microsoft.graph.printer entity.
*/
class TaskTriggersRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the taskTriggers property of the microsoft.graph.printer entity.
     * @param string $printTaskTriggerId The unique identifier of printTaskTrigger
     * @return PrintTaskTriggerItemRequestBuilder
    */
    public function byPrintTaskTriggerId(string $printTaskTriggerId): PrintTaskTriggerItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['printTaskTrigger%2Did'] = $printTaskTriggerId;
        return new PrintTaskTriggerItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new TaskTriggersRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/print/printers/{printer%2Did}/taskTriggers{?%24top,%24skip,%24search,%24filter,%24count,%24orderby,%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Retrieve a list of task triggers associated with the printer. The list of task triggers defines which tasks will be triggered as a result of events that occur during printing. For details about how to use this API to add pull printing support to Universal Print, see Extending Universal Print to support pull printing.
     * @param TaskTriggersRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<PrintTaskTriggerCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/printer-list-tasktriggers?view=graph-rest-1.0 Find more info here
    */
    public function get(?TaskTriggersRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [PrintTaskTriggerCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create a new task trigger on the specified printer. Currently, only one task trigger can be specified per printer, but this limit might be removed in the future. 
     * @param PrintTaskTrigger $body The request body
     * @param TaskTriggersRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<PrintTaskTrigger|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/printer-post-tasktriggers?view=graph-rest-1.0 Find more info here
    */
    public function post(PrintTaskTrigger $body, ?TaskTriggersRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [PrintTaskTrigger::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Retrieve a list of task triggers associated with the printer. The list of task triggers defines which tasks will be triggered as a result of events that occur during printing. For details about how to use this API to add pull printing support to Universal Print, see Extending Universal Print to support pull printing.
     * @param TaskTriggersRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?TaskTriggersRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create a new task trigger on the specified printer. Currently, only one task trigger can be specified per printer, but this limit might be removed in the future. 
     * @param PrintTaskTrigger $body The request body
     * @param TaskTriggersRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(PrintTaskTrigger $body, ?TaskTriggersRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return TaskTriggersRequestBuilder
    */
    public function withUrl(string $rawUrl): TaskTriggersRequestBuilder {
        return new TaskTriggersRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
