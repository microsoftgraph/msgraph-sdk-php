<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ApiApplication implements AdditionalDataHolder, Parsable 
{
    /**
     * @var bool|null $acceptMappedClaims When true, allows an application to use claims mapping without specifying a custom signing key.
    */
    private ?bool $acceptMappedClaims = null;
    
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<string>|null $knownClientApplications Used for bundling consent if you have a solution that contains two parts: a client app and a custom web API app. If you set the appID of the client app to this value, the user only consents once to the client app. Azure AD knows that consenting to the client means implicitly consenting to the web API and automatically provisions service principals for both APIs at the same time. Both the client and the web API app must be registered in the same tenant.
    */
    private ?array $knownClientApplications = null;
    
    /**
     * @var array<PermissionScope>|null $oauth2PermissionScopes The definition of the delegated permissions exposed by the web API represented by this application registration. These delegated permissions may be requested by a client application, and may be granted by users or administrators during consent. Delegated permissions are sometimes referred to as OAuth 2.0 scopes.
    */
    private ?array $oauth2PermissionScopes = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var array<PreAuthorizedApplication>|null $preAuthorizedApplications Lists the client applications that are pre-authorized with the specified delegated permissions to access this application's APIs. Users are not required to consent to any pre-authorized application (for the permissions specified). However, any additional permissions not listed in preAuthorizedApplications (requested through incremental consent for example) will require user consent.
    */
    private ?array $preAuthorizedApplications = null;
    
    /**
     * @var int|null $requestedAccessTokenVersion Specifies the access token version expected by this resource. This changes the version and format of the JWT produced independent of the endpoint or client used to request the access token.  The endpoint used, v1.0 or v2.0, is chosen by the client and only impacts the version of id_tokens. Resources need to explicitly configure requestedAccessTokenVersion to indicate the supported access token format.  Possible values for requestedAccessTokenVersion are 1, 2, or null. If the value is null, this defaults to 1, which corresponds to the v1.0 endpoint.  If signInAudience on the application is configured as AzureADandPersonalMicrosoftAccount, the value for this property must be 2
    */
    private ?int $requestedAccessTokenVersion = null;
    
    /**
     * Instantiates a new apiApplication and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.apiApplication');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ApiApplication
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ApiApplication {
        return new ApiApplication();
    }

    /**
     * Gets the acceptMappedClaims property value. When true, allows an application to use claims mapping without specifying a custom signing key.
     * @return bool|null
    */
    public function getAcceptMappedClaims(): ?bool {
        return $this->acceptMappedClaims;
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'acceptMappedClaims' => function (ParseNode $n) use ($o) { $o->setAcceptMappedClaims($n->getBooleanValue()); },
            'knownClientApplications' => function (ParseNode $n) use ($o) { $o->setKnownClientApplications($n->getCollectionOfPrimitiveValues()); },
            'oauth2PermissionScopes' => function (ParseNode $n) use ($o) { $o->setOauth2PermissionScopes($n->getCollectionOfObjectValues(array(PermissionScope::class, 'createFromDiscriminatorValue'))); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'preAuthorizedApplications' => function (ParseNode $n) use ($o) { $o->setPreAuthorizedApplications($n->getCollectionOfObjectValues(array(PreAuthorizedApplication::class, 'createFromDiscriminatorValue'))); },
            'requestedAccessTokenVersion' => function (ParseNode $n) use ($o) { $o->setRequestedAccessTokenVersion($n->getIntegerValue()); },
        ];
    }

    /**
     * Gets the knownClientApplications property value. Used for bundling consent if you have a solution that contains two parts: a client app and a custom web API app. If you set the appID of the client app to this value, the user only consents once to the client app. Azure AD knows that consenting to the client means implicitly consenting to the web API and automatically provisions service principals for both APIs at the same time. Both the client and the web API app must be registered in the same tenant.
     * @return array<string>|null
    */
    public function getKnownClientApplications(): ?array {
        return $this->knownClientApplications;
    }

    /**
     * Gets the oauth2PermissionScopes property value. The definition of the delegated permissions exposed by the web API represented by this application registration. These delegated permissions may be requested by a client application, and may be granted by users or administrators during consent. Delegated permissions are sometimes referred to as OAuth 2.0 scopes.
     * @return array<PermissionScope>|null
    */
    public function getOauth2PermissionScopes(): ?array {
        return $this->oauth2PermissionScopes;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the preAuthorizedApplications property value. Lists the client applications that are pre-authorized with the specified delegated permissions to access this application's APIs. Users are not required to consent to any pre-authorized application (for the permissions specified). However, any additional permissions not listed in preAuthorizedApplications (requested through incremental consent for example) will require user consent.
     * @return array<PreAuthorizedApplication>|null
    */
    public function getPreAuthorizedApplications(): ?array {
        return $this->preAuthorizedApplications;
    }

    /**
     * Gets the requestedAccessTokenVersion property value. Specifies the access token version expected by this resource. This changes the version and format of the JWT produced independent of the endpoint or client used to request the access token.  The endpoint used, v1.0 or v2.0, is chosen by the client and only impacts the version of id_tokens. Resources need to explicitly configure requestedAccessTokenVersion to indicate the supported access token format.  Possible values for requestedAccessTokenVersion are 1, 2, or null. If the value is null, this defaults to 1, which corresponds to the v1.0 endpoint.  If signInAudience on the application is configured as AzureADandPersonalMicrosoftAccount, the value for this property must be 2
     * @return int|null
    */
    public function getRequestedAccessTokenVersion(): ?int {
        return $this->requestedAccessTokenVersion;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('acceptMappedClaims', $this->acceptMappedClaims);
        $writer->writeCollectionOfPrimitiveValues('knownClientApplications', $this->knownClientApplications);
        $writer->writeCollectionOfObjectValues('oauth2PermissionScopes', $this->oauth2PermissionScopes);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeCollectionOfObjectValues('preAuthorizedApplications', $this->preAuthorizedApplications);
        $writer->writeIntegerValue('requestedAccessTokenVersion', $this->requestedAccessTokenVersion);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the acceptMappedClaims property value. When true, allows an application to use claims mapping without specifying a custom signing key.
     *  @param bool|null $value Value to set for the acceptMappedClaims property.
    */
    public function setAcceptMappedClaims(?bool $value ): void {
        $this->acceptMappedClaims = $value;
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the knownClientApplications property value. Used for bundling consent if you have a solution that contains two parts: a client app and a custom web API app. If you set the appID of the client app to this value, the user only consents once to the client app. Azure AD knows that consenting to the client means implicitly consenting to the web API and automatically provisions service principals for both APIs at the same time. Both the client and the web API app must be registered in the same tenant.
     *  @param array<string>|null $value Value to set for the knownClientApplications property.
    */
    public function setKnownClientApplications(?array $value ): void {
        $this->knownClientApplications = $value;
    }

    /**
     * Sets the oauth2PermissionScopes property value. The definition of the delegated permissions exposed by the web API represented by this application registration. These delegated permissions may be requested by a client application, and may be granted by users or administrators during consent. Delegated permissions are sometimes referred to as OAuth 2.0 scopes.
     *  @param array<PermissionScope>|null $value Value to set for the oauth2PermissionScopes property.
    */
    public function setOauth2PermissionScopes(?array $value ): void {
        $this->oauth2PermissionScopes = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the preAuthorizedApplications property value. Lists the client applications that are pre-authorized with the specified delegated permissions to access this application's APIs. Users are not required to consent to any pre-authorized application (for the permissions specified). However, any additional permissions not listed in preAuthorizedApplications (requested through incremental consent for example) will require user consent.
     *  @param array<PreAuthorizedApplication>|null $value Value to set for the preAuthorizedApplications property.
    */
    public function setPreAuthorizedApplications(?array $value ): void {
        $this->preAuthorizedApplications = $value;
    }

    /**
     * Sets the requestedAccessTokenVersion property value. Specifies the access token version expected by this resource. This changes the version and format of the JWT produced independent of the endpoint or client used to request the access token.  The endpoint used, v1.0 or v2.0, is chosen by the client and only impacts the version of id_tokens. Resources need to explicitly configure requestedAccessTokenVersion to indicate the supported access token format.  Possible values for requestedAccessTokenVersion are 1, 2, or null. If the value is null, this defaults to 1, which corresponds to the v1.0 endpoint.  If signInAudience on the application is configured as AzureADandPersonalMicrosoftAccount, the value for this property must be 2
     *  @param int|null $value Value to set for the requestedAccessTokenVersion property.
    */
    public function setRequestedAccessTokenVersion(?int $value ): void {
        $this->requestedAccessTokenVersion = $value;
    }

}
