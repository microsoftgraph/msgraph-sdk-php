<?php

namespace Microsoft\Graph\Generated\Models\TermStore;

use Microsoft\Graph\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Relation extends Entity implements Parsable 
{
    /**
     * Instantiates a new Relation and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Relation
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Relation {
        return new Relation();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'fromTerm' => fn(ParseNode $n) => $o->setFromTerm($n->getObjectValue([Term::class, 'createFromDiscriminatorValue'])),
            'relationship' => fn(ParseNode $n) => $o->setRelationship($n->getEnumValue(RelationType::class)),
            'set' => fn(ParseNode $n) => $o->setSet($n->getObjectValue([Set::class, 'createFromDiscriminatorValue'])),
            'toTerm' => fn(ParseNode $n) => $o->setToTerm($n->getObjectValue([Term::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the fromTerm property value. The from [term] of the relation. The term from which the relationship is defined. A null value would indicate the relation is directly with the [set].
     * @return Term|null
    */
    public function getFromTerm(): ?Term {
        $val = $this->getBackingStore()->get('fromTerm');
        if (is_null($val) || $val instanceof Term) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'fromTerm'");
    }

    /**
     * Gets the relationship property value. The type of relation. The possible values are: pin, reuse.
     * @return RelationType|null
    */
    public function getRelationship(): ?RelationType {
        $val = $this->getBackingStore()->get('relationship');
        if (is_null($val) || $val instanceof RelationType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'relationship'");
    }

    /**
     * Gets the set property value. The [set] in which the relation is relevant.
     * @return Set|null
    */
    public function getSet(): ?Set {
        $val = $this->getBackingStore()->get('set');
        if (is_null($val) || $val instanceof Set) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'set'");
    }

    /**
     * Gets the toTerm property value. The to [term] of the relation. The term to which the relationship is defined.
     * @return Term|null
    */
    public function getToTerm(): ?Term {
        $val = $this->getBackingStore()->get('toTerm');
        if (is_null($val) || $val instanceof Term) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'toTerm'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('fromTerm', $this->getFromTerm());
        $writer->writeEnumValue('relationship', $this->getRelationship());
        $writer->writeObjectValue('set', $this->getSet());
        $writer->writeObjectValue('toTerm', $this->getToTerm());
    }

    /**
     * Sets the fromTerm property value. The from [term] of the relation. The term from which the relationship is defined. A null value would indicate the relation is directly with the [set].
     * @param Term|null $value Value to set for the fromTerm property.
    */
    public function setFromTerm(?Term $value): void {
        $this->getBackingStore()->set('fromTerm', $value);
    }

    /**
     * Sets the relationship property value. The type of relation. The possible values are: pin, reuse.
     * @param RelationType|null $value Value to set for the relationship property.
    */
    public function setRelationship(?RelationType $value): void {
        $this->getBackingStore()->set('relationship', $value);
    }

    /**
     * Sets the set property value. The [set] in which the relation is relevant.
     * @param Set|null $value Value to set for the set property.
    */
    public function setSet(?Set $value): void {
        $this->getBackingStore()->set('set', $value);
    }

    /**
     * Sets the toTerm property value. The to [term] of the relation. The term to which the relationship is defined.
     * @param Term|null $value Value to set for the toTerm property.
    */
    public function setToTerm(?Term $value): void {
        $this->getBackingStore()->set('toTerm', $value);
    }

}
