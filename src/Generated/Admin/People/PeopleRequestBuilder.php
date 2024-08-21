<?php

namespace Microsoft\Graph\Generated\Admin\People;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Admin\People\ItemInsights\ItemInsightsRequestBuilder;
use Microsoft\Graph\Generated\Admin\People\ProfileCardProperties\ProfileCardPropertiesRequestBuilder;
use Microsoft\Graph\Generated\Admin\People\Pronouns\PronounsRequestBuilder;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\PeopleAdminSettings;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the people property of the microsoft.graph.admin entity.
*/
class PeopleRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the itemInsights property of the microsoft.graph.peopleAdminSettings entity.
    */
    public function itemInsights(): ItemInsightsRequestBuilder {
        return new ItemInsightsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the profileCardProperties property of the microsoft.graph.peopleAdminSettings entity.
    */
    public function profileCardProperties(): ProfileCardPropertiesRequestBuilder {
        return new ProfileCardPropertiesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the pronouns property of the microsoft.graph.peopleAdminSettings entity.
    */
    public function pronouns(): PronounsRequestBuilder {
        return new PronounsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new PeopleRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/admin/people{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Retrieve the properties and relationships of a peopleAdminSettings object.
     * @param PeopleRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<PeopleAdminSettings|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/peopleadminsettings-get?view=graph-rest-1.0 Find more info here
    */
    public function get(?PeopleRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [PeopleAdminSettings::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Retrieve the properties and relationships of a peopleAdminSettings object.
     * @param PeopleRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?PeopleRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return PeopleRequestBuilder
    */
    public function withUrl(string $rawUrl): PeopleRequestBuilder {
        return new PeopleRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
