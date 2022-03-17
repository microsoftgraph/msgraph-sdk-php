<?php

namespace Microsoft\Graph\Generated\Models\Microsoft\Graph\TermStore;

use DateTime;
use Microsoft\Graph\Generated\Models\Microsoft\Graph\Entity;
use Microsoft\Graph\Generated\Models\Microsoft\Graph\KeyValue;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Set extends Entity 
{
    /** @var array<Term>|null $children Children terms of set in term [store]. */
    private ?array $children = null;
    
    /** @var DateTime|null $createdDateTime Date and time of set creation. Read-only. */
    private ?DateTime $createdDateTime = null;
    
    /** @var string|null $description Description that gives details on the term usage. */
    private ?string $description = null;
    
    /** @var array<LocalizedName>|null $localizedNames Name of the set for each languageTag. */
    private ?array $localizedNames = null;
    
    /** @var Group|null $parentGroup  */
    private ?Group $parentGroup = null;
    
    /** @var array<KeyValue>|null $properties Custom properties for the set. */
    private ?array $properties = null;
    
    /** @var array<Relation>|null $relations Indicates which terms have been pinned or reused directly under the set. */
    private ?array $relations = null;
    
    /** @var array<Term>|null $terms All the terms under the set. */
    private ?array $terms = null;
    
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
    public function createFromDiscriminatorValue(ParseNode $parseNode): Set {
        return new Set();
    }

    /**
     * Gets the children property value. Children terms of set in term [store].
     * @return array<Term>|null
    */
    public function getChildren(): ?array {
        return $this->children;
    }

    /**
     * Gets the createdDateTime property value. Date and time of set creation. Read-only.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * Gets the description property value. Description that gives details on the term usage.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'children' => function (self $o, ParseNode $n) { $o->setChildren($n->getCollectionOfObjectValues(Term::class)); },
            'createdDateTime' => function (self $o, ParseNode $n) { $o->setCreatedDateTime($n->getDateTimeValue()); },
            'description' => function (self $o, ParseNode $n) { $o->setDescription($n->getStringValue()); },
            'localizedNames' => function (self $o, ParseNode $n) { $o->setLocalizedNames($n->getCollectionOfObjectValues(LocalizedName::class)); },
            'parentGroup' => function (self $o, ParseNode $n) { $o->setParentGroup($n->getObjectValue(Group::class)); },
            'properties' => function (self $o, ParseNode $n) { $o->setProperties($n->getCollectionOfObjectValues(KeyValue::class)); },
            'relations' => function (self $o, ParseNode $n) { $o->setRelations($n->getCollectionOfObjectValues(Relation::class)); },
            'terms' => function (self $o, ParseNode $n) { $o->setTerms($n->getCollectionOfObjectValues(Term::class)); },
        ]);
    }

    /**
     * Gets the localizedNames property value. Name of the set for each languageTag.
     * @return array<LocalizedName>|null
    */
    public function getLocalizedNames(): ?array {
        return $this->localizedNames;
    }

    /**
     * Gets the parentGroup property value. 
     * @return Group|null
    */
    public function getParentGroup(): ?Group {
        return $this->parentGroup;
    }

    /**
     * Gets the properties property value. Custom properties for the set.
     * @return array<KeyValue>|null
    */
    public function getProperties(): ?array {
        return $this->properties;
    }

    /**
     * Gets the relations property value. Indicates which terms have been pinned or reused directly under the set.
     * @return array<Relation>|null
    */
    public function getRelations(): ?array {
        return $this->relations;
    }

    /**
     * Gets the terms property value. All the terms under the set.
     * @return array<Term>|null
    */
    public function getTerms(): ?array {
        return $this->terms;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('children', $this->children);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeStringValue('description', $this->description);
        $writer->writeCollectionOfObjectValues('localizedNames', $this->localizedNames);
        $writer->writeObjectValue('parentGroup', $this->parentGroup);
        $writer->writeCollectionOfObjectValues('properties', $this->properties);
        $writer->writeCollectionOfObjectValues('relations', $this->relations);
        $writer->writeCollectionOfObjectValues('terms', $this->terms);
    }

    /**
     * Sets the children property value. Children terms of set in term [store].
     *  @param array<Term>|null $value Value to set for the children property.
    */
    public function setChildren(?array $value ): void {
        $this->children = $value;
    }

    /**
     * Sets the createdDateTime property value. Date and time of set creation. Read-only.
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the description property value. Description that gives details on the term usage.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the localizedNames property value. Name of the set for each languageTag.
     *  @param array<LocalizedName>|null $value Value to set for the localizedNames property.
    */
    public function setLocalizedNames(?array $value ): void {
        $this->localizedNames = $value;
    }

    /**
     * Sets the parentGroup property value. 
     *  @param Group|null $value Value to set for the parentGroup property.
    */
    public function setParentGroup(?Group $value ): void {
        $this->parentGroup = $value;
    }

    /**
     * Sets the properties property value. Custom properties for the set.
     *  @param array<KeyValue>|null $value Value to set for the properties property.
    */
    public function setProperties(?array $value ): void {
        $this->properties = $value;
    }

    /**
     * Sets the relations property value. Indicates which terms have been pinned or reused directly under the set.
     *  @param array<Relation>|null $value Value to set for the relations property.
    */
    public function setRelations(?array $value ): void {
        $this->relations = $value;
    }

    /**
     * Sets the terms property value. All the terms under the set.
     *  @param array<Term>|null $value Value to set for the terms property.
    */
    public function setTerms(?array $value ): void {
        $this->terms = $value;
    }

}
