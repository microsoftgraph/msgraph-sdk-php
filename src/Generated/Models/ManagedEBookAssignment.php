<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Contains properties used to assign a eBook to a group.
*/
class ManagedEBookAssignment extends Entity implements Parsable 
{
    /**
     * Instantiates a new ManagedEBookAssignment and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ManagedEBookAssignment
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ManagedEBookAssignment {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.iosVppEBookAssignment': return new IosVppEBookAssignment();
            }
        }
        return new ManagedEBookAssignment();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'installIntent' => fn(ParseNode $n) => $o->setInstallIntent($n->getEnumValue(InstallIntent::class)),
            'target' => fn(ParseNode $n) => $o->setTarget($n->getObjectValue([DeviceAndAppManagementAssignmentTarget::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the installIntent property value. Possible values for the install intent chosen by the admin.
     * @return InstallIntent|null
    */
    public function getInstallIntent(): ?InstallIntent {
        $val = $this->getBackingStore()->get('installIntent');
        if (is_null($val) || $val instanceof InstallIntent) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'installIntent'");
    }

    /**
     * Gets the target property value. The assignment target for eBook.
     * @return DeviceAndAppManagementAssignmentTarget|null
    */
    public function getTarget(): ?DeviceAndAppManagementAssignmentTarget {
        $val = $this->getBackingStore()->get('target');
        if (is_null($val) || $val instanceof DeviceAndAppManagementAssignmentTarget) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'target'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('installIntent', $this->getInstallIntent());
        $writer->writeObjectValue('target', $this->getTarget());
    }

    /**
     * Sets the installIntent property value. Possible values for the install intent chosen by the admin.
     * @param InstallIntent|null $value Value to set for the installIntent property.
    */
    public function setInstallIntent(?InstallIntent $value): void {
        $this->getBackingStore()->set('installIntent', $value);
    }

    /**
     * Sets the target property value. The assignment target for eBook.
     * @param DeviceAndAppManagementAssignmentTarget|null $value Value to set for the target property.
    */
    public function setTarget(?DeviceAndAppManagementAssignmentTarget $value): void {
        $this->getBackingStore()->set('target', $value);
    }

}
