<?php

namespace Microsoft\Graph\Generated\Models\IdentityGovernance;

use Microsoft\Graph\Generated\Models\Group;
use Microsoft\Graph\Generated\Models\SubjectSet;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class GroupBasedSubjectSet extends SubjectSet implements Parsable 
{
    /**
     * Instantiates a new GroupBasedSubjectSet and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.identityGovernance.groupBasedSubjectSet');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GroupBasedSubjectSet
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GroupBasedSubjectSet {
        return new GroupBasedSubjectSet();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'groups' => fn(ParseNode $n) => $o->setGroups($n->getCollectionOfObjectValues([Group::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the groups property value. The groups property
     * @return array<Group>|null
    */
    public function getGroups(): ?array {
        $val = $this->getBackingStore()->get('groups');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Group::class);
            /** @var array<Group>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'groups'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('groups', $this->getGroups());
    }

    /**
     * Sets the groups property value. The groups property
     * @param array<Group>|null $value Value to set for the groups property.
    */
    public function setGroups(?array $value): void {
        $this->getBackingStore()->set('groups', $value);
    }

}
