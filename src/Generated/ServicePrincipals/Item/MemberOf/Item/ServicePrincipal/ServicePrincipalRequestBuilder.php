<?php

namespace Microsoft\Graph\Generated\ServicePrincipals\Item\MemberOf\Item\ServicePrincipal;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\ServicePrincipal;
use Microsoft\Graph\Generated\ServicePrincipals\Item\MemberOf\Item\ServicePrincipal\AddKey\AddKeyRequestBuilder;
use Microsoft\Graph\Generated\ServicePrincipals\Item\MemberOf\Item\ServicePrincipal\AddPassword\AddPasswordRequestBuilder;
use Microsoft\Graph\Generated\ServicePrincipals\Item\MemberOf\Item\ServicePrincipal\AddTokenSigningCertificate\AddTokenSigningCertificateRequestBuilder;
use Microsoft\Graph\Generated\ServicePrincipals\Item\MemberOf\Item\ServicePrincipal\CheckMemberGroups\CheckMemberGroupsRequestBuilder;
use Microsoft\Graph\Generated\ServicePrincipals\Item\MemberOf\Item\ServicePrincipal\CheckMemberObjects\CheckMemberObjectsRequestBuilder;
use Microsoft\Graph\Generated\ServicePrincipals\Item\MemberOf\Item\ServicePrincipal\GetMemberGroups\GetMemberGroupsRequestBuilder;
use Microsoft\Graph\Generated\ServicePrincipals\Item\MemberOf\Item\ServicePrincipal\GetMemberObjects\GetMemberObjectsRequestBuilder;
use Microsoft\Graph\Generated\ServicePrincipals\Item\MemberOf\Item\ServicePrincipal\RemoveKey\RemoveKeyRequestBuilder;
use Microsoft\Graph\Generated\ServicePrincipals\Item\MemberOf\Item\ServicePrincipal\RemovePassword\RemovePasswordRequestBuilder;
use Microsoft\Graph\Generated\ServicePrincipals\Item\MemberOf\Item\ServicePrincipal\Restore\RestoreRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\RequestOption;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

class ServicePrincipalRequestBuilder 
{
    /**
     * The addKey property
    */
    public function addKey(): AddKeyRequestBuilder {
        return new AddKeyRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The addPassword property
    */
    public function addPassword(): AddPasswordRequestBuilder {
        return new AddPasswordRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The addTokenSigningCertificate property
    */
    public function addTokenSigningCertificate(): AddTokenSigningCertificateRequestBuilder {
        return new AddTokenSigningCertificateRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The checkMemberGroups property
    */
    public function checkMemberGroups(): CheckMemberGroupsRequestBuilder {
        return new CheckMemberGroupsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The checkMemberObjects property
    */
    public function checkMemberObjects(): CheckMemberObjectsRequestBuilder {
        return new CheckMemberObjectsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The getMemberGroups property
    */
    public function getMemberGroups(): GetMemberGroupsRequestBuilder {
        return new GetMemberGroupsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The getMemberObjects property
    */
    public function getMemberObjects(): GetMemberObjectsRequestBuilder {
        return new GetMemberObjectsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var array<string, mixed> $pathParameters Path parameters for the request
    */
    private array $pathParameters;
    
    /**
     * The removeKey property
    */
    public function removeKey(): RemoveKeyRequestBuilder {
        return new RemoveKeyRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The removePassword property
    */
    public function removePassword(): RemovePasswordRequestBuilder {
        return new RemovePasswordRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    private RequestAdapter $requestAdapter;
    
    /**
     * The restore property
    */
    public function restore(): RestoreRequestBuilder {
        return new RestoreRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
    /**
     * Instantiates a new ServicePrincipalRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/servicePrincipals/{servicePrincipal%2Did}/memberOf/{directoryObject%2Did}/microsoft.graph.servicePrincipal{?%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Get the item of type microsoft.graph.directoryObject as microsoft.graph.servicePrincipal
     * @param array<string, mixed>|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createGetRequestInformation(?ServicePrincipalRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->headers = array_merge($requestInfo->headers, $requestConfiguration->headers);
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
     * Get the item of type microsoft.graph.directoryObject as microsoft.graph.servicePrincipal
     * @param array<string, mixed>|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?ServicePrincipalRequestBuilderGetRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
            '4XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            '5XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            ];
            return $this->requestAdapter->sendAsync($requestInfo, array(ServicePrincipal::class, 'createFromDiscriminatorValue'), $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

}
