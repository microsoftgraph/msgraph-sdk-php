<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CloudPcManagementGroupAssignmentTarget extends CloudPcManagementAssignmentTarget implements Parsable 
{
    /**
     * Instantiates a new CloudPcManagementGroupAssignmentTarget and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.cloudPcManagementGroupAssignmentTarget');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CloudPcManagementGroupAssignmentTarget
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CloudPcManagementGroupAssignmentTarget {
        return new CloudPcManagementGroupAssignmentTarget();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'groupId' => fn(ParseNode $n) => $o->setGroupId($n->getStringValue()),
            'servicePlanId' => fn(ParseNode $n) => $o->setServicePlanId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the groupId property value. The ID of the target group for the assignment.
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
     * Gets the servicePlanId property value. The unique identifier for the service plan that indicates which size of the Cloud PC to provision for the user. Use a null value, when the provisioningType is dedicated.
     * @return string|null
    */
    public function getServicePlanId(): ?string {
        $val = $this->getBackingStore()->get('servicePlanId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'servicePlanId'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('groupId', $this->getGroupId());
        $writer->writeStringValue('servicePlanId', $this->getServicePlanId());
    }

    /**
     * Sets the groupId property value. The ID of the target group for the assignment.
     * @param string|null $value Value to set for the groupId property.
    */
    public function setGroupId(?string $value): void {
        $this->getBackingStore()->set('groupId', $value);
    }

    /**
     * Sets the servicePlanId property value. The unique identifier for the service plan that indicates which size of the Cloud PC to provision for the user. Use a null value, when the provisioningType is dedicated.
     * @param string|null $value Value to set for the servicePlanId property.
    */
    public function setServicePlanId(?string $value): void {
        $this->getBackingStore()->set('servicePlanId', $value);
    }

}
