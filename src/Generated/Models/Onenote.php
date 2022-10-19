<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Onenote extends Entity implements Parsable 
{
    /**
     * @var array<Notebook>|null $notebooks The collection of OneNote notebooks that are owned by the user or group. Read-only. Nullable.
    */
    private ?array $notebooks = null;
    
    /**
     * @var array<OnenoteOperation>|null $operations The status of OneNote operations. Getting an operations collection is not supported, but you can get the status of long-running operations if the Operation-Location header is returned in the response. Read-only. Nullable.
    */
    private ?array $operations = null;
    
    /**
     * @var array<OnenotePage>|null $pages The pages in all OneNote notebooks that are owned by the user or group.  Read-only. Nullable.
    */
    private ?array $pages = null;
    
    /**
     * @var array<OnenoteResource>|null $resources The image and other file resources in OneNote pages. Getting a resources collection is not supported, but you can get the binary content of a specific resource. Read-only. Nullable.
    */
    private ?array $resources = null;
    
    /**
     * @var array<SectionGroup>|null $sectionGroups The section groups in all OneNote notebooks that are owned by the user or group.  Read-only. Nullable.
    */
    private ?array $sectionGroups = null;
    
    /**
     * @var array<OnenoteSection>|null $sections The sections in all OneNote notebooks that are owned by the user or group.  Read-only. Nullable.
    */
    private ?array $sections = null;
    
    /**
     * Instantiates a new onenote and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.onenote');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Onenote
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Onenote {
        return new Onenote();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'notebooks' => fn(ParseNode $n) => $o->setNotebooks($n->getCollectionOfObjectValues([Notebook::class, 'createFromDiscriminatorValue'])),
            'operations' => fn(ParseNode $n) => $o->setOperations($n->getCollectionOfObjectValues([OnenoteOperation::class, 'createFromDiscriminatorValue'])),
            'pages' => fn(ParseNode $n) => $o->setPages($n->getCollectionOfObjectValues([OnenotePage::class, 'createFromDiscriminatorValue'])),
            'resources' => fn(ParseNode $n) => $o->setResources($n->getCollectionOfObjectValues([OnenoteResource::class, 'createFromDiscriminatorValue'])),
            'sectionGroups' => fn(ParseNode $n) => $o->setSectionGroups($n->getCollectionOfObjectValues([SectionGroup::class, 'createFromDiscriminatorValue'])),
            'sections' => fn(ParseNode $n) => $o->setSections($n->getCollectionOfObjectValues([OnenoteSection::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the notebooks property value. The collection of OneNote notebooks that are owned by the user or group. Read-only. Nullable.
     * @return array<Notebook>|null
    */
    public function getNotebooks(): ?array {
        return $this->notebooks;
    }

    /**
     * Gets the operations property value. The status of OneNote operations. Getting an operations collection is not supported, but you can get the status of long-running operations if the Operation-Location header is returned in the response. Read-only. Nullable.
     * @return array<OnenoteOperation>|null
    */
    public function getOperations(): ?array {
        return $this->operations;
    }

    /**
     * Gets the pages property value. The pages in all OneNote notebooks that are owned by the user or group.  Read-only. Nullable.
     * @return array<OnenotePage>|null
    */
    public function getPages(): ?array {
        return $this->pages;
    }

    /**
     * Gets the resources property value. The image and other file resources in OneNote pages. Getting a resources collection is not supported, but you can get the binary content of a specific resource. Read-only. Nullable.
     * @return array<OnenoteResource>|null
    */
    public function getResources(): ?array {
        return $this->resources;
    }

    /**
     * Gets the sectionGroups property value. The section groups in all OneNote notebooks that are owned by the user or group.  Read-only. Nullable.
     * @return array<SectionGroup>|null
    */
    public function getSectionGroups(): ?array {
        return $this->sectionGroups;
    }

    /**
     * Gets the sections property value. The sections in all OneNote notebooks that are owned by the user or group.  Read-only. Nullable.
     * @return array<OnenoteSection>|null
    */
    public function getSections(): ?array {
        return $this->sections;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('notebooks', $this->notebooks);
        $writer->writeCollectionOfObjectValues('operations', $this->operations);
        $writer->writeCollectionOfObjectValues('pages', $this->pages);
        $writer->writeCollectionOfObjectValues('resources', $this->resources);
        $writer->writeCollectionOfObjectValues('sectionGroups', $this->sectionGroups);
        $writer->writeCollectionOfObjectValues('sections', $this->sections);
    }

    /**
     * Sets the notebooks property value. The collection of OneNote notebooks that are owned by the user or group. Read-only. Nullable.
     *  @param array<Notebook>|null $value Value to set for the notebooks property.
    */
    public function setNotebooks(?array $value ): void {
        $this->notebooks = $value;
    }

    /**
     * Sets the operations property value. The status of OneNote operations. Getting an operations collection is not supported, but you can get the status of long-running operations if the Operation-Location header is returned in the response. Read-only. Nullable.
     *  @param array<OnenoteOperation>|null $value Value to set for the operations property.
    */
    public function setOperations(?array $value ): void {
        $this->operations = $value;
    }

    /**
     * Sets the pages property value. The pages in all OneNote notebooks that are owned by the user or group.  Read-only. Nullable.
     *  @param array<OnenotePage>|null $value Value to set for the pages property.
    */
    public function setPages(?array $value ): void {
        $this->pages = $value;
    }

    /**
     * Sets the resources property value. The image and other file resources in OneNote pages. Getting a resources collection is not supported, but you can get the binary content of a specific resource. Read-only. Nullable.
     *  @param array<OnenoteResource>|null $value Value to set for the resources property.
    */
    public function setResources(?array $value ): void {
        $this->resources = $value;
    }

    /**
     * Sets the sectionGroups property value. The section groups in all OneNote notebooks that are owned by the user or group.  Read-only. Nullable.
     *  @param array<SectionGroup>|null $value Value to set for the sectionGroups property.
    */
    public function setSectionGroups(?array $value ): void {
        $this->sectionGroups = $value;
    }

    /**
     * Sets the sections property value. The sections in all OneNote notebooks that are owned by the user or group.  Read-only. Nullable.
     *  @param array<OnenoteSection>|null $value Value to set for the sections property.
    */
    public function setSections(?array $value ): void {
        $this->sections = $value;
    }

}
