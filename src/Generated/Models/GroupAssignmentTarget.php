<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class GroupAssignmentTarget extends DeviceAndAppManagementAssignmentTarget implements Parsable 
{
    /**
     * Instantiates a new GroupAssignmentTarget and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.groupAssignmentTarget');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GroupAssignmentTarget
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GroupAssignmentTarget {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.exclusionGroupAssignmentTarget': return new ExclusionGroupAssignmentTarget();
            }
        }
        return new GroupAssignmentTarget();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'groupId' => fn(ParseNode $n) => $o->setGroupId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the groupId property value. The group Id that is the target of the assignment.
     * @return string|null
    */
    public function getGroupId(): ?string {
        return $this->getBackingStore()->get('groupId');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('groupId', $this->getGroupId());
    }

    /**
     * Sets the groupId property value. The group Id that is the target of the assignment.
     *  @param string|null $value Value to set for the groupId property.
    */
    public function setGroupId(?string $value): void {
        $this->getBackingStore()->set('groupId', $value);
    }

}
