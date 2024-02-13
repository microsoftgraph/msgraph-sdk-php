<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class OnenoteSection extends OnenoteEntityHierarchyModel implements Parsable 
{
    /**
     * Instantiates a new OnenoteSection and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.onenoteSection');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OnenoteSection
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OnenoteSection {
        return new OnenoteSection();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'isDefault' => fn(ParseNode $n) => $o->setIsDefault($n->getBooleanValue()),
            'links' => fn(ParseNode $n) => $o->setLinks($n->getObjectValue([SectionLinks::class, 'createFromDiscriminatorValue'])),
            'pages' => fn(ParseNode $n) => $o->setPages($n->getCollectionOfObjectValues([OnenotePage::class, 'createFromDiscriminatorValue'])),
            'pagesUrl' => fn(ParseNode $n) => $o->setPagesUrl($n->getStringValue()),
            'parentNotebook' => fn(ParseNode $n) => $o->setParentNotebook($n->getObjectValue([Notebook::class, 'createFromDiscriminatorValue'])),
            'parentSectionGroup' => fn(ParseNode $n) => $o->setParentSectionGroup($n->getObjectValue([SectionGroup::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the isDefault property value. Indicates whether this is the user's default section. Read-only.
     * @return bool|null
    */
    public function getIsDefault(): ?bool {
        $val = $this->getBackingStore()->get('isDefault');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isDefault'");
    }

    /**
     * Gets the links property value. Links for opening the section. The oneNoteClientURL link opens the section in the OneNote native client if it's installed. The oneNoteWebURL link opens the section in OneNote on the web.
     * @return SectionLinks|null
    */
    public function getLinks(): ?SectionLinks {
        $val = $this->getBackingStore()->get('links');
        if (is_null($val) || $val instanceof SectionLinks) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'links'");
    }

    /**
     * Gets the pages property value. The collection of pages in the section.  Read-only. Nullable.
     * @return array<OnenotePage>|null
    */
    public function getPages(): ?array {
        $val = $this->getBackingStore()->get('pages');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, OnenotePage::class);
            /** @var array<OnenotePage>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'pages'");
    }

    /**
     * Gets the pagesUrl property value. The pages endpoint where you can get details for all the pages in the section. Read-only.
     * @return string|null
    */
    public function getPagesUrl(): ?string {
        $val = $this->getBackingStore()->get('pagesUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'pagesUrl'");
    }

    /**
     * Gets the parentNotebook property value. The notebook that contains the section.  Read-only.
     * @return Notebook|null
    */
    public function getParentNotebook(): ?Notebook {
        $val = $this->getBackingStore()->get('parentNotebook');
        if (is_null($val) || $val instanceof Notebook) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'parentNotebook'");
    }

    /**
     * Gets the parentSectionGroup property value. The section group that contains the section.  Read-only.
     * @return SectionGroup|null
    */
    public function getParentSectionGroup(): ?SectionGroup {
        $val = $this->getBackingStore()->get('parentSectionGroup');
        if (is_null($val) || $val instanceof SectionGroup) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'parentSectionGroup'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('isDefault', $this->getIsDefault());
        $writer->writeObjectValue('links', $this->getLinks());
        $writer->writeCollectionOfObjectValues('pages', $this->getPages());
        $writer->writeStringValue('pagesUrl', $this->getPagesUrl());
        $writer->writeObjectValue('parentNotebook', $this->getParentNotebook());
        $writer->writeObjectValue('parentSectionGroup', $this->getParentSectionGroup());
    }

    /**
     * Sets the isDefault property value. Indicates whether this is the user's default section. Read-only.
     * @param bool|null $value Value to set for the isDefault property.
    */
    public function setIsDefault(?bool $value): void {
        $this->getBackingStore()->set('isDefault', $value);
    }

    /**
     * Sets the links property value. Links for opening the section. The oneNoteClientURL link opens the section in the OneNote native client if it's installed. The oneNoteWebURL link opens the section in OneNote on the web.
     * @param SectionLinks|null $value Value to set for the links property.
    */
    public function setLinks(?SectionLinks $value): void {
        $this->getBackingStore()->set('links', $value);
    }

    /**
     * Sets the pages property value. The collection of pages in the section.  Read-only. Nullable.
     * @param array<OnenotePage>|null $value Value to set for the pages property.
    */
    public function setPages(?array $value): void {
        $this->getBackingStore()->set('pages', $value);
    }

    /**
     * Sets the pagesUrl property value. The pages endpoint where you can get details for all the pages in the section. Read-only.
     * @param string|null $value Value to set for the pagesUrl property.
    */
    public function setPagesUrl(?string $value): void {
        $this->getBackingStore()->set('pagesUrl', $value);
    }

    /**
     * Sets the parentNotebook property value. The notebook that contains the section.  Read-only.
     * @param Notebook|null $value Value to set for the parentNotebook property.
    */
    public function setParentNotebook(?Notebook $value): void {
        $this->getBackingStore()->set('parentNotebook', $value);
    }

    /**
     * Sets the parentSectionGroup property value. The section group that contains the section.  Read-only.
     * @param SectionGroup|null $value Value to set for the parentSectionGroup property.
    */
    public function setParentSectionGroup(?SectionGroup $value): void {
        $this->getBackingStore()->set('parentSectionGroup', $value);
    }

}
