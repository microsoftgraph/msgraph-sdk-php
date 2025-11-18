<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AccessPackageAssignmentRequestCallbackData extends CustomExtensionData implements Parsable 
{
    /**
     * Instantiates a new AccessPackageAssignmentRequestCallbackData and sets the default values.
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
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.assignmentRequestApprovalStageCallbackData': return new AssignmentRequestApprovalStageCallbackData();
            }
        }
        return new AccessPackageAssignmentRequestCallbackData();
    }

    /**
     * Gets the customExtensionStageInstanceDetail property value. Details for the callback.
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
     * Gets the customExtensionStageInstanceId property value. Unique identifier of the callout to the custom extension.
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
     * Gets the stage property value. Indicates the stage at which the custom callout extension is executed. The possible values are: assignmentRequestCreated, assignmentRequestApproved, assignmentRequestGranted, assignmentRequestRemoved, assignmentFourteenDaysBeforeExpiration, assignmentOneDayBeforeExpiration, unknownFutureValue.
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
     * Gets the state property value. Allow the extension to be able to deny or cancel the request submitted by the requestor. The supported values are Denied and Canceled. This property can only be set for an assignmentRequestCreated stage.
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
        $writer->writeEnumValue('stage', $this->getStage());
        $writer->writeStringValue('state', $this->getState());
    }

    /**
     * Sets the customExtensionStageInstanceDetail property value. Details for the callback.
     * @param string|null $value Value to set for the customExtensionStageInstanceDetail property.
    */
    public function setCustomExtensionStageInstanceDetail(?string $value): void {
        $this->getBackingStore()->set('customExtensionStageInstanceDetail', $value);
    }

    /**
     * Sets the customExtensionStageInstanceId property value. Unique identifier of the callout to the custom extension.
     * @param string|null $value Value to set for the customExtensionStageInstanceId property.
    */
    public function setCustomExtensionStageInstanceId(?string $value): void {
        $this->getBackingStore()->set('customExtensionStageInstanceId', $value);
    }

    /**
     * Sets the stage property value. Indicates the stage at which the custom callout extension is executed. The possible values are: assignmentRequestCreated, assignmentRequestApproved, assignmentRequestGranted, assignmentRequestRemoved, assignmentFourteenDaysBeforeExpiration, assignmentOneDayBeforeExpiration, unknownFutureValue.
     * @param AccessPackageCustomExtensionStage|null $value Value to set for the stage property.
    */
    public function setStage(?AccessPackageCustomExtensionStage $value): void {
        $this->getBackingStore()->set('stage', $value);
    }

    /**
     * Sets the state property value. Allow the extension to be able to deny or cancel the request submitted by the requestor. The supported values are Denied and Canceled. This property can only be set for an assignmentRequestCreated stage.
     * @param string|null $value Value to set for the state property.
    */
    public function setState(?string $value): void {
        $this->getBackingStore()->set('state', $value);
    }

}
