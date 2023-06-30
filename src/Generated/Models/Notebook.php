<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class Notebook extends OnenoteEntityHierarchyModel implements Parsable 
{
    /**
     * Instantiates a new Notebook and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.notebook');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Notebook
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Notebook {
        return new Notebook();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'isDefault' => fn(ParseNode $n) => $o->setIsDefault($n->getBooleanValue()),
            'isShared' => fn(ParseNode $n) => $o->setIsShared($n->getBooleanValue()),
            'links' => fn(ParseNode $n) => $o->setLinks($n->getObjectValue([NotebookLinks::class, 'createFromDiscriminatorValue'])),
            'sectionGroups' => fn(ParseNode $n) => $o->setSectionGroups($n->getCollectionOfObjectValues([SectionGroup::class, 'createFromDiscriminatorValue'])),
            'sectionGroupsUrl' => fn(ParseNode $n) => $o->setSectionGroupsUrl($n->getStringValue()),
            'sections' => fn(ParseNode $n) => $o->setSections($n->getCollectionOfObjectValues([OnenoteSection::class, 'createFromDiscriminatorValue'])),
            'sectionsUrl' => fn(ParseNode $n) => $o->setSectionsUrl($n->getStringValue()),
            'userRole' => fn(ParseNode $n) => $o->setUserRole($n->getEnumValue(OnenoteUserRole::class)),
        ]);
    }

    /**
     * Gets the isDefault property value. Indicates whether this is the user's default notebook. Read-only.
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
     * Gets the isShared property value. Indicates whether the notebook is shared. If true, the contents of the notebook can be seen by people other than the owner. Read-only.
     * @return bool|null
    */
    public function getIsShared(): ?bool {
        $val = $this->getBackingStore()->get('isShared');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isShared'");
    }

    /**
     * Gets the links property value. Links for opening the notebook. The oneNoteClientURL link opens the notebook in the OneNote native client if it's installed. The oneNoteWebURL link opens the notebook in OneNote on the web.
     * @return NotebookLinks|null
    */
    public function getLinks(): ?NotebookLinks {
        $val = $this->getBackingStore()->get('links');
        if (is_null($val) || $val instanceof NotebookLinks) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'links'");
    }

    /**
     * Gets the sectionGroups property value. The section groups in the notebook. Read-only. Nullable.
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
     * Gets the sectionGroupsUrl property value. The URL for the sectionGroups navigation property, which returns all the section groups in the notebook. Read-only.
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
     * Gets the sections property value. The sections in the notebook. Read-only. Nullable.
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
     * Gets the sectionsUrl property value. The URL for the sections navigation property, which returns all the sections in the notebook. Read-only.
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
     * Gets the userRole property value. Possible values are: Owner, Contributor, Reader, None. Owner represents owner-level access to the notebook. Contributor represents read/write access to the notebook. Reader represents read-only access to the notebook. Read-only.
     * @return OnenoteUserRole|null
    */
    public function getUserRole(): ?OnenoteUserRole {
        $val = $this->getBackingStore()->get('userRole');
        if (is_null($val) || $val instanceof OnenoteUserRole) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userRole'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('isDefault', $this->getIsDefault());
        $writer->writeBooleanValue('isShared', $this->getIsShared());
        $writer->writeObjectValue('links', $this->getLinks());
        $writer->writeCollectionOfObjectValues('sectionGroups', $this->getSectionGroups());
        $writer->writeStringValue('sectionGroupsUrl', $this->getSectionGroupsUrl());
        $writer->writeCollectionOfObjectValues('sections', $this->getSections());
        $writer->writeStringValue('sectionsUrl', $this->getSectionsUrl());
        $writer->writeEnumValue('userRole', $this->getUserRole());
    }

    /**
     * Sets the isDefault property value. Indicates whether this is the user's default notebook. Read-only.
     * @param bool|null $value Value to set for the isDefault property.
    */
    public function setIsDefault(?bool $value): void {
        $this->getBackingStore()->set('isDefault', $value);
    }

    /**
     * Sets the isShared property value. Indicates whether the notebook is shared. If true, the contents of the notebook can be seen by people other than the owner. Read-only.
     * @param bool|null $value Value to set for the isShared property.
    */
    public function setIsShared(?bool $value): void {
        $this->getBackingStore()->set('isShared', $value);
    }

    /**
     * Sets the links property value. Links for opening the notebook. The oneNoteClientURL link opens the notebook in the OneNote native client if it's installed. The oneNoteWebURL link opens the notebook in OneNote on the web.
     * @param NotebookLinks|null $value Value to set for the links property.
    */
    public function setLinks(?NotebookLinks $value): void {
        $this->getBackingStore()->set('links', $value);
    }

    /**
     * Sets the sectionGroups property value. The section groups in the notebook. Read-only. Nullable.
     * @param array<SectionGroup>|null $value Value to set for the sectionGroups property.
    */
    public function setSectionGroups(?array $value): void {
        $this->getBackingStore()->set('sectionGroups', $value);
    }

    /**
     * Sets the sectionGroupsUrl property value. The URL for the sectionGroups navigation property, which returns all the section groups in the notebook. Read-only.
     * @param string|null $value Value to set for the sectionGroupsUrl property.
    */
    public function setSectionGroupsUrl(?string $value): void {
        $this->getBackingStore()->set('sectionGroupsUrl', $value);
    }

    /**
     * Sets the sections property value. The sections in the notebook. Read-only. Nullable.
     * @param array<OnenoteSection>|null $value Value to set for the sections property.
    */
    public function setSections(?array $value): void {
        $this->getBackingStore()->set('sections', $value);
    }

    /**
     * Sets the sectionsUrl property value. The URL for the sections navigation property, which returns all the sections in the notebook. Read-only.
     * @param string|null $value Value to set for the sectionsUrl property.
    */
    public function setSectionsUrl(?string $value): void {
        $this->getBackingStore()->set('sectionsUrl', $value);
    }

    /**
     * Sets the userRole property value. Possible values are: Owner, Contributor, Reader, None. Owner represents owner-level access to the notebook. Contributor represents read/write access to the notebook. Reader represents read-only access to the notebook. Read-only.
     * @param OnenoteUserRole|null $value Value to set for the userRole property.
    */
    public function setUserRole(?OnenoteUserRole $value): void {
        $this->getBackingStore()->set('userRole', $value);
    }

}
