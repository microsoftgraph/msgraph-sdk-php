<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class SectionGroup extends OnenoteEntityHierarchyModel implements Parsable 
{
    /**
     * Instantiates a new SectionGroup and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.sectionGroup');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SectionGroup
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SectionGroup {
        return new SectionGroup();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'parentNotebook' => fn(ParseNode $n) => $o->setParentNotebook($n->getObjectValue([Notebook::class, 'createFromDiscriminatorValue'])),
            'parentSectionGroup' => fn(ParseNode $n) => $o->setParentSectionGroup($n->getObjectValue([SectionGroup::class, 'createFromDiscriminatorValue'])),
            'sectionGroups' => fn(ParseNode $n) => $o->setSectionGroups($n->getCollectionOfObjectValues([SectionGroup::class, 'createFromDiscriminatorValue'])),
            'sectionGroupsUrl' => fn(ParseNode $n) => $o->setSectionGroupsUrl($n->getStringValue()),
            'sections' => fn(ParseNode $n) => $o->setSections($n->getCollectionOfObjectValues([OnenoteSection::class, 'createFromDiscriminatorValue'])),
            'sectionsUrl' => fn(ParseNode $n) => $o->setSectionsUrl($n->getStringValue()),
        ]);
    }

    /**
     * Gets the parentNotebook property value. The notebook that contains the section group. Read-only.
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
     * Gets the parentSectionGroup property value. The section group that contains the section group. Read-only.
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
     * Gets the sectionGroups property value. The section groups in the section. Read-only. Nullable.
     * @return array<SectionGroup>|null
    */
    public function getSectionGroups(): ?array {
        $val = $this->getBackingStore()->get('sectionGroups');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, SectionGroup::class);
            /** @var array<SectionGroup>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sectionGroups'");
    }

    /**
     * Gets the sectionGroupsUrl property value. The URL for the sectionGroups navigation property, which returns all the section groups in the section group. Read-only.
     * @return string|null
    */
    public function getSectionGroupsUrl(): ?string {
        $val = $this->getBackingStore()->get('sectionGroupsUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sectionGroupsUrl'");
    }

    /**
     * Gets the sections property value. The sections in the section group. Read-only. Nullable.
     * @return array<OnenoteSection>|null
    */
    public function getSections(): ?array {
        $val = $this->getBackingStore()->get('sections');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, OnenoteSection::class);
            /** @var array<OnenoteSection>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sections'");
    }

    /**
     * Gets the sectionsUrl property value. The URL for the sections navigation property, which returns all the sections in the section group. Read-only.
     * @return string|null
    */
    public function getSectionsUrl(): ?string {
        $val = $this->getBackingStore()->get('sectionsUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sectionsUrl'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('parentNotebook', $this->getParentNotebook());
        $writer->writeObjectValue('parentSectionGroup', $this->getParentSectionGroup());
        $writer->writeCollectionOfObjectValues('sectionGroups', $this->getSectionGroups());
        $writer->writeStringValue('sectionGroupsUrl', $this->getSectionGroupsUrl());
        $writer->writeCollectionOfObjectValues('sections', $this->getSections());
        $writer->writeStringValue('sectionsUrl', $this->getSectionsUrl());
    }

    /**
     * Sets the parentNotebook property value. The notebook that contains the section group. Read-only.
     * @param Notebook|null $value Value to set for the parentNotebook property.
    */
    public function setParentNotebook(?Notebook $value): void {
        $this->getBackingStore()->set('parentNotebook', $value);
    }

    /**
     * Sets the parentSectionGroup property value. The section group that contains the section group. Read-only.
     * @param SectionGroup|null $value Value to set for the parentSectionGroup property.
    */
    public function setParentSectionGroup(?SectionGroup $value): void {
        $this->getBackingStore()->set('parentSectionGroup', $value);
    }

    /**
     * Sets the sectionGroups property value. The section groups in the section. Read-only. Nullable.
     * @param array<SectionGroup>|null $value Value to set for the sectionGroups property.
    */
    public function setSectionGroups(?array $value): void {
        $this->getBackingStore()->set('sectionGroups', $value);
    }

    /**
     * Sets the sectionGroupsUrl property value. The URL for the sectionGroups navigation property, which returns all the section groups in the section group. Read-only.
     * @param string|null $value Value to set for the sectionGroupsUrl property.
    */
    public function setSectionGroupsUrl(?string $value): void {
        $this->getBackingStore()->set('sectionGroupsUrl', $value);
    }

    /**
     * Sets the sections property value. The sections in the section group. Read-only. Nullable.
     * @param array<OnenoteSection>|null $value Value to set for the sections property.
    */
    public function setSections(?array $value): void {
        $this->getBackingStore()->set('sections', $value);
    }

    /**
     * Sets the sectionsUrl property value. The URL for the sections navigation property, which returns all the sections in the section group. Read-only.
     * @param string|null $value Value to set for the sectionsUrl property.
    */
    public function setSectionsUrl(?string $value): void {
        $this->getBackingStore()->set('sectionsUrl', $value);
    }

}
