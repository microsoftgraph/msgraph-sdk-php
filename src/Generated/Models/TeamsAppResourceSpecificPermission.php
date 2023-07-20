<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class TeamsAppResourceSpecificPermission implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new teamsAppResourceSpecificPermission and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TeamsAppResourceSpecificPermission
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TeamsAppResourceSpecificPermission {
        return new TeamsAppResourceSpecificPermission();
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
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'permissionType' => fn(ParseNode $n) => $o->setPermissionType($n->getEnumValue(TeamsAppResourceSpecificPermissionType::class)),
            'permissionValue' => fn(ParseNode $n) => $o->setPermissionValue($n->getStringValue()),
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
     * Gets the permissionType property value. The type of resource-specific permission.
     * @return TeamsAppResourceSpecificPermissionType|null
    */
    public function getPermissionType(): ?TeamsAppResourceSpecificPermissionType {
        $val = $this->getBackingStore()->get('permissionType');
        if (is_null($val) || $val instanceof TeamsAppResourceSpecificPermissionType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'permissionType'");
    }

    /**
     * Gets the permissionValue property value. The name of the resource-specific permission.
     * @return string|null
    */
    public function getPermissionValue(): ?string {
        $val = $this->getBackingStore()->get('permissionValue');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'permissionValue'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeEnumValue('permissionType', $this->getPermissionType());
        $writer->writeStringValue('permissionValue', $this->getPermissionValue());
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
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the permissionType property value. The type of resource-specific permission.
     * @param TeamsAppResourceSpecificPermissionType|null $value Value to set for the permissionType property.
    */
    public function setPermissionType(?TeamsAppResourceSpecificPermissionType $value): void {
        $this->getBackingStore()->set('permissionType', $value);
    }

    /**
     * Sets the permissionValue property value. The name of the resource-specific permission.
     * @param string|null $value Value to set for the permissionValue property.
    */
    public function setPermissionValue(?string $value): void {
        $this->getBackingStore()->set('permissionValue', $value);
    }

}
