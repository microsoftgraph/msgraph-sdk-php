<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Onenote extends Entity implements Parsable 
{
    /**
     * Instantiates a new onenote and sets the default values.
    */
    public function __construct() {
        parent::__construct();
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
        return $this->getBackingStore()->get('notebooks');
    }

    /**
     * Gets the operations property value. The status of OneNote operations. Getting an operations collection is not supported, but you can get the status of long-running operations if the Operation-Location header is returned in the response. Read-only. Nullable.
     * @return array<OnenoteOperation>|null
    */
    public function getOperations(): ?array {
        return $this->getBackingStore()->get('operations');
    }

    /**
     * Gets the pages property value. The pages in all OneNote notebooks that are owned by the user or group.  Read-only. Nullable.
     * @return array<OnenotePage>|null
    */
    public function getPages(): ?array {
        return $this->getBackingStore()->get('pages');
    }

    /**
     * Gets the resources property value. The image and other file resources in OneNote pages. Getting a resources collection is not supported, but you can get the binary content of a specific resource. Read-only. Nullable.
     * @return array<OnenoteResource>|null
    */
    public function getResources(): ?array {
        return $this->getBackingStore()->get('resources');
    }

    /**
     * Gets the sectionGroups property value. The section groups in all OneNote notebooks that are owned by the user or group.  Read-only. Nullable.
     * @return array<SectionGroup>|null
    */
    public function getSectionGroups(): ?array {
        return $this->getBackingStore()->get('sectionGroups');
    }

    /**
     * Gets the sections property value. The sections in all OneNote notebooks that are owned by the user or group.  Read-only. Nullable.
     * @return array<OnenoteSection>|null
    */
    public function getSections(): ?array {
        return $this->getBackingStore()->get('sections');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('notebooks', $this->getNotebooks());
        $writer->writeCollectionOfObjectValues('operations', $this->getOperations());
        $writer->writeCollectionOfObjectValues('pages', $this->getPages());
        $writer->writeCollectionOfObjectValues('resources', $this->getResources());
        $writer->writeCollectionOfObjectValues('sectionGroups', $this->getSectionGroups());
        $writer->writeCollectionOfObjectValues('sections', $this->getSections());
    }

    /**
     * Sets the notebooks property value. The collection of OneNote notebooks that are owned by the user or group. Read-only. Nullable.
     * @param array<Notebook>|null $value Value to set for the notebooks property.
    */
    public function setNotebooks(?array $value): void {
        $this->getBackingStore()->set('notebooks', $value);
    }

    /**
     * Sets the operations property value. The status of OneNote operations. Getting an operations collection is not supported, but you can get the status of long-running operations if the Operation-Location header is returned in the response. Read-only. Nullable.
     * @param array<OnenoteOperation>|null $value Value to set for the operations property.
    */
    public function setOperations(?array $value): void {
        $this->getBackingStore()->set('operations', $value);
    }

    /**
     * Sets the pages property value. The pages in all OneNote notebooks that are owned by the user or group.  Read-only. Nullable.
     * @param array<OnenotePage>|null $value Value to set for the pages property.
    */
    public function setPages(?array $value): void {
        $this->getBackingStore()->set('pages', $value);
    }

    /**
     * Sets the resources property value. The image and other file resources in OneNote pages. Getting a resources collection is not supported, but you can get the binary content of a specific resource. Read-only. Nullable.
     * @param array<OnenoteResource>|null $value Value to set for the resources property.
    */
    public function setResources(?array $value): void {
        $this->getBackingStore()->set('resources', $value);
    }

    /**
     * Sets the sectionGroups property value. The section groups in all OneNote notebooks that are owned by the user or group.  Read-only. Nullable.
     * @param array<SectionGroup>|null $value Value to set for the sectionGroups property.
    */
    public function setSectionGroups(?array $value): void {
        $this->getBackingStore()->set('sectionGroups', $value);
    }

    /**
     * Sets the sections property value. The sections in all OneNote notebooks that are owned by the user or group.  Read-only. Nullable.
     * @param array<OnenoteSection>|null $value Value to set for the sections property.
    */
    public function setSections(?array $value): void {
        $this->getBackingStore()->set('sections', $value);
    }

}
