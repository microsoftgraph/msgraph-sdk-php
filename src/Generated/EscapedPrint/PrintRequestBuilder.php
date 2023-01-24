<?php

namespace Microsoft\Graph\Generated\EscapedPrint;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Generated\EscapedPrint\Connectors\ConnectorsRequestBuilder;
use Microsoft\Graph\Generated\EscapedPrint\Connectors\Item\PrintConnectorItemRequestBuilder;
use Microsoft\Graph\Generated\EscapedPrint\Operations\Item\PrintOperationItemRequestBuilder;
use Microsoft\Graph\Generated\EscapedPrint\Operations\OperationsRequestBuilder;
use Microsoft\Graph\Generated\EscapedPrint\Printers\Item\PrinterItemRequestBuilder;
use Microsoft\Graph\Generated\EscapedPrint\Printers\PrintersRequestBuilder;
use Microsoft\Graph\Generated\EscapedPrint\Services\Item\PrintServiceItemRequestBuilder;
use Microsoft\Graph\Generated\EscapedPrint\Services\ServicesRequestBuilder;
use Microsoft\Graph\Generated\EscapedPrint\Shares\Item\PrinterShareItemRequestBuilder;
use Microsoft\Graph\Generated\EscapedPrint\Shares\SharesRequestBuilder;
use Microsoft\Graph\Generated\EscapedPrint\TaskDefinitions\Item\PrintTaskDefinitionItemRequestBuilder;
use Microsoft\Graph\Generated\EscapedPrint\TaskDefinitions\TaskDefinitionsRequestBuilder;
use Microsoft\Graph\Generated\Models\EscapedPrint;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

/**
 * Provides operations to manage the print singleton.
*/
class PrintRequestBuilder 
{
    /**
     * Provides operations to manage the connectors property of the microsoft.graph.print entity.
    */
    public function connectors(): ConnectorsRequestBuilder {
        return new ConnectorsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the operations property of the microsoft.graph.print entity.
    */
    public function operations(): OperationsRequestBuilder {
        return new OperationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var array<string, mixed> $pathParameters Path parameters for the request
    */
    private array $pathParameters;
    
    /**
     * Provides operations to manage the printers property of the microsoft.graph.print entity.
    */
    public function printers(): PrintersRequestBuilder {
        return new PrintersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    private RequestAdapter $requestAdapter;
    
    /**
     * Provides operations to manage the services property of the microsoft.graph.print entity.
    */
    public function services(): ServicesRequestBuilder {
        return new ServicesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the shares property of the microsoft.graph.print entity.
    */
    public function shares(): SharesRequestBuilder {
        return new SharesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the taskDefinitions property of the microsoft.graph.print entity.
    */
    public function taskDefinitions(): TaskDefinitionsRequestBuilder {
        return new TaskDefinitionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
    /**
     * Provides operations to manage the connectors property of the microsoft.graph.print entity.
     * @param string $id Unique identifier of the item
     * @return PrintConnectorItemRequestBuilder
    */
    public function connectorsById(string $id): PrintConnectorItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['printConnector%2Did'] = $id;
        return new PrintConnectorItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new PrintRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/print{?%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Get print
     * @param PrintRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function get(?PrintRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [EscapedPrint::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Provides operations to manage the operations property of the microsoft.graph.print entity.
     * @param string $id Unique identifier of the item
     * @return PrintOperationItemRequestBuilder
    */
    public function operationsById(string $id): PrintOperationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['printOperation%2Did'] = $id;
        return new PrintOperationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Update print
     * @param EscapedPrint $body The request body
     * @param PrintRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function patch(EscapedPrint $body, ?PrintRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [EscapedPrint::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Provides operations to manage the printers property of the microsoft.graph.print entity.
     * @param string $id Unique identifier of the item
     * @return PrinterItemRequestBuilder
    */
    public function printersById(string $id): PrinterItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['printer%2Did'] = $id;
        return new PrinterItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the services property of the microsoft.graph.print entity.
     * @param string $id Unique identifier of the item
     * @return PrintServiceItemRequestBuilder
    */
    public function servicesById(string $id): PrintServiceItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['printService%2Did'] = $id;
        return new PrintServiceItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the shares property of the microsoft.graph.print entity.
     * @param string $id Unique identifier of the item
     * @return PrinterShareItemRequestBuilder
    */
    public function sharesById(string $id): PrinterShareItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['printerShare%2Did'] = $id;
        return new PrinterShareItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the taskDefinitions property of the microsoft.graph.print entity.
     * @param string $id Unique identifier of the item
     * @return PrintTaskDefinitionItemRequestBuilder
    */
    public function taskDefinitionsById(string $id): PrintTaskDefinitionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['printTaskDefinition%2Did'] = $id;
        return new PrintTaskDefinitionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Get print
     * @param PrintRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?PrintRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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

    /**
     * Update print
     * @param EscapedPrint $body The request body
     * @param PrintRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(EscapedPrint $body, ?PrintRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->addHeaders($requestConfiguration->headers);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

}
