<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Graph\Generated\Models\Search\Acronym;
use Microsoft\Graph\Generated\Models\Search\Bookmark;
use Microsoft\Graph\Generated\Models\Search\Qna;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class SearchEntity extends Entity implements Parsable 
{
    /**
     * Instantiates a new SearchEntity and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SearchEntity
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SearchEntity {
        return new SearchEntity();
    }

    /**
     * Gets the acronyms property value. The acronyms property
     * @return array<Acronym>|null
    */
    public function getAcronyms(): ?array {
        $val = $this->getBackingStore()->get('acronyms');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Acronym::class);
            /** @var array<Acronym>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'acronyms'");
    }

    /**
     * Gets the bookmarks property value. The bookmarks property
     * @return array<Bookmark>|null
    */
    public function getBookmarks(): ?array {
        $val = $this->getBackingStore()->get('bookmarks');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Bookmark::class);
            /** @var array<Bookmark>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'bookmarks'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'acronyms' => fn(ParseNode $n) => $o->setAcronyms($n->getCollectionOfObjectValues([Acronym::class, 'createFromDiscriminatorValue'])),
            'bookmarks' => fn(ParseNode $n) => $o->setBookmarks($n->getCollectionOfObjectValues([Bookmark::class, 'createFromDiscriminatorValue'])),
            'qnas' => fn(ParseNode $n) => $o->setQnas($n->getCollectionOfObjectValues([Qna::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the qnas property value. The qnas property
     * @return array<Qna>|null
    */
    public function getQnas(): ?array {
        $val = $this->getBackingStore()->get('qnas');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Qna::class);
            /** @var array<Qna>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'qnas'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('acronyms', $this->getAcronyms());
        $writer->writeCollectionOfObjectValues('bookmarks', $this->getBookmarks());
        $writer->writeCollectionOfObjectValues('qnas', $this->getQnas());
    }

    /**
     * Sets the acronyms property value. The acronyms property
     * @param array<Acronym>|null $value Value to set for the acronyms property.
    */
    public function setAcronyms(?array $value): void {
        $this->getBackingStore()->set('acronyms', $value);
    }

    /**
     * Sets the bookmarks property value. The bookmarks property
     * @param array<Bookmark>|null $value Value to set for the bookmarks property.
    */
    public function setBookmarks(?array $value): void {
        $this->getBackingStore()->set('bookmarks', $value);
    }

    /**
     * Sets the qnas property value. The qnas property
     * @param array<Qna>|null $value Value to set for the qnas property.
    */
    public function setQnas(?array $value): void {
        $this->getBackingStore()->set('qnas', $value);
    }

}
