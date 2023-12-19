<?php

namespace Microsoft\Graph\Generated\Drives\Item\Items\Item\AssignSensitivityLabel;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class AssignSensitivityLabelPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new assignSensitivityLabelPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AssignSensitivityLabelPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AssignSensitivityLabelPostRequestBody {
        return new AssignSensitivityLabelPostRequestBody();
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
     * @return AssignSensitivityLabelPostRequestBody_assignmentMethod|null
    */
    public function getAssignmentMethod(): ?AssignSensitivityLabelPostRequestBody_assignmentMethod {
        $val = $this->getBackingStore()->get('assignmentMethod');
        if (is_null($val) || $val instanceof AssignSensitivityLabelPostRequestBody_assignmentMethod) {
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
            'assignmentMethod' => fn(ParseNode $n) => $o->setAssignmentMethod($n->getEnumValue(AssignSensitivityLabelPostRequestBody_assignmentMethod::class)),
            'justificationText' => fn(ParseNode $n) => $o->setJustificationText($n->getStringValue()),
            'sensitivityLabelId' => fn(ParseNode $n) => $o->setSensitivityLabelId($n->getStringValue()),
        ];
    }

    /**
     * Gets the justificationText property value. The justificationText property
     * @return string|null
    */
    public function getJustificationText(): ?string {
        $val = $this->getBackingStore()->get('justificationText');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'justificationText'");
    }

    /**
     * Gets the sensitivityLabelId property value. The sensitivityLabelId property
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('assignmentMethod', $this->getAssignmentMethod());
        $writer->writeStringValue('justificationText', $this->getJustificationText());
        $writer->writeStringValue('sensitivityLabelId', $this->getSensitivityLabelId());
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
     * @param AssignSensitivityLabelPostRequestBody_assignmentMethod|null $value Value to set for the assignmentMethod property.
    */
    public function setAssignmentMethod(?AssignSensitivityLabelPostRequestBody_assignmentMethod $value): void {
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
     * Sets the justificationText property value. The justificationText property
     * @param string|null $value Value to set for the justificationText property.
    */
    public function setJustificationText(?string $value): void {
        $this->getBackingStore()->set('justificationText', $value);
    }

    /**
     * Sets the sensitivityLabelId property value. The sensitivityLabelId property
     * @param string|null $value Value to set for the sensitivityLabelId property.
    */
    public function setSensitivityLabelId(?string $value): void {
        $this->getBackingStore()->set('sensitivityLabelId', $value);
    }

}
