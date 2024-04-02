<?php

namespace Microsoft\Graph\Generated\Models\Security;

use Microsoft\Graph\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class LabelsRoot extends Entity implements Parsable 
{
    /**
     * Instantiates a new LabelsRoot and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return LabelsRoot
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): LabelsRoot {
        return new LabelsRoot();
    }

    /**
     * Gets the authorities property value. The authorities property
     * @return array<AuthorityTemplate>|null
    */
    public function getAuthorities(): ?array {
        $val = $this->getBackingStore()->get('authorities');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AuthorityTemplate::class);
            /** @var array<AuthorityTemplate>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'authorities'");
    }

    /**
     * Gets the categories property value. The categories property
     * @return array<CategoryTemplate>|null
    */
    public function getCategories(): ?array {
        $val = $this->getBackingStore()->get('categories');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, CategoryTemplate::class);
            /** @var array<CategoryTemplate>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'categories'");
    }

    /**
     * Gets the citations property value. The citations property
     * @return array<CitationTemplate>|null
    */
    public function getCitations(): ?array {
        $val = $this->getBackingStore()->get('citations');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, CitationTemplate::class);
            /** @var array<CitationTemplate>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'citations'");
    }

    /**
     * Gets the departments property value. The departments property
     * @return array<DepartmentTemplate>|null
    */
    public function getDepartments(): ?array {
        $val = $this->getBackingStore()->get('departments');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DepartmentTemplate::class);
            /** @var array<DepartmentTemplate>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'departments'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'authorities' => fn(ParseNode $n) => $o->setAuthorities($n->getCollectionOfObjectValues([AuthorityTemplate::class, 'createFromDiscriminatorValue'])),
            'categories' => fn(ParseNode $n) => $o->setCategories($n->getCollectionOfObjectValues([CategoryTemplate::class, 'createFromDiscriminatorValue'])),
            'citations' => fn(ParseNode $n) => $o->setCitations($n->getCollectionOfObjectValues([CitationTemplate::class, 'createFromDiscriminatorValue'])),
            'departments' => fn(ParseNode $n) => $o->setDepartments($n->getCollectionOfObjectValues([DepartmentTemplate::class, 'createFromDiscriminatorValue'])),
            'filePlanReferences' => fn(ParseNode $n) => $o->setFilePlanReferences($n->getCollectionOfObjectValues([FilePlanReferenceTemplate::class, 'createFromDiscriminatorValue'])),
            'retentionLabels' => fn(ParseNode $n) => $o->setRetentionLabels($n->getCollectionOfObjectValues([RetentionLabel::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the filePlanReferences property value. The filePlanReferences property
     * @return array<FilePlanReferenceTemplate>|null
    */
    public function getFilePlanReferences(): ?array {
        $val = $this->getBackingStore()->get('filePlanReferences');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, FilePlanReferenceTemplate::class);
            /** @var array<FilePlanReferenceTemplate>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'filePlanReferences'");
    }

    /**
     * Gets the retentionLabels property value. The retentionLabels property
     * @return array<RetentionLabel>|null
    */
    public function getRetentionLabels(): ?array {
        $val = $this->getBackingStore()->get('retentionLabels');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, RetentionLabel::class);
            /** @var array<RetentionLabel>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'retentionLabels'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('authorities', $this->getAuthorities());
        $writer->writeCollectionOfObjectValues('categories', $this->getCategories());
        $writer->writeCollectionOfObjectValues('citations', $this->getCitations());
        $writer->writeCollectionOfObjectValues('departments', $this->getDepartments());
        $writer->writeCollectionOfObjectValues('filePlanReferences', $this->getFilePlanReferences());
        $writer->writeCollectionOfObjectValues('retentionLabels', $this->getRetentionLabels());
    }

    /**
     * Sets the authorities property value. The authorities property
     * @param array<AuthorityTemplate>|null $value Value to set for the authorities property.
    */
    public function setAuthorities(?array $value): void {
        $this->getBackingStore()->set('authorities', $value);
    }

    /**
     * Sets the categories property value. The categories property
     * @param array<CategoryTemplate>|null $value Value to set for the categories property.
    */
    public function setCategories(?array $value): void {
        $this->getBackingStore()->set('categories', $value);
    }

    /**
     * Sets the citations property value. The citations property
     * @param array<CitationTemplate>|null $value Value to set for the citations property.
    */
    public function setCitations(?array $value): void {
        $this->getBackingStore()->set('citations', $value);
    }

    /**
     * Sets the departments property value. The departments property
     * @param array<DepartmentTemplate>|null $value Value to set for the departments property.
    */
    public function setDepartments(?array $value): void {
        $this->getBackingStore()->set('departments', $value);
    }

    /**
     * Sets the filePlanReferences property value. The filePlanReferences property
     * @param array<FilePlanReferenceTemplate>|null $value Value to set for the filePlanReferences property.
    */
    public function setFilePlanReferences(?array $value): void {
        $this->getBackingStore()->set('filePlanReferences', $value);
    }

    /**
     * Sets the retentionLabels property value. The retentionLabels property
     * @param array<RetentionLabel>|null $value Value to set for the retentionLabels property.
    */
    public function setRetentionLabels(?array $value): void {
        $this->getBackingStore()->set('retentionLabels', $value);
    }

}
