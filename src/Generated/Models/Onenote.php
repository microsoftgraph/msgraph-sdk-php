<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class Onenote extends Entity implements Parsable 
{
    /**
     * @var string|null $odataType The OdataType property
    */
    public ?string $odataType = null;
    
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
     * @return array<string, callable(ParseNode): void>
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
        $val = $this->getBackingStore()->get('notebooks');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Notebook::class);
            /** @var array<Notebook>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'notebooks'");
    }

    /**
     * Gets the operations property value. The status of OneNote operations. Getting an operations collection is not supported, but you can get the status of long-running operations if the Operation-Location header is returned in the response. Read-only. Nullable.
     * @return array<OnenoteOperation>|null
    */
    public function getOperations(): ?array {
        $val = $this->getBackingStore()->get('operations');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, OnenoteOperation::class);
            /** @var array<OnenoteOperation>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'operations'");
    }

    /**
     * Gets the pages property value. The pages in all OneNote notebooks that are owned by the user or group.  Read-only. Nullable.
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
     * Gets the resources property value. The image and other file resources in OneNote pages. Getting a resources collection is not supported, but you can get the binary content of a specific resource. Read-only. Nullable.
     * @return array<OnenoteResource>|null
    */
    public function getResources(): ?array {
        $val = $this->getBackingStore()->get('resources');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, OnenoteResource::class);
            /** @var array<OnenoteResource>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'resources'");
    }

    /**
     * Gets the sectionGroups property value. The section groups in all OneNote notebooks that are owned by the user or group.  Read-only. Nullable.
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
     * Gets the sections property value. The sections in all OneNote notebooks that are owned by the user or group.  Read-only. Nullable.
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('notebooks', $this->getNotebooks());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
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
