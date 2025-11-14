<?php

namespace Microsoft\Graph\Generated\Education\Classes\Item\AssignmentSettings\DefaultGradingScheme;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\EducationGradingScheme;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the defaultGradingScheme property of the microsoft.graph.educationAssignmentSettings entity.
*/
class DefaultGradingSchemeRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new DefaultGradingSchemeRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/education/classes/{educationClass%2Did}/assignmentSettings/defaultGradingScheme{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * The default grading scheme for assignments created in this class.
     * @param DefaultGradingSchemeRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<EducationGradingScheme|null>
     * @throws Exception
    */
    public function get(?DefaultGradingSchemeRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [EducationGradingScheme::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * The default grading scheme for assignments created in this class.
     * @param DefaultGradingSchemeRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?DefaultGradingSchemeRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return DefaultGradingSchemeRequestBuilder
    */
    public function withUrl(string $rawUrl): DefaultGradingSchemeRequestBuilder {
        return new DefaultGradingSchemeRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
