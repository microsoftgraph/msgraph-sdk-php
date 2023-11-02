<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class PermissionScope implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new permissionScope and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PermissionScope
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PermissionScope {
        return new PermissionScope();
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
     * Gets the adminConsentDescription property value. A description of the delegated permissions, intended to be read by an administrator granting the permission on behalf of all users. This text appears in tenant-wide admin consent experiences.
     * @return string|null
    */
    public function getAdminConsentDescription(): ?string {
        $val = $this->getBackingStore()->get('adminConsentDescription');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'adminConsentDescription'");
    }

    /**
     * Gets the adminConsentDisplayName property value. The permission's title, intended to be read by an administrator granting the permission on behalf of all users.
     * @return string|null
    */
    public function getAdminConsentDisplayName(): ?string {
        $val = $this->getBackingStore()->get('adminConsentDisplayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'adminConsentDisplayName'");
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
            'adminConsentDescription' => fn(ParseNode $n) => $o->setAdminConsentDescription($n->getStringValue()),
            'adminConsentDisplayName' => fn(ParseNode $n) => $o->setAdminConsentDisplayName($n->getStringValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'isEnabled' => fn(ParseNode $n) => $o->setIsEnabled($n->getBooleanValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'origin' => fn(ParseNode $n) => $o->setOrigin($n->getStringValue()),
            'type' => fn(ParseNode $n) => $o->setType($n->getStringValue()),
            'userConsentDescription' => fn(ParseNode $n) => $o->setUserConsentDescription($n->getStringValue()),
            'userConsentDisplayName' => fn(ParseNode $n) => $o->setUserConsentDisplayName($n->getStringValue()),
            'value' => fn(ParseNode $n) => $o->setValue($n->getStringValue()),
        ];
    }

    /**
     * Gets the id property value. Unique delegated permission identifier inside the collection of delegated permissions defined for a resource application.
     * @return string|null
    */
    public function getId(): ?string {
        $val = $this->getBackingStore()->get('id');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'id'");
    }

    /**
     * Gets the isEnabled property value. When you create or update a permission, this property must be set to true (which is the default). To delete a permission, this property must first be set to false.  At that point, in a subsequent call, the permission may be removed.
     * @return bool|null
    */
    public function getIsEnabled(): ?bool {
        $val = $this->getBackingStore()->get('isEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isEnabled'");
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
     * Gets the origin property value. The origin property
     * @return string|null
    */
    public function getOrigin(): ?string {
        $val = $this->getBackingStore()->get('origin');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'origin'");
    }

    /**
     * Gets the type property value. The possible values are: User and Admin. Specifies whether this delegated permission should be considered safe for non-admin users to consent to on behalf of themselves, or whether an administrator consent should always be required. While Microsoft Graph defines the default consent requirement for each permission, the tenant administrator may override the behavior in their organization (by allowing, restricting, or limiting user consent to this delegated permission). For more information, see Configure how users consent to applications.
     * @return string|null
    */
    public function getType(): ?string {
        $val = $this->getBackingStore()->get('type');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'type'");
    }

    /**
     * Gets the userConsentDescription property value. A description of the delegated permissions, intended to be read by a user granting the permission on their own behalf. This text appears in consent experiences where the user is consenting only on behalf of themselves.
     * @return string|null
    */
    public function getUserConsentDescription(): ?string {
        $val = $this->getBackingStore()->get('userConsentDescription');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userConsentDescription'");
    }

    /**
     * Gets the userConsentDisplayName property value. A title for the permission, intended to be read by a user granting the permission on their own behalf. This text appears in consent experiences where the user is consenting only on behalf of themselves.
     * @return string|null
    */
    public function getUserConsentDisplayName(): ?string {
        $val = $this->getBackingStore()->get('userConsentDisplayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userConsentDisplayName'");
    }

    /**
     * Gets the value property value. Specifies the value to include in the scp (scope) claim in access tokens. Must not exceed 120 characters in length. Allowed characters are : ! # $ % & ' ( ) * + , - . / : ;  =  ? @ [ ] ^ + _  {  } ~, and characters in the ranges 0-9, A-Z and a-z. Any other character, including the space character, aren't allowed. May not begin with ..
     * @return string|null
    */
    public function getValue(): ?string {
        $val = $this->getBackingStore()->get('value');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'value'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('adminConsentDescription', $this->getAdminConsentDescription());
        $writer->writeStringValue('adminConsentDisplayName', $this->getAdminConsentDisplayName());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeBooleanValue('isEnabled', $this->getIsEnabled());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('origin', $this->getOrigin());
        $writer->writeStringValue('type', $this->getType());
        $writer->writeStringValue('userConsentDescription', $this->getUserConsentDescription());
        $writer->writeStringValue('userConsentDisplayName', $this->getUserConsentDisplayName());
        $writer->writeStringValue('value', $this->getValue());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the adminConsentDescription property value. A description of the delegated permissions, intended to be read by an administrator granting the permission on behalf of all users. This text appears in tenant-wide admin consent experiences.
     * @param string|null $value Value to set for the adminConsentDescription property.
    */
    public function setAdminConsentDescription(?string $value): void {
        $this->getBackingStore()->set('adminConsentDescription', $value);
    }

    /**
     * Sets the adminConsentDisplayName property value. The permission's title, intended to be read by an administrator granting the permission on behalf of all users.
     * @param string|null $value Value to set for the adminConsentDisplayName property.
    */
    public function setAdminConsentDisplayName(?string $value): void {
        $this->getBackingStore()->set('adminConsentDisplayName', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the id property value. Unique delegated permission identifier inside the collection of delegated permissions defined for a resource application.
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->getBackingStore()->set('id', $value);
    }

    /**
     * Sets the isEnabled property value. When you create or update a permission, this property must be set to true (which is the default). To delete a permission, this property must first be set to false.  At that point, in a subsequent call, the permission may be removed.
     * @param bool|null $value Value to set for the isEnabled property.
    */
    public function setIsEnabled(?bool $value): void {
        $this->getBackingStore()->set('isEnabled', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the origin property value. The origin property
     * @param string|null $value Value to set for the origin property.
    */
    public function setOrigin(?string $value): void {
        $this->getBackingStore()->set('origin', $value);
    }

    /**
     * Sets the type property value. The possible values are: User and Admin. Specifies whether this delegated permission should be considered safe for non-admin users to consent to on behalf of themselves, or whether an administrator consent should always be required. While Microsoft Graph defines the default consent requirement for each permission, the tenant administrator may override the behavior in their organization (by allowing, restricting, or limiting user consent to this delegated permission). For more information, see Configure how users consent to applications.
     * @param string|null $value Value to set for the type property.
    */
    public function setType(?string $value): void {
        $this->getBackingStore()->set('type', $value);
    }

    /**
     * Sets the userConsentDescription property value. A description of the delegated permissions, intended to be read by a user granting the permission on their own behalf. This text appears in consent experiences where the user is consenting only on behalf of themselves.
     * @param string|null $value Value to set for the userConsentDescription property.
    */
    public function setUserConsentDescription(?string $value): void {
        $this->getBackingStore()->set('userConsentDescription', $value);
    }

    /**
     * Sets the userConsentDisplayName property value. A title for the permission, intended to be read by a user granting the permission on their own behalf. This text appears in consent experiences where the user is consenting only on behalf of themselves.
     * @param string|null $value Value to set for the userConsentDisplayName property.
    */
    public function setUserConsentDisplayName(?string $value): void {
        $this->getBackingStore()->set('userConsentDisplayName', $value);
    }

    /**
     * Sets the value property value. Specifies the value to include in the scp (scope) claim in access tokens. Must not exceed 120 characters in length. Allowed characters are : ! # $ % & ' ( ) * + , - . / : ;  =  ? @ [ ] ^ + _  {  } ~, and characters in the ranges 0-9, A-Z and a-z. Any other character, including the space character, aren't allowed. May not begin with ..
     * @param string|null $value Value to set for the value property.
    */
    public function setValue(?string $value): void {
        $this->getBackingStore()->set('value', $value);
    }

}
