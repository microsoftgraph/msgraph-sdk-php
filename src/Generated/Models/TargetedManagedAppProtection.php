<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * Policy used to configure detailed management settings targeted to specific security groups
*/
class TargetedManagedAppProtection extends ManagedAppProtection implements Parsable 
{
    /**
     * Instantiates a new TargetedManagedAppProtection and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.targetedManagedAppProtection');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TargetedManagedAppProtection
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TargetedManagedAppProtection {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.androidManagedAppProtection': return new AndroidManagedAppProtection();
                case '#microsoft.graph.iosManagedAppProtection': return new IosManagedAppProtection();
            }
        }
        return new TargetedManagedAppProtection();
    }

    /**
     * Gets the assignments property value. Navigation property to list of inclusion and exclusion groups to which the policy is deployed.
     * @return array<TargetedManagedAppPolicyAssignment>|null
    */
    public function getAssignments(): ?array {
        $val = $this->getBackingStore()->get('assignments');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, TargetedManagedAppPolicyAssignment::class);
            /** @var array<TargetedManagedAppPolicyAssignment>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'assignments'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'assignments' => fn(ParseNode $n) => $o->setAssignments($n->getCollectionOfObjectValues([TargetedManagedAppPolicyAssignment::class, 'createFromDiscriminatorValue'])),
            'isAssigned' => fn(ParseNode $n) => $o->setIsAssigned($n->getBooleanValue()),
        ]);
    }

    /**
     * Gets the isAssigned property value. Indicates if the policy is deployed to any inclusion groups or not.
     * @return bool|null
    */
    public function getIsAssigned(): ?bool {
        $val = $this->getBackingStore()->get('isAssigned');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isAssigned'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('assignments', $this->getAssignments());
        $writer->writeBooleanValue('isAssigned', $this->getIsAssigned());
    }

    /**
     * Sets the assignments property value. Navigation property to list of inclusion and exclusion groups to which the policy is deployed.
     * @param array<TargetedManagedAppPolicyAssignment>|null $value Value to set for the assignments property.
    */
    public function setAssignments(?array $value): void {
        $this->getBackingStore()->set('assignments', $value);
    }

    /**
     * Sets the isAssigned property value. Indicates if the policy is deployed to any inclusion groups or not.
     * @param bool|null $value Value to set for the isAssigned property.
    */
    public function setIsAssigned(?bool $value): void {
        $this->getBackingStore()->set('isAssigned', $value);
    }

}
