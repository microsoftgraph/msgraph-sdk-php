<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class CopyNotebookModel implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new CopyNotebookModel and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CopyNotebookModel
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CopyNotebookModel {
        return new CopyNotebookModel();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        $val = $this->getBackingStore()->get('additionalData');
        if (is_null($val) || is_array($val)) {
            /** @var array<string, mixed>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalData'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the createdBy property value. The createdBy property
     * @return string|null
    */
    public function getCreatedBy(): ?string {
        $val = $this->getBackingStore()->get('createdBy');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdBy'");
    }

    /**
     * Gets the createdByIdentity property value. The createdByIdentity property
     * @return IdentitySet|null
    */
    public function getCreatedByIdentity(): ?IdentitySet {
        $val = $this->getBackingStore()->get('createdByIdentity');
        if (is_null($val) || $val instanceof IdentitySet) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdByIdentity'");
    }

    /**
     * Gets the createdTime property value. The createdTime property
     * @return DateTime|null
    */
    public function getCreatedTime(): ?DateTime {
        $val = $this->getBackingStore()->get('createdTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdTime'");
    }

    /**
     * Gets the self property value. The self property
     * @return string|null
    */
    public function getEscapedSelf(): ?string {
        $val = $this->getBackingStore()->get('escapedSelf');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'escapedSelf'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'createdBy' => fn(ParseNode $n) => $o->setCreatedBy($n->getStringValue()),
            'createdByIdentity' => fn(ParseNode $n) => $o->setCreatedByIdentity($n->getObjectValue([IdentitySet::class, 'createFromDiscriminatorValue'])),
            'createdTime' => fn(ParseNode $n) => $o->setCreatedTime($n->getDateTimeValue()),
            'self' => fn(ParseNode $n) => $o->setEscapedSelf($n->getStringValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'isDefault' => fn(ParseNode $n) => $o->setIsDefault($n->getBooleanValue()),
            'isShared' => fn(ParseNode $n) => $o->setIsShared($n->getBooleanValue()),
            'lastModifiedBy' => fn(ParseNode $n) => $o->setLastModifiedBy($n->getStringValue()),
            'lastModifiedByIdentity' => fn(ParseNode $n) => $o->setLastModifiedByIdentity($n->getObjectValue([IdentitySet::class, 'createFromDiscriminatorValue'])),
            'lastModifiedTime' => fn(ParseNode $n) => $o->setLastModifiedTime($n->getDateTimeValue()),
            'links' => fn(ParseNode $n) => $o->setLinks($n->getObjectValue([NotebookLinks::class, 'createFromDiscriminatorValue'])),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'sectionGroupsUrl' => fn(ParseNode $n) => $o->setSectionGroupsUrl($n->getStringValue()),
            'sectionsUrl' => fn(ParseNode $n) => $o->setSectionsUrl($n->getStringValue()),
            'userRole' => fn(ParseNode $n) => $o->setUserRole($n->getEnumValue(CopyNotebookModel_userRole::class)),
        ];
    }

    /**
     * Gets the id property value. The id property
     * @return string|null
    */
    public function getId(): ?string {
        $val = $this->getBackingStore()->get('id');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'id'");
    }

    /**
     * Gets the isDefault property value. The isDefault property
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
     * Gets the isShared property value. The isShared property
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
     * Gets the lastModifiedBy property value. The lastModifiedBy property
     * @return string|null
    */
    public function getLastModifiedBy(): ?string {
        $val = $this->getBackingStore()->get('lastModifiedBy');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastModifiedBy'");
    }

    /**
     * Gets the lastModifiedByIdentity property value. The lastModifiedByIdentity property
     * @return IdentitySet|null
    */
    public function getLastModifiedByIdentity(): ?IdentitySet {
        $val = $this->getBackingStore()->get('lastModifiedByIdentity');
        if (is_null($val) || $val instanceof IdentitySet) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastModifiedByIdentity'");
    }

    /**
     * Gets the lastModifiedTime property value. The lastModifiedTime property
     * @return DateTime|null
    */
    public function getLastModifiedTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastModifiedTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastModifiedTime'");
    }

    /**
     * Gets the links property value. The links property
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
     * Gets the name property value. The name property
     * @return string|null
    */
    public function getName(): ?string {
        $val = $this->getBackingStore()->get('name');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'name'");
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Gets the sectionGroupsUrl property value. The sectionGroupsUrl property
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
     * Gets the sectionsUrl property value. The sectionsUrl property
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
     * Gets the userRole property value. The userRole property
     * @return CopyNotebookModel_userRole|null
    */
    public function getUserRole(): ?CopyNotebookModel_userRole {
        $val = $this->getBackingStore()->get('userRole');
        if (is_null($val) || $val instanceof CopyNotebookModel_userRole) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userRole'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('createdBy', $this->getCreatedBy());
        $writer->writeObjectValue('createdByIdentity', $this->getCreatedByIdentity());
        $writer->writeDateTimeValue('createdTime', $this->getCreatedTime());
        $writer->writeStringValue('self', $this->getEscapedSelf());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeBooleanValue('isDefault', $this->getIsDefault());
        $writer->writeBooleanValue('isShared', $this->getIsShared());
        $writer->writeStringValue('lastModifiedBy', $this->getLastModifiedBy());
        $writer->writeObjectValue('lastModifiedByIdentity', $this->getLastModifiedByIdentity());
        $writer->writeDateTimeValue('lastModifiedTime', $this->getLastModifiedTime());
        $writer->writeObjectValue('links', $this->getLinks());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('sectionGroupsUrl', $this->getSectionGroupsUrl());
        $writer->writeStringValue('sectionsUrl', $this->getSectionsUrl());
        $writer->writeEnumValue('userRole', $this->getUserRole());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the createdBy property value. The createdBy property
     * @param string|null $value Value to set for the createdBy property.
    */
    public function setCreatedBy(?string $value): void {
        $this->getBackingStore()->set('createdBy', $value);
    }

    /**
     * Sets the createdByIdentity property value. The createdByIdentity property
     * @param IdentitySet|null $value Value to set for the createdByIdentity property.
    */
    public function setCreatedByIdentity(?IdentitySet $value): void {
        $this->getBackingStore()->set('createdByIdentity', $value);
    }

    /**
     * Sets the createdTime property value. The createdTime property
     * @param DateTime|null $value Value to set for the createdTime property.
    */
    public function setCreatedTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdTime', $value);
    }

    /**
     * Sets the self property value. The self property
     * @param string|null $value Value to set for the self property.
    */
    public function setEscapedSelf(?string $value): void {
        $this->getBackingStore()->set('escapedSelf', $value);
    }

    /**
     * Sets the id property value. The id property
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->getBackingStore()->set('id', $value);
    }

    /**
     * Sets the isDefault property value. The isDefault property
     * @param bool|null $value Value to set for the isDefault property.
    */
    public function setIsDefault(?bool $value): void {
        $this->getBackingStore()->set('isDefault', $value);
    }

    /**
     * Sets the isShared property value. The isShared property
     * @param bool|null $value Value to set for the isShared property.
    */
    public function setIsShared(?bool $value): void {
        $this->getBackingStore()->set('isShared', $value);
    }

    /**
     * Sets the lastModifiedBy property value. The lastModifiedBy property
     * @param string|null $value Value to set for the lastModifiedBy property.
    */
    public function setLastModifiedBy(?string $value): void {
        $this->getBackingStore()->set('lastModifiedBy', $value);
    }

    /**
     * Sets the lastModifiedByIdentity property value. The lastModifiedByIdentity property
     * @param IdentitySet|null $value Value to set for the lastModifiedByIdentity property.
    */
    public function setLastModifiedByIdentity(?IdentitySet $value): void {
        $this->getBackingStore()->set('lastModifiedByIdentity', $value);
    }

    /**
     * Sets the lastModifiedTime property value. The lastModifiedTime property
     * @param DateTime|null $value Value to set for the lastModifiedTime property.
    */
    public function setLastModifiedTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedTime', $value);
    }

    /**
     * Sets the links property value. The links property
     * @param NotebookLinks|null $value Value to set for the links property.
    */
    public function setLinks(?NotebookLinks $value): void {
        $this->getBackingStore()->set('links', $value);
    }

    /**
     * Sets the name property value. The name property
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->getBackingStore()->set('name', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the sectionGroupsUrl property value. The sectionGroupsUrl property
     * @param string|null $value Value to set for the sectionGroupsUrl property.
    */
    public function setSectionGroupsUrl(?string $value): void {
        $this->getBackingStore()->set('sectionGroupsUrl', $value);
    }

    /**
     * Sets the sectionsUrl property value. The sectionsUrl property
     * @param string|null $value Value to set for the sectionsUrl property.
    */
    public function setSectionsUrl(?string $value): void {
        $this->getBackingStore()->set('sectionsUrl', $value);
    }

    /**
     * Sets the userRole property value. The userRole property
     * @param CopyNotebookModel_userRole|null $value Value to set for the userRole property.
    */
    public function setUserRole(?CopyNotebookModel_userRole $value): void {
        $this->getBackingStore()->set('userRole', $value);
    }

}
