<?php

namespace Microsoft\Graph\Generated\Models\TermStore;

use DateTime;
use Microsoft\Graph\Generated\Models\Entity;
use Microsoft\Graph\Generated\Models\KeyValue;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class Set extends Entity implements Parsable 
{
    /**
     * Instantiates a new Set and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Set
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Set {
        return new Set();
    }

    /**
     * Gets the children property value. Children terms of set in term [store].
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
     * Gets the createdDateTime property value. Date and time of set creation. Read-only.
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
     * Gets the description property value. Description that gives details on the term usage.
     * @return string|null
    */
    public function getDescription(): ?string {
        $val = $this->getBackingStore()->get('description');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'description'");
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
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'localizedNames' => fn(ParseNode $n) => $o->setLocalizedNames($n->getCollectionOfObjectValues([LocalizedName::class, 'createFromDiscriminatorValue'])),
            'parentGroup' => fn(ParseNode $n) => $o->setParentGroup($n->getObjectValue([Group::class, 'createFromDiscriminatorValue'])),
            'properties' => fn(ParseNode $n) => $o->setProperties($n->getCollectionOfObjectValues([KeyValue::class, 'createFromDiscriminatorValue'])),
            'relations' => fn(ParseNode $n) => $o->setRelations($n->getCollectionOfObjectValues([Relation::class, 'createFromDiscriminatorValue'])),
            'terms' => fn(ParseNode $n) => $o->setTerms($n->getCollectionOfObjectValues([Term::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the localizedNames property value. Name of the set for each languageTag.
     * @return array<LocalizedName>|null
    */
    public function getLocalizedNames(): ?array {
        $val = $this->getBackingStore()->get('localizedNames');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, LocalizedName::class);
            /** @var array<LocalizedName>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'localizedNames'");
    }

    /**
     * Gets the parentGroup property value. The parentGroup property
     * @return Group|null
    */
    public function getParentGroup(): ?Group {
        $val = $this->getBackingStore()->get('parentGroup');
        if (is_null($val) || $val instanceof Group) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'parentGroup'");
    }

    /**
     * Gets the properties property value. Custom properties for the set.
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
     * Gets the relations property value. Indicates which terms have been pinned or reused directly under the set.
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
     * Gets the terms property value. All the terms under the set.
     * @return array<Term>|null
    */
    public function getTerms(): ?array {
        $val = $this->getBackingStore()->get('terms');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Term::class);
            /** @var array<Term>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'terms'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('children', $this->getChildren());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeCollectionOfObjectValues('localizedNames', $this->getLocalizedNames());
        $writer->writeObjectValue('parentGroup', $this->getParentGroup());
        $writer->writeCollectionOfObjectValues('properties', $this->getProperties());
        $writer->writeCollectionOfObjectValues('relations', $this->getRelations());
        $writer->writeCollectionOfObjectValues('terms', $this->getTerms());
    }

    /**
     * Sets the children property value. Children terms of set in term [store].
     * @param array<Term>|null $value Value to set for the children property.
    */
    public function setChildren(?array $value): void {
        $this->getBackingStore()->set('children', $value);
    }

    /**
     * Sets the createdDateTime property value. Date and time of set creation. Read-only.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the description property value. Description that gives details on the term usage.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the localizedNames property value. Name of the set for each languageTag.
     * @param array<LocalizedName>|null $value Value to set for the localizedNames property.
    */
    public function setLocalizedNames(?array $value): void {
        $this->getBackingStore()->set('localizedNames', $value);
    }

    /**
     * Sets the parentGroup property value. The parentGroup property
     * @param Group|null $value Value to set for the parentGroup property.
    */
    public function setParentGroup(?Group $value): void {
        $this->getBackingStore()->set('parentGroup', $value);
    }

    /**
     * Sets the properties property value. Custom properties for the set.
     * @param array<KeyValue>|null $value Value to set for the properties property.
    */
    public function setProperties(?array $value): void {
        $this->getBackingStore()->set('properties', $value);
    }

    /**
     * Sets the relations property value. Indicates which terms have been pinned or reused directly under the set.
     * @param array<Relation>|null $value Value to set for the relations property.
    */
    public function setRelations(?array $value): void {
        $this->getBackingStore()->set('relations', $value);
    }

    /**
     * Sets the terms property value. All the terms under the set.
     * @param array<Term>|null $value Value to set for the terms property.
    */
    public function setTerms(?array $value): void {
        $this->getBackingStore()->set('terms', $value);
    }

}
