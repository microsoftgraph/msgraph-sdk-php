<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class DefaultUserRolePermissions implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new defaultUserRolePermissions and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.defaultUserRolePermissions');
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
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the allowedToCreateApps property value. Indicates whether the default user role can create applications.
     * @return bool|null
    */
    public function getAllowedToCreateApps(): ?bool {
        return $this->getBackingStore()->get('allowedToCreateApps');
    }

    /**
     * Gets the allowedToCreateSecurityGroups property value. Indicates whether the default user role can create security groups.
     * @return bool|null
    */
    public function getAllowedToCreateSecurityGroups(): ?bool {
        return $this->getBackingStore()->get('allowedToCreateSecurityGroups');
    }

    /**
     * Gets the allowedToReadOtherUsers property value. Indicates whether the default user role can read other users.
     * @return bool|null
    */
    public function getAllowedToReadOtherUsers(): ?bool {
        return $this->getBackingStore()->get('allowedToReadOtherUsers');
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
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'allowedToCreateApps' => fn(ParseNode $n) => $o->setAllowedToCreateApps($n->getBooleanValue()),
            'allowedToCreateSecurityGroups' => fn(ParseNode $n) => $o->setAllowedToCreateSecurityGroups($n->getBooleanValue()),
            'allowedToReadOtherUsers' => fn(ParseNode $n) => $o->setAllowedToReadOtherUsers($n->getBooleanValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'permissionGrantPoliciesAssigned' => fn(ParseNode $n) => $o->setPermissionGrantPoliciesAssigned($n->getCollectionOfPrimitiveValues()),
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the permissionGrantPoliciesAssigned property value. Indicates if user consent to apps is allowed, and if it is, which permission to grant consent and which app consent policy (permissionGrantPolicy) govern the permission for users to grant consent. Value should be in the format managePermissionGrantsForSelf.{id}, where {id} is the id of a built-in or custom app consent policy. An empty list indicates user consent to apps is disabled.
     * @return array<string>|null
    */
    public function getPermissionGrantPoliciesAssigned(): ?array {
        return $this->getBackingStore()->get('permissionGrantPoliciesAssigned');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('allowedToCreateApps', $this->getAllowedToCreateApps());
        $writer->writeBooleanValue('allowedToCreateSecurityGroups', $this->getAllowedToCreateSecurityGroups());
        $writer->writeBooleanValue('allowedToReadOtherUsers', $this->getAllowedToReadOtherUsers());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeCollectionOfPrimitiveValues('permissionGrantPoliciesAssigned', $this->getPermissionGrantPoliciesAssigned());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the allowedToCreateApps property value. Indicates whether the default user role can create applications.
     *  @param bool|null $value Value to set for the allowedToCreateApps property.
    */
    public function setAllowedToCreateApps(?bool $value): void {
        $this->getBackingStore()->set('allowedToCreateApps', $value);
    }

    /**
     * Sets the allowedToCreateSecurityGroups property value. Indicates whether the default user role can create security groups.
     *  @param bool|null $value Value to set for the allowedToCreateSecurityGroups property.
    */
    public function setAllowedToCreateSecurityGroups(?bool $value): void {
        $this->getBackingStore()->set('allowedToCreateSecurityGroups', $value);
    }

    /**
     * Sets the allowedToReadOtherUsers property value. Indicates whether the default user role can read other users.
     *  @param bool|null $value Value to set for the allowedToReadOtherUsers property.
    */
    public function setAllowedToReadOtherUsers(?bool $value): void {
        $this->getBackingStore()->set('allowedToReadOtherUsers', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the permissionGrantPoliciesAssigned property value. Indicates if user consent to apps is allowed, and if it is, which permission to grant consent and which app consent policy (permissionGrantPolicy) govern the permission for users to grant consent. Value should be in the format managePermissionGrantsForSelf.{id}, where {id} is the id of a built-in or custom app consent policy. An empty list indicates user consent to apps is disabled.
     *  @param array<string>|null $value Value to set for the permissionGrantPoliciesAssigned property.
    */
    public function setPermissionGrantPoliciesAssigned(?array $value): void {
        $this->getBackingStore()->set('permissionGrantPoliciesAssigned', $value);
    }

}
