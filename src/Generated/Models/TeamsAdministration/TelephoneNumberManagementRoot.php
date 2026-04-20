<?php

namespace Microsoft\Graph\Generated\Models\TeamsAdministration;

use Microsoft\Graph\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class TelephoneNumberManagementRoot extends Entity implements Parsable 
{
    /**
     * Instantiates a new TelephoneNumberManagementRoot and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TelephoneNumberManagementRoot
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TelephoneNumberManagementRoot {
        return new TelephoneNumberManagementRoot();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'numberAssignments' => fn(ParseNode $n) => $o->setNumberAssignments($n->getCollectionOfObjectValues([NumberAssignment::class, 'createFromDiscriminatorValue'])),
            'operations' => fn(ParseNode $n) => $o->setOperations($n->getCollectionOfObjectValues([TelephoneNumberLongRunningOperation::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the numberAssignments property value. Represents a collection of synchronous telephone number management operations.
     * @return array<NumberAssignment>|null
    */
    public function getNumberAssignments(): ?array {
        $val = $this->getBackingStore()->get('numberAssignments');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, NumberAssignment::class);
            /** @var array<NumberAssignment>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'numberAssignments'");
    }

    /**
     * Gets the operations property value. Represents a collection of asynchronous telephone number management operations.
     * @return array<TelephoneNumberLongRunningOperation>|null
    */
    public function getOperations(): ?array {
        $val = $this->getBackingStore()->get('operations');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, TelephoneNumberLongRunningOperation::class);
            /** @var array<TelephoneNumberLongRunningOperation>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'operations'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('numberAssignments', $this->getNumberAssignments());
        $writer->writeCollectionOfObjectValues('operations', $this->getOperations());
    }

    /**
     * Sets the numberAssignments property value. Represents a collection of synchronous telephone number management operations.
     * @param array<NumberAssignment>|null $value Value to set for the numberAssignments property.
    */
    public function setNumberAssignments(?array $value): void {
        $this->getBackingStore()->set('numberAssignments', $value);
    }

    /**
     * Sets the operations property value. Represents a collection of asynchronous telephone number management operations.
     * @param array<TelephoneNumberLongRunningOperation>|null $value Value to set for the operations property.
    */
    public function setOperations(?array $value): void {
        $this->getBackingStore()->set('operations', $value);
    }

}
