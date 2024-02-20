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

class DefaultUserRolePermissions implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new DefaultUserRolePermissions and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DefaultUserRolePermissions
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DefaultUserRolePermissions {
        return new DefaultUserRolePermissions();
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
     * Gets the allowedToCreateApps property value. Indicates whether the default user role can create applications. This setting corresponds to the Users can register applications setting in the User settings menu in the Microsoft Entra admin center.
     * @return bool|null
    */
    public function getAllowedToCreateApps(): ?bool {
        $val = $this->getBackingStore()->get('allowedToCreateApps');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowedToCreateApps'");
    }

    /**
     * Gets the allowedToCreateSecurityGroups property value. Indicates whether the default user role can create security groups. This setting corresponds to the following menus in the Microsoft Entra admin center:  The Users can create security groups in Microsoft Entra admin centers, API or PowerShell setting in the Group settings menu.  Users can create security groups setting in the User settings menu.
     * @return bool|null
    */
    public function getAllowedToCreateSecurityGroups(): ?bool {
        $val = $this->getBackingStore()->get('allowedToCreateSecurityGroups');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowedToCreateSecurityGroups'");
    }

    /**
     * Gets the allowedToCreateTenants property value. Indicates whether the default user role can create tenants. This setting corresponds to the Restrict non-admin users from creating tenants setting in the User settings menu in the Microsoft Entra admin center.  When this setting is false, users assigned the Tenant Creator role can still create tenants.
     * @return bool|null
    */
    public function getAllowedToCreateTenants(): ?bool {
        $val = $this->getBackingStore()->get('allowedToCreateTenants');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowedToCreateTenants'");
    }

    /**
     * Gets the allowedToReadBitlockerKeysForOwnedDevice property value. Indicates whether the registered owners of a device can read their own BitLocker recovery keys with default user role.
     * @return bool|null
    */
    public function getAllowedToReadBitlockerKeysForOwnedDevice(): ?bool {
        $val = $this->getBackingStore()->get('allowedToReadBitlockerKeysForOwnedDevice');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowedToReadBitlockerKeysForOwnedDevice'");
    }

    /**
     * Gets the allowedToReadOtherUsers property value. Indicates whether the default user role can read other users. DO NOT SET THIS VALUE TO false.
     * @return bool|null
    */
    public function getAllowedToReadOtherUsers(): ?bool {
        $val = $this->getBackingStore()->get('allowedToReadOtherUsers');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowedToReadOtherUsers'");
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
            'allowedToCreateApps' => fn(ParseNode $n) => $o->setAllowedToCreateApps($n->getBooleanValue()),
            'allowedToCreateSecurityGroups' => fn(ParseNode $n) => $o->setAllowedToCreateSecurityGroups($n->getBooleanValue()),
            'allowedToCreateTenants' => fn(ParseNode $n) => $o->setAllowedToCreateTenants($n->getBooleanValue()),
            'allowedToReadBitlockerKeysForOwnedDevice' => fn(ParseNode $n) => $o->setAllowedToReadBitlockerKeysForOwnedDevice($n->getBooleanValue()),
            'allowedToReadOtherUsers' => fn(ParseNode $n) => $o->setAllowedToReadOtherUsers($n->getBooleanValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'permissionGrantPoliciesAssigned' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setPermissionGrantPoliciesAssigned($val);
            },
        ];
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
     * Gets the permissionGrantPoliciesAssigned property value. Indicates if user consent to apps is allowed, and if it is, which permission to grant consent and which app consent policy (permissionGrantPolicy) govern the permission for users to grant consent. Value should be in the format managePermissionGrantsForSelf.{id}, where {id} is the id of a built-in or custom app consent policy. An empty list indicates user consent to apps is disabled.
     * @return array<string>|null
    */
    public function getPermissionGrantPoliciesAssigned(): ?array {
        $val = $this->getBackingStore()->get('permissionGrantPoliciesAssigned');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'permissionGrantPoliciesAssigned'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('allowedToCreateApps', $this->getAllowedToCreateApps());
        $writer->writeBooleanValue('allowedToCreateSecurityGroups', $this->getAllowedToCreateSecurityGroups());
        $writer->writeBooleanValue('allowedToCreateTenants', $this->getAllowedToCreateTenants());
        $writer->writeBooleanValue('allowedToReadBitlockerKeysForOwnedDevice', $this->getAllowedToReadBitlockerKeysForOwnedDevice());
        $writer->writeBooleanValue('allowedToReadOtherUsers', $this->getAllowedToReadOtherUsers());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeCollectionOfPrimitiveValues('permissionGrantPoliciesAssigned', $this->getPermissionGrantPoliciesAssigned());
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
     * Sets the allowedToCreateApps property value. Indicates whether the default user role can create applications. This setting corresponds to the Users can register applications setting in the User settings menu in the Microsoft Entra admin center.
     * @param bool|null $value Value to set for the allowedToCreateApps property.
    */
    public function setAllowedToCreateApps(?bool $value): void {
        $this->getBackingStore()->set('allowedToCreateApps', $value);
    }

    /**
     * Sets the allowedToCreateSecurityGroups property value. Indicates whether the default user role can create security groups. This setting corresponds to the following menus in the Microsoft Entra admin center:  The Users can create security groups in Microsoft Entra admin centers, API or PowerShell setting in the Group settings menu.  Users can create security groups setting in the User settings menu.
     * @param bool|null $value Value to set for the allowedToCreateSecurityGroups property.
    */
    public function setAllowedToCreateSecurityGroups(?bool $value): void {
        $this->getBackingStore()->set('allowedToCreateSecurityGroups', $value);
    }

    /**
     * Sets the allowedToCreateTenants property value. Indicates whether the default user role can create tenants. This setting corresponds to the Restrict non-admin users from creating tenants setting in the User settings menu in the Microsoft Entra admin center.  When this setting is false, users assigned the Tenant Creator role can still create tenants.
     * @param bool|null $value Value to set for the allowedToCreateTenants property.
    */
    public function setAllowedToCreateTenants(?bool $value): void {
        $this->getBackingStore()->set('allowedToCreateTenants', $value);
    }

    /**
     * Sets the allowedToReadBitlockerKeysForOwnedDevice property value. Indicates whether the registered owners of a device can read their own BitLocker recovery keys with default user role.
     * @param bool|null $value Value to set for the allowedToReadBitlockerKeysForOwnedDevice property.
    */
    public function setAllowedToReadBitlockerKeysForOwnedDevice(?bool $value): void {
        $this->getBackingStore()->set('allowedToReadBitlockerKeysForOwnedDevice', $value);
    }

    /**
     * Sets the allowedToReadOtherUsers property value. Indicates whether the default user role can read other users. DO NOT SET THIS VALUE TO false.
     * @param bool|null $value Value to set for the allowedToReadOtherUsers property.
    */
    public function setAllowedToReadOtherUsers(?bool $value): void {
        $this->getBackingStore()->set('allowedToReadOtherUsers', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the permissionGrantPoliciesAssigned property value. Indicates if user consent to apps is allowed, and if it is, which permission to grant consent and which app consent policy (permissionGrantPolicy) govern the permission for users to grant consent. Value should be in the format managePermissionGrantsForSelf.{id}, where {id} is the id of a built-in or custom app consent policy. An empty list indicates user consent to apps is disabled.
     * @param array<string>|null $value Value to set for the permissionGrantPoliciesAssigned property.
    */
    public function setPermissionGrantPoliciesAssigned(?array $value): void {
        $this->getBackingStore()->set('permissionGrantPoliciesAssigned', $value);
    }

}
