<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AccessPackageAssignmentRequestCallbackData extends CustomExtensionData implements Parsable 
{
    /**
     * @var string|null $odataType The OdataType property
    */
    public ?string $odataType = null;
    
    /**
     * Instantiates a new accessPackageAssignmentRequestCallbackData and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.accessPackageAssignmentRequestCallbackData');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AccessPackageAssignmentRequestCallbackData
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AccessPackageAssignmentRequestCallbackData {
        return new AccessPackageAssignmentRequestCallbackData();
    }

    /**
     * Gets the customExtensionStageInstanceDetail property value. The customExtensionStageInstanceDetail property
     * @return string|null
    */
    public function getCustomExtensionStageInstanceDetail(): ?string {
        $val = $this->getBackingStore()->get('customExtensionStageInstanceDetail');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'customExtensionStageInstanceDetail'");
    }

    /**
     * Gets the customExtensionStageInstanceId property value. The customExtensionStageInstanceId property
     * @return string|null
    */
    public function getCustomExtensionStageInstanceId(): ?string {
        $val = $this->getBackingStore()->get('customExtensionStageInstanceId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'customExtensionStageInstanceId'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'customExtensionStageInstanceDetail' => fn(ParseNode $n) => $o->setCustomExtensionStageInstanceDetail($n->getStringValue()),
            'customExtensionStageInstanceId' => fn(ParseNode $n) => $o->setCustomExtensionStageInstanceId($n->getStringValue()),
            'stage' => fn(ParseNode $n) => $o->setStage($n->getEnumValue(AccessPackageCustomExtensionStage::class)),
            'state' => fn(ParseNode $n) => $o->setState($n->getStringValue()),
        ]);
    }

    /**
     * Gets the stage property value. The stage property
     * @return AccessPackageCustomExtensionStage|null
    */
    public function getStage(): ?AccessPackageCustomExtensionStage {
        $val = $this->getBackingStore()->get('stage');
        if (is_null($val) || $val instanceof AccessPackageCustomExtensionStage) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'stage'");
    }

    /**
     * Gets the state property value. The state property
     * @return string|null
    */
    public function getState(): ?string {
        $val = $this->getBackingStore()->get('state');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'state'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('customExtensionStageInstanceDetail', $this->getCustomExtensionStageInstanceDetail());
        $writer->writeStringValue('customExtensionStageInstanceId', $this->getCustomExtensionStageInstanceId());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeEnumValue('stage', $this->getStage());
        $writer->writeStringValue('state', $this->getState());
    }

    /**
     * Sets the customExtensionStageInstanceDetail property value. The customExtensionStageInstanceDetail property
     * @param string|null $value Value to set for the customExtensionStageInstanceDetail property.
    */
    public function setCustomExtensionStageInstanceDetail(?string $value): void {
        $this->getBackingStore()->set('customExtensionStageInstanceDetail', $value);
    }

    /**
     * Sets the customExtensionStageInstanceId property value. The customExtensionStageInstanceId property
     * @param string|null $value Value to set for the customExtensionStageInstanceId property.
    */
    public function setCustomExtensionStageInstanceId(?string $value): void {
        $this->getBackingStore()->set('customExtensionStageInstanceId', $value);
    }

    /**
     * Sets the stage property value. The stage property
     * @param AccessPackageCustomExtensionStage|null $value Value to set for the stage property.
    */
    public function setStage(?AccessPackageCustomExtensionStage $value): void {
        $this->getBackingStore()->set('stage', $value);
    }

    /**
     * Sets the state property value. The state property
     * @param string|null $value Value to set for the state property.
    */
    public function setState(?string $value): void {
        $this->getBackingStore()->set('state', $value);
    }

}
