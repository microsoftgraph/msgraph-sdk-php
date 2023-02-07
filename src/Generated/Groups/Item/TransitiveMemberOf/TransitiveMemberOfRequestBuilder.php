<?php

namespace Microsoft\Graph\Generated\Groups\Item\TransitiveMemberOf;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Generated\Groups\Item\TransitiveMemberOf\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\TransitiveMemberOf\MicrosoftGraphApplication\MicrosoftGraphApplicationRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\TransitiveMemberOf\MicrosoftGraphDevice\MicrosoftGraphDeviceRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\TransitiveMemberOf\MicrosoftGraphGroup\MicrosoftGraphGroupRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\TransitiveMemberOf\MicrosoftGraphOrgContact\MicrosoftGraphOrgContactRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\TransitiveMemberOf\MicrosoftGraphServicePrincipal\MicrosoftGraphServicePrincipalRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\TransitiveMemberOf\MicrosoftGraphUser\MicrosoftGraphUserRequestBuilder;
use Microsoft\Graph\Generated\Models\DirectoryObjectCollectionResponse;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

/**
 * Provides operations to manage the transitiveMemberOf property of the microsoft.graph.group entity.
*/
class TransitiveMemberOfRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Casts the previous resource to application.
    */
    public function microsoftGraphApplication(): MicrosoftGraphApplicationRequestBuilder {
        return new MicrosoftGraphApplicationRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Casts the previous resource to device.
    */
    public function microsoftGraphDevice(): MicrosoftGraphDeviceRequestBuilder {
        return new MicrosoftGraphDeviceRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Casts the previous resource to group.
    */
    public function microsoftGraphGroup(): MicrosoftGraphGroupRequestBuilder {
        return new MicrosoftGraphGroupRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Casts the previous resource to orgContact.
    */
    public function microsoftGraphOrgContact(): MicrosoftGraphOrgContactRequestBuilder {
        return new MicrosoftGraphOrgContactRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Casts the previous resource to servicePrincipal.
    */
    public function microsoftGraphServicePrincipal(): MicrosoftGraphServicePrincipalRequestBuilder {
        return new MicrosoftGraphServicePrincipalRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Casts the previous resource to user.
    */
    public function microsoftGraphUser(): MicrosoftGraphUserRequestBuilder {
        return new MicrosoftGraphUserRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
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
     * Instantiates a new TransitiveMemberOfRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/groups/{group%2Did}/transitiveMemberOf{?%24top,%24skip,%24search,%24filter,%24count,%24orderby,%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * The groups that a group is a member of, either directly and through nested membership. Nullable.
     * @param TransitiveMemberOfRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
     * @link https://docs.microsoft.com/graph/api/group-list-transitivememberof?view=graph-rest-1.0 Find more info here
    */
    public function get(?TransitiveMemberOfRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [DirectoryObjectCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * The groups that a group is a member of, either directly and through nested membership. Nullable.
     * @param TransitiveMemberOfRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?TransitiveMemberOfRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
