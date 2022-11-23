<?php

namespace Microsoft\Graph\Generated\Models\TermStore;

use Microsoft\Graph\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Store extends Entity implements Parsable 
{
    /**
     * Instantiates a new store and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Store
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Store {
        return new Store();
    }

    /**
     * Gets the defaultLanguageTag property value. Default language of the term store.
     * @return string|null
    */
    public function getDefaultLanguageTag(): ?string {
        return $this->getBackingStore()->get('defaultLanguageTag');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'defaultLanguageTag' => fn(ParseNode $n) => $o->setDefaultLanguageTag($n->getStringValue()),
            'groups' => fn(ParseNode $n) => $o->setGroups($n->getCollectionOfObjectValues([Group::class, 'createFromDiscriminatorValue'])),
            'languageTags' => fn(ParseNode $n) => $o->setLanguageTags($n->getCollectionOfPrimitiveValues()),
            'sets' => fn(ParseNode $n) => $o->setSets($n->getCollectionOfObjectValues([Set::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the groups property value. Collection of all groups available in the term store.
     * @return array<Group>|null
    */
    public function getGroups(): ?array {
        return $this->getBackingStore()->get('groups');
    }

    /**
     * Gets the languageTags property value. List of languages for the term store.
     * @return array<string>|null
    */
    public function getLanguageTags(): ?array {
        return $this->getBackingStore()->get('languageTags');
    }

    /**
     * Gets the sets property value. Collection of all sets available in the term store. This relationship can only be used to load a specific term set.
     * @return array<Set>|null
    */
    public function getSets(): ?array {
        return $this->getBackingStore()->get('sets');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('defaultLanguageTag', $this->getDefaultLanguageTag());
        $writer->writeCollectionOfObjectValues('groups', $this->getGroups());
        $writer->writeCollectionOfPrimitiveValues('languageTags', $this->getLanguageTags());
        $writer->writeCollectionOfObjectValues('sets', $this->getSets());
    }

    /**
     * Sets the defaultLanguageTag property value. Default language of the term store.
     *  @param string|null $value Value to set for the defaultLanguageTag property.
    */
    public function setDefaultLanguageTag(?string $value): void {
        $this->getBackingStore()->set('defaultLanguageTag', $value);
    }

    /**
     * Sets the groups property value. Collection of all groups available in the term store.
     *  @param array<Group>|null $value Value to set for the groups property.
    */
    public function setGroups(?array $value): void {
        $this->getBackingStore()->set('groups', $value);
    }

    /**
     * Sets the languageTags property value. List of languages for the term store.
     *  @param array<string>|null $value Value to set for the languageTags property.
    */
    public function setLanguageTags(?array $value): void {
        $this->getBackingStore()->set('languageTags', $value);
    }

    /**
     * Sets the sets property value. Collection of all sets available in the term store. This relationship can only be used to load a specific term set.
     *  @param array<Set>|null $value Value to set for the sets property.
    */
    public function setSets(?array $value): void {
        $this->getBackingStore()->set('sets', $value);
    }

}
