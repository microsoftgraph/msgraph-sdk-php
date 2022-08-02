<?php

namespace Microsoft\Graph\Generated\Models\TermStore;

use Microsoft\Graph\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Relation extends Entity implements Parsable 
{
    /**
     * @var Term|null $fromTerm The from [term] of the relation. The term from which the relationship is defined. A null value would indicate the relation is directly with the [set].
    */
    private ?Term $fromTerm = null;
    
    /**
     * @var RelationType|null $relationship The type of relation. Possible values are: pin, reuse.
    */
    private ?RelationType $relationship = null;
    
    /**
     * @var Set|null $set The [set] in which the relation is relevant.
    */
    private ?Set $set = null;
    
    /**
     * @var Term|null $toTerm The to [term] of the relation. The term to which the relationship is defined.
    */
    private ?Term $toTerm = null;
    
    /**
     * Instantiates a new relation and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.termStore.relation');
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
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'fromTerm' => function (ParseNode $n) use ($o) { $o->setFromTerm($n->getObjectValue(array(Term::class, 'createFromDiscriminatorValue'))); },
            'relationship' => function (ParseNode $n) use ($o) { $o->setRelationship($n->getEnumValue(RelationType::class)); },
            'set' => function (ParseNode $n) use ($o) { $o->setSet($n->getObjectValue(array(Set::class, 'createFromDiscriminatorValue'))); },
            'toTerm' => function (ParseNode $n) use ($o) { $o->setToTerm($n->getObjectValue(array(Term::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the fromTerm property value. The from [term] of the relation. The term from which the relationship is defined. A null value would indicate the relation is directly with the [set].
     * @return Term|null
    */
    public function getFromTerm(): ?Term {
        return $this->fromTerm;
    }

    /**
     * Gets the relationship property value. The type of relation. Possible values are: pin, reuse.
     * @return RelationType|null
    */
    public function getRelationship(): ?RelationType {
        return $this->relationship;
    }

    /**
     * Gets the set property value. The [set] in which the relation is relevant.
     * @return Set|null
    */
    public function getSet(): ?Set {
        return $this->set;
    }

    /**
     * Gets the toTerm property value. The to [term] of the relation. The term to which the relationship is defined.
     * @return Term|null
    */
    public function getToTerm(): ?Term {
        return $this->toTerm;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('fromTerm', $this->fromTerm);
        $writer->writeEnumValue('relationship', $this->relationship);
        $writer->writeObjectValue('set', $this->set);
        $writer->writeObjectValue('toTerm', $this->toTerm);
    }

    /**
     * Sets the fromTerm property value. The from [term] of the relation. The term from which the relationship is defined. A null value would indicate the relation is directly with the [set].
     *  @param Term|null $value Value to set for the fromTerm property.
    */
    public function setFromTerm(?Term $value ): void {
        $this->fromTerm = $value;
    }

    /**
     * Sets the relationship property value. The type of relation. Possible values are: pin, reuse.
     *  @param RelationType|null $value Value to set for the relationship property.
    */
    public function setRelationship(?RelationType $value ): void {
        $this->relationship = $value;
    }

    /**
     * Sets the set property value. The [set] in which the relation is relevant.
     *  @param Set|null $value Value to set for the set property.
    */
    public function setSet(?Set $value ): void {
        $this->set = $value;
    }

    /**
     * Sets the toTerm property value. The to [term] of the relation. The term to which the relationship is defined.
     *  @param Term|null $value Value to set for the toTerm property.
    */
    public function setToTerm(?Term $value ): void {
        $this->toTerm = $value;
    }

}
