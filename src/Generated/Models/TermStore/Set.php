<?php

namespace Microsoft\Graph\Generated\Models\TermStore;

use DateTime;
use Microsoft\Graph\Generated\Models\Entity;
use Microsoft\Graph\Generated\Models\KeyValue;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Set extends Entity implements Parsable 
{
    /**
     * Instantiates a new set and sets the default values.
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
        return $this->getBackingStore()->get('children');
    }

    /**
     * Gets the createdDateTime property value. Date and time of set creation. Read-only.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('createdDateTime');
    }

    /**
     * Gets the description property value. Description that gives details on the term usage.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->getBackingStore()->get('description');
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
        return $this->getBackingStore()->get('localizedNames');
    }

    /**
     * Gets the parentGroup property value. 
     * @return Group|null
    */
    public function getParentGroup(): ?Group {
        return $this->getBackingStore()->get('parentGroup');
    }

    /**
     * Gets the properties property value. Custom properties for the set.
     * @return array<KeyValue>|null
    */
    public function getProperties(): ?array {
        return $this->getBackingStore()->get('properties');
    }

    /**
     * Gets the relations property value. Indicates which terms have been pinned or reused directly under the set.
     * @return array<Relation>|null
    */
    public function getRelations(): ?array {
        return $this->getBackingStore()->get('relations');
    }

    /**
     * Gets the terms property value. All the terms under the set.
     * @return array<Term>|null
    */
    public function getTerms(): ?array {
        return $this->getBackingStore()->get('terms');
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
     * Sets the parentGroup property value. 
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
