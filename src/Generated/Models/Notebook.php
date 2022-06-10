<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Notebook extends OnenoteEntityHierarchyModel implements Parsable 
{
    /**
     * @var bool|null $isDefault Indicates whether this is the user's default notebook. Read-only.
    */
    private ?bool $isDefault = null;
    
    /**
     * @var bool|null $isShared Indicates whether the notebook is shared. If true, the contents of the notebook can be seen by people other than the owner. Read-only.
    */
    private ?bool $isShared = null;
    
    /**
     * @var NotebookLinks|null $links Links for opening the notebook. The oneNoteClientURL link opens the notebook in the OneNote native client if it's installed. The oneNoteWebURL link opens the notebook in OneNote on the web.
    */
    private ?NotebookLinks $links = null;
    
    /**
     * @var array<SectionGroup>|null $sectionGroups The section groups in the notebook. Read-only. Nullable.
    */
    private ?array $sectionGroups = null;
    
    /**
     * @var string|null $sectionGroupsUrl The URL for the sectionGroups navigation property, which returns all the section groups in the notebook. Read-only.
    */
    private ?string $sectionGroupsUrl = null;
    
    /**
     * @var array<OnenoteSection>|null $sections The sections in the notebook. Read-only. Nullable.
    */
    private ?array $sections = null;
    
    /**
     * @var string|null $sectionsUrl The URL for the sections navigation property, which returns all the sections in the notebook. Read-only.
    */
    private ?string $sectionsUrl = null;
    
    /**
     * @var OnenoteUserRole|null $userRole Possible values are: Owner, Contributor, Reader, None. Owner represents owner-level access to the notebook. Contributor represents read/write access to the notebook. Reader represents read-only access to the notebook. Read-only.
    */
    private ?OnenoteUserRole $userRole = null;
    
    /**
     * Instantiates a new Notebook and sets the default values.
    */
    public function __construct() {
        parent::__construct();
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
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'isDefault' => function (ParseNode $n) use ($o) { $o->setIsDefault($n->getBooleanValue()); },
            'isShared' => function (ParseNode $n) use ($o) { $o->setIsShared($n->getBooleanValue()); },
            'links' => function (ParseNode $n) use ($o) { $o->setLinks($n->getObjectValue(array(NotebookLinks::class, 'createFromDiscriminatorValue'))); },
            'sectionGroups' => function (ParseNode $n) use ($o) { $o->setSectionGroups($n->getCollectionOfObjectValues(array(SectionGroup::class, 'createFromDiscriminatorValue'))); },
            'sectionGroupsUrl' => function (ParseNode $n) use ($o) { $o->setSectionGroupsUrl($n->getStringValue()); },
            'sections' => function (ParseNode $n) use ($o) { $o->setSections($n->getCollectionOfObjectValues(array(OnenoteSection::class, 'createFromDiscriminatorValue'))); },
            'sectionsUrl' => function (ParseNode $n) use ($o) { $o->setSectionsUrl($n->getStringValue()); },
            'userRole' => function (ParseNode $n) use ($o) { $o->setUserRole($n->getEnumValue(OnenoteUserRole::class)); },
        ]);
    }

    /**
     * Gets the isDefault property value. Indicates whether this is the user's default notebook. Read-only.
     * @return bool|null
    */
    public function getIsDefault(): ?bool {
        return $this->isDefault;
    }

    /**
     * Gets the isShared property value. Indicates whether the notebook is shared. If true, the contents of the notebook can be seen by people other than the owner. Read-only.
     * @return bool|null
    */
    public function getIsShared(): ?bool {
        return $this->isShared;
    }

    /**
     * Gets the links property value. Links for opening the notebook. The oneNoteClientURL link opens the notebook in the OneNote native client if it's installed. The oneNoteWebURL link opens the notebook in OneNote on the web.
     * @return NotebookLinks|null
    */
    public function getLinks(): ?NotebookLinks {
        return $this->links;
    }

    /**
     * Gets the sectionGroups property value. The section groups in the notebook. Read-only. Nullable.
     * @return array<SectionGroup>|null
    */
    public function getSectionGroups(): ?array {
        return $this->sectionGroups;
    }

    /**
     * Gets the sectionGroupsUrl property value. The URL for the sectionGroups navigation property, which returns all the section groups in the notebook. Read-only.
     * @return string|null
    */
    public function getSectionGroupsUrl(): ?string {
        return $this->sectionGroupsUrl;
    }

    /**
     * Gets the sections property value. The sections in the notebook. Read-only. Nullable.
     * @return array<OnenoteSection>|null
    */
    public function getSections(): ?array {
        return $this->sections;
    }

    /**
     * Gets the sectionsUrl property value. The URL for the sections navigation property, which returns all the sections in the notebook. Read-only.
     * @return string|null
    */
    public function getSectionsUrl(): ?string {
        return $this->sectionsUrl;
    }

    /**
     * Gets the userRole property value. Possible values are: Owner, Contributor, Reader, None. Owner represents owner-level access to the notebook. Contributor represents read/write access to the notebook. Reader represents read-only access to the notebook. Read-only.
     * @return OnenoteUserRole|null
    */
    public function getUserRole(): ?OnenoteUserRole {
        return $this->userRole;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('isDefault', $this->isDefault);
        $writer->writeBooleanValue('isShared', $this->isShared);
        $writer->writeObjectValue('links', $this->links);
        $writer->writeCollectionOfObjectValues('sectionGroups', $this->sectionGroups);
        $writer->writeStringValue('sectionGroupsUrl', $this->sectionGroupsUrl);
        $writer->writeCollectionOfObjectValues('sections', $this->sections);
        $writer->writeStringValue('sectionsUrl', $this->sectionsUrl);
        $writer->writeEnumValue('userRole', $this->userRole);
    }

    /**
     * Sets the isDefault property value. Indicates whether this is the user's default notebook. Read-only.
     *  @param bool|null $value Value to set for the isDefault property.
    */
    public function setIsDefault(?bool $value ): void {
        $this->isDefault = $value;
    }

    /**
     * Sets the isShared property value. Indicates whether the notebook is shared. If true, the contents of the notebook can be seen by people other than the owner. Read-only.
     *  @param bool|null $value Value to set for the isShared property.
    */
    public function setIsShared(?bool $value ): void {
        $this->isShared = $value;
    }

    /**
     * Sets the links property value. Links for opening the notebook. The oneNoteClientURL link opens the notebook in the OneNote native client if it's installed. The oneNoteWebURL link opens the notebook in OneNote on the web.
     *  @param NotebookLinks|null $value Value to set for the links property.
    */
    public function setLinks(?NotebookLinks $value ): void {
        $this->links = $value;
    }

    /**
     * Sets the sectionGroups property value. The section groups in the notebook. Read-only. Nullable.
     *  @param array<SectionGroup>|null $value Value to set for the sectionGroups property.
    */
    public function setSectionGroups(?array $value ): void {
        $this->sectionGroups = $value;
    }

    /**
     * Sets the sectionGroupsUrl property value. The URL for the sectionGroups navigation property, which returns all the section groups in the notebook. Read-only.
     *  @param string|null $value Value to set for the sectionGroupsUrl property.
    */
    public function setSectionGroupsUrl(?string $value ): void {
        $this->sectionGroupsUrl = $value;
    }

    /**
     * Sets the sections property value. The sections in the notebook. Read-only. Nullable.
     *  @param array<OnenoteSection>|null $value Value to set for the sections property.
    */
    public function setSections(?array $value ): void {
        $this->sections = $value;
    }

    /**
     * Sets the sectionsUrl property value. The URL for the sections navigation property, which returns all the sections in the notebook. Read-only.
     *  @param string|null $value Value to set for the sectionsUrl property.
    */
    public function setSectionsUrl(?string $value ): void {
        $this->sectionsUrl = $value;
    }

    /**
     * Sets the userRole property value. Possible values are: Owner, Contributor, Reader, None. Owner represents owner-level access to the notebook. Contributor represents read/write access to the notebook. Reader represents read-only access to the notebook. Read-only.
     *  @param OnenoteUserRole|null $value Value to set for the userRole property.
    */
    public function setUserRole(?OnenoteUserRole $value ): void {
        $this->userRole = $value;
    }

}
