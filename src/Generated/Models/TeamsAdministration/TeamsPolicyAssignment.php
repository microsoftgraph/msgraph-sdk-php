<?php

namespace Microsoft\Graph\Generated\Models\TeamsAdministration;

use Microsoft\Graph\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class TeamsPolicyAssignment extends Entity implements Parsable 
{
    /**
     * Instantiates a new TeamsPolicyAssignment and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TeamsPolicyAssignment
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TeamsPolicyAssignment {
        return new TeamsPolicyAssignment();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'userAssignments' => fn(ParseNode $n) => $o->setUserAssignments($n->getCollectionOfObjectValues([TeamsPolicyUserAssignment::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the userAssignments property value. The collection of user policy assignments.
     * @return array<TeamsPolicyUserAssignment>|null
    */
    public function getUserAssignments(): ?array {
        $val = $this->getBackingStore()->get('userAssignments');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, TeamsPolicyUserAssignment::class);
            /** @var array<TeamsPolicyUserAssignment>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userAssignments'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('userAssignments', $this->getUserAssignments());
    }

    /**
     * Sets the userAssignments property value. The collection of user policy assignments.
     * @param array<TeamsPolicyUserAssignment>|null $value Value to set for the userAssignments property.
    */
    public function setUserAssignments(?array $value): void {
        $this->getBackingStore()->set('userAssignments', $value);
    }

}
