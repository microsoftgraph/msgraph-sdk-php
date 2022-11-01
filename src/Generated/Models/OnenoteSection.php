<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class OnenoteSection extends OnenoteEntityHierarchyModel implements Parsable 
{
    /**
     * @var bool|null $isDefault Indicates whether this is the user's default section. Read-only.
    */
    private ?bool $isDefault = null;
    
    /**
     * @var SectionLinks|null $links Links for opening the section. The oneNoteClientURL link opens the section in the OneNote native client if it's installed. The oneNoteWebURL link opens the section in OneNote on the web.
    */
    private ?SectionLinks $links = null;
    
    /**
     * @var array<OnenotePage>|null $pages The collection of pages in the section.  Read-only. Nullable.
    */
    private ?array $pages = null;
    
    /**
     * @var string|null $pagesUrl The pages endpoint where you can get details for all the pages in the section. Read-only.
    */
    private ?string $pagesUrl = null;
    
    /**
     * @var Notebook|null $parentNotebook The notebook that contains the section.  Read-only.
    */
    private ?Notebook $parentNotebook = null;
    
    /**
     * @var SectionGroup|null $parentSectionGroup The section group that contains the section.  Read-only.
    */
    private ?SectionGroup $parentSectionGroup = null;
    
    /**
     * Instantiates a new onenoteSection and sets the default values.
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
     * @return array<string, callable>
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
        return $this->isDefault;
    }

    /**
     * Gets the links property value. Links for opening the section. The oneNoteClientURL link opens the section in the OneNote native client if it's installed. The oneNoteWebURL link opens the section in OneNote on the web.
     * @return SectionLinks|null
    */
    public function getLinks(): ?SectionLinks {
        return $this->links;
    }

    /**
     * Gets the pages property value. The collection of pages in the section.  Read-only. Nullable.
     * @return array<OnenotePage>|null
    */
    public function getPages(): ?array {
        return $this->pages;
    }

    /**
     * Gets the pagesUrl property value. The pages endpoint where you can get details for all the pages in the section. Read-only.
     * @return string|null
    */
    public function getPagesUrl(): ?string {
        return $this->pagesUrl;
    }

    /**
     * Gets the parentNotebook property value. The notebook that contains the section.  Read-only.
     * @return Notebook|null
    */
    public function getParentNotebook(): ?Notebook {
        return $this->parentNotebook;
    }

    /**
     * Gets the parentSectionGroup property value. The section group that contains the section.  Read-only.
     * @return SectionGroup|null
    */
    public function getParentSectionGroup(): ?SectionGroup {
        return $this->parentSectionGroup;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('isDefault', $this->isDefault);
        $writer->writeObjectValue('links', $this->links);
        $writer->writeCollectionOfObjectValues('pages', $this->pages);
        $writer->writeStringValue('pagesUrl', $this->pagesUrl);
        $writer->writeObjectValue('parentNotebook', $this->parentNotebook);
        $writer->writeObjectValue('parentSectionGroup', $this->parentSectionGroup);
    }

    /**
     * Sets the isDefault property value. Indicates whether this is the user's default section. Read-only.
     *  @param bool|null $value Value to set for the isDefault property.
    */
    public function setIsDefault(?bool $value ): void {
        $this->isDefault = $value;
    }

    /**
     * Sets the links property value. Links for opening the section. The oneNoteClientURL link opens the section in the OneNote native client if it's installed. The oneNoteWebURL link opens the section in OneNote on the web.
     *  @param SectionLinks|null $value Value to set for the links property.
    */
    public function setLinks(?SectionLinks $value ): void {
        $this->links = $value;
    }

    /**
     * Sets the pages property value. The collection of pages in the section.  Read-only. Nullable.
     *  @param array<OnenotePage>|null $value Value to set for the pages property.
    */
    public function setPages(?array $value ): void {
        $this->pages = $value;
    }

    /**
     * Sets the pagesUrl property value. The pages endpoint where you can get details for all the pages in the section. Read-only.
     *  @param string|null $value Value to set for the pagesUrl property.
    */
    public function setPagesUrl(?string $value ): void {
        $this->pagesUrl = $value;
    }

    /**
     * Sets the parentNotebook property value. The notebook that contains the section.  Read-only.
     *  @param Notebook|null $value Value to set for the parentNotebook property.
    */
    public function setParentNotebook(?Notebook $value ): void {
        $this->parentNotebook = $value;
    }

    /**
     * Sets the parentSectionGroup property value. The section group that contains the section.  Read-only.
     *  @param SectionGroup|null $value Value to set for the parentSectionGroup property.
    */
    public function setParentSectionGroup(?SectionGroup $value ): void {
        $this->parentSectionGroup = $value;
    }

}