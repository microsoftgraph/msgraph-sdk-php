<?php

namespace Microsoft\Graph\Generated\Models\TermStore;

use DateTime;
use Microsoft\Graph\Generated\Models\Entity;
use Microsoft\Graph\Generated\Models\KeyValue;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Term extends Entity implements Parsable 
{
    /**
     * @var array<Term>|null $children Children of current term.
    */
    private ?array $children = null;
    
    /**
     * @var DateTime|null $createdDateTime Date and time of term creation. Read-only.
    */
    private ?DateTime $createdDateTime = null;
    
    /**
     * @var array<LocalizedDescription>|null $descriptions Description about term that is dependent on the languageTag.
    */
    private ?array $descriptions = null;
    
    /**
     * @var array<LocalizedLabel>|null $labels Label metadata for a term.
    */
    private ?array $labels = null;
    
    /**
     * @var DateTime|null $lastModifiedDateTime Last date and time of term modification. Read-only.
    */
    private ?DateTime $lastModifiedDateTime = null;
    
    /**
     * @var array<KeyValue>|null $properties Collection of properties on the term.
    */
    private ?array $properties = null;
    
    /**
     * @var array<Relation>|null $relations To indicate which terms are related to the current term as either pinned or reused.
    */
    private ?array $relations = null;
    
    /**
     * @var Set|null $set The [set] in which the term is created.
    */
    private ?Set $set = null;
    
    /**
     * Instantiates a new term and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.termStore.term');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Term
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Term {
        return new Term();
    }

    /**
     * Gets the children property value. Children of current term.
     * @return array<Term>|null
    */
    public function getChildren(): ?array {
        return $this->children;
    }

    /**
     * Gets the createdDateTime property value. Date and time of term creation. Read-only.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * Gets the descriptions property value. Description about term that is dependent on the languageTag.
     * @return array<LocalizedDescription>|null
    */
    public function getDescriptions(): ?array {
        return $this->descriptions;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'children' => fn(ParseNode $n) => $o->setChildren($n->getCollectionOfObjectValues([Term::class, 'createFromDiscriminatorValue'])),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'descriptions' => fn(ParseNode $n) => $o->setDescriptions($n->getCollectionOfObjectValues([LocalizedDescription::class, 'createFromDiscriminatorValue'])),
            'labels' => fn(ParseNode $n) => $o->setLabels($n->getCollectionOfObjectValues([LocalizedLabel::class, 'createFromDiscriminatorValue'])),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'properties' => fn(ParseNode $n) => $o->setProperties($n->getCollectionOfObjectValues([KeyValue::class, 'createFromDiscriminatorValue'])),
            'relations' => fn(ParseNode $n) => $o->setRelations($n->getCollectionOfObjectValues([Relation::class, 'createFromDiscriminatorValue'])),
            'set' => fn(ParseNode $n) => $o->setSet($n->getObjectValue([Set::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the labels property value. Label metadata for a term.
     * @return array<LocalizedLabel>|null
    */
    public function getLabels(): ?array {
        return $this->labels;
    }

    /**
     * Gets the lastModifiedDateTime property value. Last date and time of term modification. Read-only.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->lastModifiedDateTime;
    }

    /**
     * Gets the properties property value. Collection of properties on the term.
     * @return array<KeyValue>|null
    */
    public function getProperties(): ?array {
        return $this->properties;
    }

    /**
     * Gets the relations property value. To indicate which terms are related to the current term as either pinned or reused.
     * @return array<Relation>|null
    */
    public function getRelations(): ?array {
        return $this->relations;
    }

    /**
     * Gets the set property value. The [set] in which the term is created.
     * @return Set|null
    */
    public function getSet(): ?Set {
        return $this->set;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('children', $this->children);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeCollectionOfObjectValues('descriptions', $this->descriptions);
        $writer->writeCollectionOfObjectValues('labels', $this->labels);
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->lastModifiedDateTime);
        $writer->writeCollectionOfObjectValues('properties', $this->properties);
        $writer->writeCollectionOfObjectValues('relations', $this->relations);
        $writer->writeObjectValue('set', $this->set);
    }

    /**
     * Sets the children property value. Children of current term.
     *  @param array<Term>|null $value Value to set for the children property.
    */
    public function setChildren(?array $value ): void {
        $this->children = $value;
    }

    /**
     * Sets the createdDateTime property value. Date and time of term creation. Read-only.
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the descriptions property value. Description about term that is dependent on the languageTag.
     *  @param array<LocalizedDescription>|null $value Value to set for the descriptions property.
    */
    public function setDescriptions(?array $value ): void {
        $this->descriptions = $value;
    }

    /**
     * Sets the labels property value. Label metadata for a term.
     *  @param array<LocalizedLabel>|null $value Value to set for the labels property.
    */
    public function setLabels(?array $value ): void {
        $this->labels = $value;
    }

    /**
     * Sets the lastModifiedDateTime property value. Last date and time of term modification. Read-only.
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value ): void {
        $this->lastModifiedDateTime = $value;
    }

    /**
     * Sets the properties property value. Collection of properties on the term.
     *  @param array<KeyValue>|null $value Value to set for the properties property.
    */
    public function setProperties(?array $value ): void {
        $this->properties = $value;
    }

    /**
     * Sets the relations property value. To indicate which terms are related to the current term as either pinned or reused.
     *  @param array<Relation>|null $value Value to set for the relations property.
    */
    public function setRelations(?array $value ): void {
        $this->relations = $value;
    }

    /**
     * Sets the set property value. The [set] in which the term is created.
     *  @param Set|null $value Value to set for the set property.
    */
    public function setSet(?Set $value ): void {
        $this->set = $value;
    }

}
