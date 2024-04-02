<?php

namespace Microsoft\Graph\Generated\Models\Security;

use Microsoft\Graph\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class FilePlanDescriptor extends Entity implements Parsable 
{
    /**
     * Instantiates a new FilePlanDescriptor and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return FilePlanDescriptor
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): FilePlanDescriptor {
        return new FilePlanDescriptor();
    }

    /**
     * Gets the authority property value. The authority property
     * @return FilePlanAuthority|null
    */
    public function getAuthority(): ?FilePlanAuthority {
        $val = $this->getBackingStore()->get('authority');
        if (is_null($val) || $val instanceof FilePlanAuthority) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'authority'");
    }

    /**
     * Gets the authorityTemplate property value. The authorityTemplate property
     * @return AuthorityTemplate|null
    */
    public function getAuthorityTemplate(): ?AuthorityTemplate {
        $val = $this->getBackingStore()->get('authorityTemplate');
        if (is_null($val) || $val instanceof AuthorityTemplate) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'authorityTemplate'");
    }

    /**
     * Gets the category property value. The category property
     * @return FilePlanAppliedCategory|null
    */
    public function getCategory(): ?FilePlanAppliedCategory {
        $val = $this->getBackingStore()->get('category');
        if (is_null($val) || $val instanceof FilePlanAppliedCategory) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'category'");
    }

    /**
     * Gets the categoryTemplate property value. The categoryTemplate property
     * @return CategoryTemplate|null
    */
    public function getCategoryTemplate(): ?CategoryTemplate {
        $val = $this->getBackingStore()->get('categoryTemplate');
        if (is_null($val) || $val instanceof CategoryTemplate) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'categoryTemplate'");
    }

    /**
     * Gets the citation property value. The citation property
     * @return FilePlanCitation|null
    */
    public function getCitation(): ?FilePlanCitation {
        $val = $this->getBackingStore()->get('citation');
        if (is_null($val) || $val instanceof FilePlanCitation) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'citation'");
    }

    /**
     * Gets the citationTemplate property value. The citationTemplate property
     * @return CitationTemplate|null
    */
    public function getCitationTemplate(): ?CitationTemplate {
        $val = $this->getBackingStore()->get('citationTemplate');
        if (is_null($val) || $val instanceof CitationTemplate) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'citationTemplate'");
    }

    /**
     * Gets the department property value. The department property
     * @return FilePlanDepartment|null
    */
    public function getDepartment(): ?FilePlanDepartment {
        $val = $this->getBackingStore()->get('department');
        if (is_null($val) || $val instanceof FilePlanDepartment) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'department'");
    }

    /**
     * Gets the departmentTemplate property value. The departmentTemplate property
     * @return DepartmentTemplate|null
    */
    public function getDepartmentTemplate(): ?DepartmentTemplate {
        $val = $this->getBackingStore()->get('departmentTemplate');
        if (is_null($val) || $val instanceof DepartmentTemplate) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'departmentTemplate'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'authority' => fn(ParseNode $n) => $o->setAuthority($n->getObjectValue([FilePlanAuthority::class, 'createFromDiscriminatorValue'])),
            'authorityTemplate' => fn(ParseNode $n) => $o->setAuthorityTemplate($n->getObjectValue([AuthorityTemplate::class, 'createFromDiscriminatorValue'])),
            'category' => fn(ParseNode $n) => $o->setCategory($n->getObjectValue([FilePlanAppliedCategory::class, 'createFromDiscriminatorValue'])),
            'categoryTemplate' => fn(ParseNode $n) => $o->setCategoryTemplate($n->getObjectValue([CategoryTemplate::class, 'createFromDiscriminatorValue'])),
            'citation' => fn(ParseNode $n) => $o->setCitation($n->getObjectValue([FilePlanCitation::class, 'createFromDiscriminatorValue'])),
            'citationTemplate' => fn(ParseNode $n) => $o->setCitationTemplate($n->getObjectValue([CitationTemplate::class, 'createFromDiscriminatorValue'])),
            'department' => fn(ParseNode $n) => $o->setDepartment($n->getObjectValue([FilePlanDepartment::class, 'createFromDiscriminatorValue'])),
            'departmentTemplate' => fn(ParseNode $n) => $o->setDepartmentTemplate($n->getObjectValue([DepartmentTemplate::class, 'createFromDiscriminatorValue'])),
            'filePlanReference' => fn(ParseNode $n) => $o->setFilePlanReference($n->getObjectValue([FilePlanReference::class, 'createFromDiscriminatorValue'])),
            'filePlanReferenceTemplate' => fn(ParseNode $n) => $o->setFilePlanReferenceTemplate($n->getObjectValue([FilePlanReferenceTemplate::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the filePlanReference property value. The filePlanReference property
     * @return FilePlanReference|null
    */
    public function getFilePlanReference(): ?FilePlanReference {
        $val = $this->getBackingStore()->get('filePlanReference');
        if (is_null($val) || $val instanceof FilePlanReference) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'filePlanReference'");
    }

    /**
     * Gets the filePlanReferenceTemplate property value. The filePlanReferenceTemplate property
     * @return FilePlanReferenceTemplate|null
    */
    public function getFilePlanReferenceTemplate(): ?FilePlanReferenceTemplate {
        $val = $this->getBackingStore()->get('filePlanReferenceTemplate');
        if (is_null($val) || $val instanceof FilePlanReferenceTemplate) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'filePlanReferenceTemplate'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('authority', $this->getAuthority());
        $writer->writeObjectValue('authorityTemplate', $this->getAuthorityTemplate());
        $writer->writeObjectValue('category', $this->getCategory());
        $writer->writeObjectValue('categoryTemplate', $this->getCategoryTemplate());
        $writer->writeObjectValue('citation', $this->getCitation());
        $writer->writeObjectValue('citationTemplate', $this->getCitationTemplate());
        $writer->writeObjectValue('department', $this->getDepartment());
        $writer->writeObjectValue('departmentTemplate', $this->getDepartmentTemplate());
        $writer->writeObjectValue('filePlanReference', $this->getFilePlanReference());
        $writer->writeObjectValue('filePlanReferenceTemplate', $this->getFilePlanReferenceTemplate());
    }

    /**
     * Sets the authority property value. The authority property
     * @param FilePlanAuthority|null $value Value to set for the authority property.
    */
    public function setAuthority(?FilePlanAuthority $value): void {
        $this->getBackingStore()->set('authority', $value);
    }

    /**
     * Sets the authorityTemplate property value. The authorityTemplate property
     * @param AuthorityTemplate|null $value Value to set for the authorityTemplate property.
    */
    public function setAuthorityTemplate(?AuthorityTemplate $value): void {
        $this->getBackingStore()->set('authorityTemplate', $value);
    }

    /**
     * Sets the category property value. The category property
     * @param FilePlanAppliedCategory|null $value Value to set for the category property.
    */
    public function setCategory(?FilePlanAppliedCategory $value): void {
        $this->getBackingStore()->set('category', $value);
    }

    /**
     * Sets the categoryTemplate property value. The categoryTemplate property
     * @param CategoryTemplate|null $value Value to set for the categoryTemplate property.
    */
    public function setCategoryTemplate(?CategoryTemplate $value): void {
        $this->getBackingStore()->set('categoryTemplate', $value);
    }

    /**
     * Sets the citation property value. The citation property
     * @param FilePlanCitation|null $value Value to set for the citation property.
    */
    public function setCitation(?FilePlanCitation $value): void {
        $this->getBackingStore()->set('citation', $value);
    }

    /**
     * Sets the citationTemplate property value. The citationTemplate property
     * @param CitationTemplate|null $value Value to set for the citationTemplate property.
    */
    public function setCitationTemplate(?CitationTemplate $value): void {
        $this->getBackingStore()->set('citationTemplate', $value);
    }

    /**
     * Sets the department property value. The department property
     * @param FilePlanDepartment|null $value Value to set for the department property.
    */
    public function setDepartment(?FilePlanDepartment $value): void {
        $this->getBackingStore()->set('department', $value);
    }

    /**
     * Sets the departmentTemplate property value. The departmentTemplate property
     * @param DepartmentTemplate|null $value Value to set for the departmentTemplate property.
    */
    public function setDepartmentTemplate(?DepartmentTemplate $value): void {
        $this->getBackingStore()->set('departmentTemplate', $value);
    }

    /**
     * Sets the filePlanReference property value. The filePlanReference property
     * @param FilePlanReference|null $value Value to set for the filePlanReference property.
    */
    public function setFilePlanReference(?FilePlanReference $value): void {
        $this->getBackingStore()->set('filePlanReference', $value);
    }

    /**
     * Sets the filePlanReferenceTemplate property value. The filePlanReferenceTemplate property
     * @param FilePlanReferenceTemplate|null $value Value to set for the filePlanReferenceTemplate property.
    */
    public function setFilePlanReferenceTemplate(?FilePlanReferenceTemplate $value): void {
        $this->getBackingStore()->set('filePlanReferenceTemplate', $value);
    }

}
