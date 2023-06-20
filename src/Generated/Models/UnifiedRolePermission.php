<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class UnifiedRolePermission implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new UnifiedRolePermission and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UnifiedRolePermission
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UnifiedRolePermission {
        return new UnifiedRolePermission();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the allowedResourceActions property value. Set of tasks that can be performed on a resource. Required.
     * @return array<string>|null
    */
    public function getAllowedResourceActions(): ?array {
        return $this->getBackingStore()->get('allowedResourceActions');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the condition property value. Optional constraints that must be met for the permission to be effective. Not supported for custom roles.
     * @return string|null
    */
    public function getCondition(): ?string {
        return $this->getBackingStore()->get('condition');
    }

    /**
     * Gets the excludedResourceActions property value. Set of tasks that may not be performed on a resource. Not yet supported.
     * @return array<string>|null
    */
    public function getExcludedResourceActions(): ?array {
        return $this->getBackingStore()->get('excludedResourceActions');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'allowedResourceActions' => fn(ParseNode $n) => $o->setAllowedResourceActions($n->getCollectionOfPrimitiveValues()),
            'condition' => fn(ParseNode $n) => $o->setCondition($n->getStringValue()),
            'excludedResourceActions' => fn(ParseNode $n) => $o->setExcludedResourceActions($n->getCollectionOfPrimitiveValues()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfPrimitiveValues('allowedResourceActions', $this->getAllowedResourceActions());
        $writer->writeStringValue('condition', $this->getCondition());
        $writer->writeCollectionOfPrimitiveValues('excludedResourceActions', $this->getExcludedResourceActions());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the allowedResourceActions property value. Set of tasks that can be performed on a resource. Required.
     * @param array<string>|null $value Value to set for the allowedResourceActions property.
    */
    public function setAllowedResourceActions(?array $value): void {
        $this->getBackingStore()->set('allowedResourceActions', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the condition property value. Optional constraints that must be met for the permission to be effective. Not supported for custom roles.
     * @param string|null $value Value to set for the condition property.
    */
    public function setCondition(?string $value): void {
        $this->getBackingStore()->set('condition', $value);
    }

    /**
     * Sets the excludedResourceActions property value. Set of tasks that may not be performed on a resource. Not yet supported.
     * @param array<string>|null $value Value to set for the excludedResourceActions property.
    */
    public function setExcludedResourceActions(?array $value): void {
        $this->getBackingStore()->set('excludedResourceActions', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
