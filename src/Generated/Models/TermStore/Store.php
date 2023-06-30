<?php

namespace Microsoft\Graph\Generated\Models\TermStore;

use Microsoft\Graph\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

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
        $val = $this->getBackingStore()->get('defaultLanguageTag');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defaultLanguageTag'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'defaultLanguageTag' => fn(ParseNode $n) => $o->setDefaultLanguageTag($n->getStringValue()),
            'groups' => fn(ParseNode $n) => $o->setGroups($n->getCollectionOfObjectValues([Group::class, 'createFromDiscriminatorValue'])),
            'languageTags' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setLanguageTags($val);
            },
            'sets' => fn(ParseNode $n) => $o->setSets($n->getCollectionOfObjectValues([Set::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the groups property value. Collection of all groups available in the term store.
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
     * Gets the languageTags property value. List of languages for the term store.
     * @return array<string>|null
    */
    public function getLanguageTags(): ?array {
        $val = $this->getBackingStore()->get('languageTags');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'languageTags'");
    }

    /**
     * Gets the sets property value. Collection of all sets available in the term store. This relationship can only be used to load a specific term set.
     * @return array<Set>|null
    */
    public function getSets(): ?array {
        $val = $this->getBackingStore()->get('sets');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Set::class);
            /** @var array<Set>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sets'");
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
     * @param string|null $value Value to set for the defaultLanguageTag property.
    */
    public function setDefaultLanguageTag(?string $value): void {
        $this->getBackingStore()->set('defaultLanguageTag', $value);
    }

    /**
     * Sets the groups property value. Collection of all groups available in the term store.
     * @param array<Group>|null $value Value to set for the groups property.
    */
    public function setGroups(?array $value): void {
        $this->getBackingStore()->set('groups', $value);
    }

    /**
     * Sets the languageTags property value. List of languages for the term store.
     * @param array<string>|null $value Value to set for the languageTags property.
    */
    public function setLanguageTags(?array $value): void {
        $this->getBackingStore()->set('languageTags', $value);
    }

    /**
     * Sets the sets property value. Collection of all sets available in the term store. This relationship can only be used to load a specific term set.
     * @param array<Set>|null $value Value to set for the sets property.
    */
    public function setSets(?array $value): void {
        $this->getBackingStore()->set('sets', $value);
    }

}
