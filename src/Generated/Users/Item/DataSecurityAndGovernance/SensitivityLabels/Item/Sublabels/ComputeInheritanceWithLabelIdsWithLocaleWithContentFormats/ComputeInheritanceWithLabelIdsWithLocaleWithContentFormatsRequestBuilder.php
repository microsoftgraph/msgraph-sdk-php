<?php

namespace Microsoft\\Graph\\Generated\Users\Item\DataSecurityAndGovernance\SensitivityLabels\Item\Sublabels\ComputeInheritanceWithLabelIdsWithLocaleWithContentFormats;

use Exception;
use Http\Promise\Promise;
use Microsoft\\Graph\\Generated\Models\ODataErrors\ODataError;
use Microsoft\\Graph\\Generated\Models\SensitivityLabel;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the computeInheritance method.
*/
class ComputeInheritanceWithLabelIdsWithLocaleWithContentFormatsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new ComputeInheritanceWithLabelIdsWithLocaleWithContentFormatsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
     * @param string|null $contentFormats Usage: contentFormats={contentFormats}
     * @param string|null $labelIds Usage: labelIds={labelIds}
     * @param string|null $locale Usage: locale='{locale}'
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter, ?string $contentFormats = null, ?string $labelIds = null, ?string $locale = null) {
        parent::__construct($requestAdapter, [], '{+baseurl}/users/{user%2Did}/dataSecurityAndGovernance/sensitivityLabels/{sensitivityLabel%2Did}/sublabels/computeInheritance(labelIds={labelIds},locale=\'{locale}\',contentFormats={contentFormats})');
        if (is_array($pathParametersOrRawUrl)) {
            $urlTplParams = $pathParametersOrRawUrl;
            $urlTplParams['contentFormats'] = $contentFormats;
            $urlTplParams['labelIds'] = $labelIds;
            $urlTplParams['locale'] = $locale;
            $this->pathParameters = $urlTplParams;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Calculate the sensitivity label that should be inherited by an output artifact, given a set of sensitivity labels from input or referenced artifacts.
     * @param ComputeInheritanceWithLabelIdsWithLocaleWithContentFormatsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<SensitivityLabel|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/sensitivitylabel-computeinheritance?view=graph-rest-1.0 Find more info here
    */
    public function get(?ComputeInheritanceWithLabelIdsWithLocaleWithContentFormatsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [SensitivityLabel::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Calculate the sensitivity label that should be inherited by an output artifact, given a set of sensitivity labels from input or referenced artifacts.
     * @param ComputeInheritanceWithLabelIdsWithLocaleWithContentFormatsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ComputeInheritanceWithLabelIdsWithLocaleWithContentFormatsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return ComputeInheritanceWithLabelIdsWithLocaleWithContentFormatsRequestBuilder
    */
    public function withUrl(string $rawUrl): ComputeInheritanceWithLabelIdsWithLocaleWithContentFormatsRequestBuilder {
        return new ComputeInheritanceWithLabelIdsWithLocaleWithContentFormatsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
