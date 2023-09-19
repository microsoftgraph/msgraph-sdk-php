<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class ObjectIdentity implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new objectIdentity and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ObjectIdentity
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ObjectIdentity {
        return new ObjectIdentity();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
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
     * Gets the backingStore property value. Stores model information.
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
            'issuer' => fn(ParseNode $n) => $o->setIssuer($n->getStringValue()),
            'issuerAssignedId' => fn(ParseNode $n) => $o->setIssuerAssignedId($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'signInType' => fn(ParseNode $n) => $o->setSignInType($n->getStringValue()),
        ];
    }

    /**
     * Gets the issuer property value. Specifies the issuer of the identity, for example facebook.com.For local accounts (where signInType isn't federated), this property is the local B2C tenant default domain name, for example contoso.onmicrosoft.com.For external users from other Azure AD organization, this is the domain of the federated organization, for example contoso.com.Supports $filter. 512 character limit.
     * @return string|null
    */
    public function getIssuer(): ?string {
        $val = $this->getBackingStore()->get('issuer');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'issuer'");
    }

    /**
     * Gets the issuerAssignedId property value. Specifies the unique identifier assigned to the user by the issuer. The combination of issuer and issuerAssignedId must be unique within the organization. Represents the sign-in name for the user, when signInType is set to emailAddress or userName (also known as local accounts).When signInType is set to: emailAddress, (or a custom string that starts with emailAddress like emailAddress1) issuerAssignedId must be a valid email addressuserName, issuerAssignedId must begin with alphabetical character or number, and can only contain alphanumeric characters and the following symbols: - or Supports $filter. 64 character limit.
     * @return string|null
    */
    public function getIssuerAssignedId(): ?string {
        $val = $this->getBackingStore()->get('issuerAssignedId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'issuerAssignedId'");
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
     * Gets the signInType property value. Specifies the user sign-in types in your directory, such as emailAddress, userName, federated, or userPrincipalName. federated represents a unique identifier for a user from an issuer, that can be in any format chosen by the issuer. Setting or updating a userPrincipalName identity will update the value of the userPrincipalName property on the user object. The validations performed on the userPrincipalName property on the user object, for example, verified domains and acceptable characters, will be performed when setting or updating a userPrincipalName identity. Other validation is enforced on issuerAssignedId when the sign-in type is set to emailAddress or userName. This property can also be set to any custom string.
     * @return string|null
    */
    public function getSignInType(): ?string {
        $val = $this->getBackingStore()->get('signInType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'signInType'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('issuer', $this->getIssuer());
        $writer->writeStringValue('issuerAssignedId', $this->getIssuerAssignedId());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('signInType', $this->getSignInType());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the additionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the backingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the issuer property value. Specifies the issuer of the identity, for example facebook.com.For local accounts (where signInType isn't federated), this property is the local B2C tenant default domain name, for example contoso.onmicrosoft.com.For external users from other Azure AD organization, this is the domain of the federated organization, for example contoso.com.Supports $filter. 512 character limit.
     * @param string|null $value Value to set for the issuer property.
    */
    public function setIssuer(?string $value): void {
        $this->getBackingStore()->set('issuer', $value);
    }

    /**
     * Sets the issuerAssignedId property value. Specifies the unique identifier assigned to the user by the issuer. The combination of issuer and issuerAssignedId must be unique within the organization. Represents the sign-in name for the user, when signInType is set to emailAddress or userName (also known as local accounts).When signInType is set to: emailAddress, (or a custom string that starts with emailAddress like emailAddress1) issuerAssignedId must be a valid email addressuserName, issuerAssignedId must begin with alphabetical character or number, and can only contain alphanumeric characters and the following symbols: - or Supports $filter. 64 character limit.
     * @param string|null $value Value to set for the issuerAssignedId property.
    */
    public function setIssuerAssignedId(?string $value): void {
        $this->getBackingStore()->set('issuerAssignedId', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the signInType property value. Specifies the user sign-in types in your directory, such as emailAddress, userName, federated, or userPrincipalName. federated represents a unique identifier for a user from an issuer, that can be in any format chosen by the issuer. Setting or updating a userPrincipalName identity will update the value of the userPrincipalName property on the user object. The validations performed on the userPrincipalName property on the user object, for example, verified domains and acceptable characters, will be performed when setting or updating a userPrincipalName identity. Other validation is enforced on issuerAssignedId when the sign-in type is set to emailAddress or userName. This property can also be set to any custom string.
     * @param string|null $value Value to set for the signInType property.
    */
    public function setSignInType(?string $value): void {
        $this->getBackingStore()->set('signInType', $value);
    }

}
