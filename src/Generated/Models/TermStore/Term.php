<?php

namespace Microsoft\Graph\Generated\Models\TermStore;

use DateTime;
use Microsoft\Graph\Generated\Models\Entity;
use Microsoft\Graph\Generated\Models\KeyValue;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class Term extends Entity implements Parsable 
{
    /**
     * Instantiates a new term and sets the default values.
    */
    public function __construct() {
        parent::__construct();
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
        $val = $this->getBackingStore()->get('children');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Term::class);
            /** @var array<Term>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'children'");
    }

    /**
     * Gets the createdDateTime property value. Date and time of term creation. Read-only.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('createdDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdDateTime'");
    }

    /**
     * Gets the descriptions property value. Description about term that is dependent on the languageTag.
     * @return array<LocalizedDescription>|null
    */
    public function getDescriptions(): ?array {
        $val = $this->getBackingStore()->get('descriptions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, LocalizedDescription::class);
            /** @var array<LocalizedDescription>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'descriptions'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
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
        $val = $this->getBackingStore()->get('labels');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, LocalizedLabel::class);
            /** @var array<LocalizedLabel>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'labels'");
    }

    /**
     * Gets the lastModifiedDateTime property value. Last date and time of term modification. Read-only.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastModifiedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastModifiedDateTime'");
    }

    /**
     * Gets the properties property value. Collection of properties on the term.
     * @return array<KeyValue>|null
    */
    public function getProperties(): ?array {
        $val = $this->getBackingStore()->get('properties');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, KeyValue::class);
            /** @var array<KeyValue>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'properties'");
    }

    /**
     * Gets the relations property value. To indicate which terms are related to the current term as either pinned or reused.
     * @return array<Relation>|null
    */
    public function getRelations(): ?array {
        $val = $this->getBackingStore()->get('relations');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Relation::class);
            /** @var array<Relation>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'relations'");
    }

    /**
     * Gets the set property value. The [set] in which the term is created.
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('children', $this->getChildren());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeCollectionOfObjectValues('descriptions', $this->getDescriptions());
        $writer->writeCollectionOfObjectValues('labels', $this->getLabels());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeCollectionOfObjectValues('properties', $this->getProperties());
        $writer->writeCollectionOfObjectValues('relations', $this->getRelations());
        $writer->writeObjectValue('set', $this->getSet());
    }

    /**
     * Sets the children property value. Children of current term.
     * @param array<Term>|null $value Value to set for the children property.
    */
    public function setChildren(?array $value): void {
        $this->getBackingStore()->set('children', $value);
    }

    /**
     * Sets the createdDateTime property value. Date and time of term creation. Read-only.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the descriptions property value. Description about term that is dependent on the languageTag.
     * @param array<LocalizedDescription>|null $value Value to set for the descriptions property.
    */
    public function setDescriptions(?array $value): void {
        $this->getBackingStore()->set('descriptions', $value);
    }

    /**
     * Sets the labels property value. Label metadata for a term.
     * @param array<LocalizedLabel>|null $value Value to set for the labels property.
    */
    public function setLabels(?array $value): void {
        $this->getBackingStore()->set('labels', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. Last date and time of term modification. Read-only.
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the properties property value. Collection of properties on the term.
     * @param array<KeyValue>|null $value Value to set for the properties property.
    */
    public function setProperties(?array $value): void {
        $this->getBackingStore()->set('properties', $value);
    }

    /**
     * Sets the relations property value. To indicate which terms are related to the current term as either pinned or reused.
     * @param array<Relation>|null $value Value to set for the relations property.
    */
    public function setRelations(?array $value): void {
        $this->getBackingStore()->set('relations', $value);
    }

    /**
     * Sets the set property value. The [set] in which the term is created.
     * @param Set|null $value Value to set for the set property.
    */
    public function setSet(?Set $value): void {
        $this->getBackingStore()->set('set', $value);
    }

}
