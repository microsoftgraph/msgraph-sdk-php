<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class ApiApplication implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new ApiApplication and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
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
        $val = $this->getBackingStore()->get('acceptMappedClaims');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'acceptMappedClaims'");
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        $val = $this->getBackingStore()->get('additionalData');
        if (is_null($val) || is_array($val)) {
            /** @var array<string, mixed>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalData'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'acceptMappedClaims' => fn(ParseNode $n) => $o->setAcceptMappedClaims($n->getBooleanValue()),
            'knownClientApplications' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setKnownClientApplications($val);
            },
            'oauth2PermissionScopes' => fn(ParseNode $n) => $o->setOauth2PermissionScopes($n->getCollectionOfObjectValues([PermissionScope::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'preAuthorizedApplications' => fn(ParseNode $n) => $o->setPreAuthorizedApplications($n->getCollectionOfObjectValues([PreAuthorizedApplication::class, 'createFromDiscriminatorValue'])),
            'requestedAccessTokenVersion' => fn(ParseNode $n) => $o->setRequestedAccessTokenVersion($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the knownClientApplications property value. Used for bundling consent if you have a solution that contains two parts: a client app and a custom web API app. If you set the appID of the client app to this value, the user only consents once to the client app. Microsoft Entra ID knows that consenting to the client means implicitly consenting to the web API and automatically provisions service principals for both APIs at the same time. Both the client and the web API app must be registered in the same tenant.
     * @return array<string>|null
    */
    public function getKnownClientApplications(): ?array {
        $val = $this->getBackingStore()->get('knownClientApplications');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'knownClientApplications'");
    }

    /**
     * Gets the oauth2PermissionScopes property value. The definition of the delegated permissions exposed by the web API represented by this application registration. These delegated permissions may be requested by a client application, and may be granted by users or administrators during consent. Delegated permissions are sometimes referred to as OAuth 2.0 scopes.
     * @return array<PermissionScope>|null
    */
    public function getOauth2PermissionScopes(): ?array {
        $val = $this->getBackingStore()->get('oauth2PermissionScopes');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, PermissionScope::class);
            /** @var array<PermissionScope>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'oauth2PermissionScopes'");
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Gets the preAuthorizedApplications property value. Lists the client applications that are preauthorized with the specified delegated permissions to access this application's APIs. Users aren't required to consent to any preauthorized application (for the permissions specified). However, any other permissions not listed in preAuthorizedApplications (requested through incremental consent for example) will require user consent.
     * @return array<PreAuthorizedApplication>|null
    */
    public function getPreAuthorizedApplications(): ?array {
        $val = $this->getBackingStore()->get('preAuthorizedApplications');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, PreAuthorizedApplication::class);
            /** @var array<PreAuthorizedApplication>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'preAuthorizedApplications'");
    }

    /**
     * Gets the requestedAccessTokenVersion property value. Specifies the access token version expected by this resource. This changes the version and format of the JWT produced independent of the endpoint or client used to request the access token.  The endpoint used, v1.0 or v2.0, is chosen by the client and only impacts the version of id_tokens. Resources need to explicitly configure requestedAccessTokenVersion to indicate the supported access token format.  Possible values for requestedAccessTokenVersion are 1, 2, or null. If the value is null, this defaults to 1, which corresponds to the v1.0 endpoint.  If signInAudience on the application is configured as AzureADandPersonalMicrosoftAccount or PersonalMicrosoftAccount, the value for this property must be 2.
     * @return int|null
    */
    public function getRequestedAccessTokenVersion(): ?int {
        $val = $this->getBackingStore()->get('requestedAccessTokenVersion');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'requestedAccessTokenVersion'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('acceptMappedClaims', $this->getAcceptMappedClaims());
        $writer->writeCollectionOfPrimitiveValues('knownClientApplications', $this->getKnownClientApplications());
        $writer->writeCollectionOfObjectValues('oauth2PermissionScopes', $this->getOauth2PermissionScopes());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeCollectionOfObjectValues('preAuthorizedApplications', $this->getPreAuthorizedApplications());
        $writer->writeIntegerValue('requestedAccessTokenVersion', $this->getRequestedAccessTokenVersion());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the acceptMappedClaims property value. When true, allows an application to use claims mapping without specifying a custom signing key.
     * @param bool|null $value Value to set for the acceptMappedClaims property.
    */
    public function setAcceptMappedClaims(?bool $value): void {
        $this->getBackingStore()->set('acceptMappedClaims', $value);
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the knownClientApplications property value. Used for bundling consent if you have a solution that contains two parts: a client app and a custom web API app. If you set the appID of the client app to this value, the user only consents once to the client app. Microsoft Entra ID knows that consenting to the client means implicitly consenting to the web API and automatically provisions service principals for both APIs at the same time. Both the client and the web API app must be registered in the same tenant.
     * @param array<string>|null $value Value to set for the knownClientApplications property.
    */
    public function setKnownClientApplications(?array $value): void {
        $this->getBackingStore()->set('knownClientApplications', $value);
    }

    /**
     * Sets the oauth2PermissionScopes property value. The definition of the delegated permissions exposed by the web API represented by this application registration. These delegated permissions may be requested by a client application, and may be granted by users or administrators during consent. Delegated permissions are sometimes referred to as OAuth 2.0 scopes.
     * @param array<PermissionScope>|null $value Value to set for the oauth2PermissionScopes property.
    */
    public function setOauth2PermissionScopes(?array $value): void {
        $this->getBackingStore()->set('oauth2PermissionScopes', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the preAuthorizedApplications property value. Lists the client applications that are preauthorized with the specified delegated permissions to access this application's APIs. Users aren't required to consent to any preauthorized application (for the permissions specified). However, any other permissions not listed in preAuthorizedApplications (requested through incremental consent for example) will require user consent.
     * @param array<PreAuthorizedApplication>|null $value Value to set for the preAuthorizedApplications property.
    */
    public function setPreAuthorizedApplications(?array $value): void {
        $this->getBackingStore()->set('preAuthorizedApplications', $value);
    }

    /**
     * Sets the requestedAccessTokenVersion property value. Specifies the access token version expected by this resource. This changes the version and format of the JWT produced independent of the endpoint or client used to request the access token.  The endpoint used, v1.0 or v2.0, is chosen by the client and only impacts the version of id_tokens. Resources need to explicitly configure requestedAccessTokenVersion to indicate the supported access token format.  Possible values for requestedAccessTokenVersion are 1, 2, or null. If the value is null, this defaults to 1, which corresponds to the v1.0 endpoint.  If signInAudience on the application is configured as AzureADandPersonalMicrosoftAccount or PersonalMicrosoftAccount, the value for this property must be 2.
     * @param int|null $value Value to set for the requestedAccessTokenVersion property.
    */
    public function setRequestedAccessTokenVersion(?int $value): void {
        $this->getBackingStore()->set('requestedAccessTokenVersion', $value);
    }

}
