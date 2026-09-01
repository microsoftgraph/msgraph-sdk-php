<?php

namespace Microsoft\Graph\Generated\Models\IdentityGovernance;

use Microsoft\Graph\Generated\Models\CustomExtensionData;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class CustomTaskExtensionResponseData extends CustomExtensionData implements Parsable 
{
    /**
     * Instantiates a new CustomTaskExtensionResponseData and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.identityGovernance.customTaskExtensionResponseData');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CustomTaskExtensionResponseData
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CustomTaskExtensionResponseData {
        return new CustomTaskExtensionResponseData();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'operationStatus' => fn(ParseNode $n) => $o->setOperationStatus($n->getEnumValue(CustomTaskExtensionOperationStatus::class)),
            'statusReasons' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setStatusReasons($val);
            },
            'targetSubject' => fn(ParseNode $n) => $o->setTargetSubject($n->getObjectValue([WorkflowSubject::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the operationStatus property value. The operationStatus property
     * @return CustomTaskExtensionOperationStatus|null
    */
    public function getOperationStatus(): ?CustomTaskExtensionOperationStatus {
        $val = $this->getBackingStore()->get('operationStatus');
        if (is_null($val) || $val instanceof CustomTaskExtensionOperationStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'operationStatus'");
    }

    /**
     * Gets the statusReasons property value. A collection of status reason strings. May be empty.
     * @return array<string>|null
    */
    public function getStatusReasons(): ?array {
        $val = $this->getBackingStore()->get('statusReasons');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'statusReasons'");
    }

    /**
     * Gets the targetSubject property value. The workflow subject that was processed by the custom task extension.
     * @return WorkflowSubject|null
    */
    public function getTargetSubject(): ?WorkflowSubject {
        $val = $this->getBackingStore()->get('targetSubject');
        if (is_null($val) || $val instanceof WorkflowSubject) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'targetSubject'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('operationStatus', $this->getOperationStatus());
        $writer->writeCollectionOfPrimitiveValues('statusReasons', $this->getStatusReasons());
        $writer->writeObjectValue('targetSubject', $this->getTargetSubject());
    }

    /**
     * Sets the operationStatus property value. The operationStatus property
     * @param CustomTaskExtensionOperationStatus|null $value Value to set for the operationStatus property.
    */
    public function setOperationStatus(?CustomTaskExtensionOperationStatus $value): void {
        $this->getBackingStore()->set('operationStatus', $value);
    }

    /**
     * Sets the statusReasons property value. A collection of status reason strings. May be empty.
     * @param array<string>|null $value Value to set for the statusReasons property.
    */
    public function setStatusReasons(?array $value): void {
        $this->getBackingStore()->set('statusReasons', $value);
    }

    /**
     * Sets the targetSubject property value. The workflow subject that was processed by the custom task extension.
     * @param WorkflowSubject|null $value Value to set for the targetSubject property.
    */
    public function setTargetSubject(?WorkflowSubject $value): void {
        $this->getBackingStore()->set('targetSubject', $value);
    }

}
