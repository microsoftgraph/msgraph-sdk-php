<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class SensitivityLabelAssignment implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new sensitivityLabelAssignment and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SensitivityLabelAssignment
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SensitivityLabelAssignment {
        return new SensitivityLabelAssignment();
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
     * Gets the assignmentMethod property value. The assignmentMethod property
     * @return SensitivityLabelAssignmentMethod|null
    */
    public function getAssignmentMethod(): ?SensitivityLabelAssignmentMethod {
        $val = $this->getBackingStore()->get('assignmentMethod');
        if (is_null($val) || $val instanceof SensitivityLabelAssignmentMethod) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'assignmentMethod'");
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
            'assignmentMethod' => fn(ParseNode $n) => $o->setAssignmentMethod($n->getEnumValue(SensitivityLabelAssignmentMethod::class)),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'sensitivityLabelId' => fn(ParseNode $n) => $o->setSensitivityLabelId($n->getStringValue()),
            'tenantId' => fn(ParseNode $n) => $o->setTenantId($n->getStringValue()),
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
     * Gets the sensitivityLabelId property value. The unique identifier for the sensitivity label assigned to the file.
     * @return string|null
    */
    public function getSensitivityLabelId(): ?string {
        $val = $this->getBackingStore()->get('sensitivityLabelId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sensitivityLabelId'");
    }

    /**
     * Gets the tenantId property value. The unique identifier for the tenant that hosts the file when this label is applied.
     * @return string|null
    */
    public function getTenantId(): ?string {
        $val = $this->getBackingStore()->get('tenantId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'tenantId'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('assignmentMethod', $this->getAssignmentMethod());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('sensitivityLabelId', $this->getSensitivityLabelId());
        $writer->writeStringValue('tenantId', $this->getTenantId());
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
     * Sets the assignmentMethod property value. The assignmentMethod property
     * @param SensitivityLabelAssignmentMethod|null $value Value to set for the assignmentMethod property.
    */
    public function setAssignmentMethod(?SensitivityLabelAssignmentMethod $value): void {
        $this->getBackingStore()->set('assignmentMethod', $value);
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
     * Sets the sensitivityLabelId property value. The unique identifier for the sensitivity label assigned to the file.
     * @param string|null $value Value to set for the sensitivityLabelId property.
    */
    public function setSensitivityLabelId(?string $value): void {
        $this->getBackingStore()->set('sensitivityLabelId', $value);
    }

    /**
     * Sets the tenantId property value. The unique identifier for the tenant that hosts the file when this label is applied.
     * @param string|null $value Value to set for the tenantId property.
    */
    public function setTenantId(?string $value): void {
        $this->getBackingStore()->set('tenantId', $value);
    }

}
