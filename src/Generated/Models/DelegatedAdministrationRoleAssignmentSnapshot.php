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

class DelegatedAdministrationRoleAssignmentSnapshot implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new DelegatedAdministrationRoleAssignmentSnapshot and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DelegatedAdministrationRoleAssignmentSnapshot
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DelegatedAdministrationRoleAssignmentSnapshot {
        return new DelegatedAdministrationRoleAssignmentSnapshot();
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
            'groupDisplayName' => fn(ParseNode $n) => $o->setGroupDisplayName($n->getStringValue()),
            'groupId' => fn(ParseNode $n) => $o->setGroupId($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'roleTemplates' => fn(ParseNode $n) => $o->setRoleTemplates($n->getCollectionOfObjectValues([RoleTemplate::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the groupDisplayName property value. The groupDisplayName property
     * @return string|null
    */
    public function getGroupDisplayName(): ?string {
        $val = $this->getBackingStore()->get('groupDisplayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'groupDisplayName'");
    }

    /**
     * Gets the groupId property value. The groupId property
     * @return string|null
    */
    public function getGroupId(): ?string {
        $val = $this->getBackingStore()->get('groupId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'groupId'");
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
     * Gets the roleTemplates property value. The roleTemplates property
     * @return array<RoleTemplate>|null
    */
    public function getRoleTemplates(): ?array {
        $val = $this->getBackingStore()->get('roleTemplates');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, RoleTemplate::class);
            /** @var array<RoleTemplate>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'roleTemplates'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('groupDisplayName', $this->getGroupDisplayName());
        $writer->writeStringValue('groupId', $this->getGroupId());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeCollectionOfObjectValues('roleTemplates', $this->getRoleTemplates());
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
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the groupDisplayName property value. The groupDisplayName property
     * @param string|null $value Value to set for the groupDisplayName property.
    */
    public function setGroupDisplayName(?string $value): void {
        $this->getBackingStore()->set('groupDisplayName', $value);
    }

    /**
     * Sets the groupId property value. The groupId property
     * @param string|null $value Value to set for the groupId property.
    */
    public function setGroupId(?string $value): void {
        $this->getBackingStore()->set('groupId', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the roleTemplates property value. The roleTemplates property
     * @param array<RoleTemplate>|null $value Value to set for the roleTemplates property.
    */
    public function setRoleTemplates(?array $value): void {
        $this->getBackingStore()->set('roleTemplates', $value);
    }

}
