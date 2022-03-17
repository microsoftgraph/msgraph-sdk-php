<?php

namespace Microsoft\Graph\Generated\Models\Microsoft\Graph;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CopyNotebookModel implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var string|null $createdBy  */
    private ?string $createdBy = null;
    
    /** @var IdentitySet|null $createdByIdentity  */
    private ?IdentitySet $createdByIdentity = null;
    
    /** @var DateTime|null $createdTime  */
    private ?DateTime $createdTime = null;
    
    /** @var string|null $EscapedSelf  */
    private ?string $escapedSelf = null;
    
    /** @var string|null $id  */
    private ?string $id = null;
    
    /** @var bool|null $isDefault  */
    private ?bool $isDefault = null;
    
    /** @var bool|null $isShared  */
    private ?bool $isShared = null;
    
    /** @var string|null $lastModifiedBy  */
    private ?string $lastModifiedBy = null;
    
    /** @var IdentitySet|null $lastModifiedByIdentity  */
    private ?IdentitySet $lastModifiedByIdentity = null;
    
    /** @var DateTime|null $lastModifiedTime  */
    private ?DateTime $lastModifiedTime = null;
    
    /** @var NotebookLinks|null $links  */
    private ?NotebookLinks $links = null;
    
    /** @var string|null $name  */
    private ?string $name = null;
    
    /** @var string|null $sectionGroupsUrl  */
    private ?string $sectionGroupsUrl = null;
    
    /** @var string|null $sectionsUrl  */
    private ?string $sectionsUrl = null;
    
    /** @var OnenoteUserRole|null $userRole  */
    private ?OnenoteUserRole $userRole = null;
    
    /**
     * Instantiates a new CopyNotebookModel and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CopyNotebookModel
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): CopyNotebookModel {
        return new CopyNotebookModel();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the createdBy property value. 
     * @return string|null
    */
    public function getCreatedBy(): ?string {
        return $this->createdBy;
    }

    /**
     * Gets the createdByIdentity property value. 
     * @return IdentitySet|null
    */
    public function getCreatedByIdentity(): ?IdentitySet {
        return $this->createdByIdentity;
    }

    /**
     * Gets the createdTime property value. 
     * @return DateTime|null
    */
    public function getCreatedTime(): ?DateTime {
        return $this->createdTime;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'createdBy' => function (self $o, ParseNode $n) { $o->setCreatedBy($n->getStringValue()); },
            'createdByIdentity' => function (self $o, ParseNode $n) { $o->setCreatedByIdentity($n->getObjectValue(IdentitySet::class)); },
            'createdTime' => function (self $o, ParseNode $n) { $o->setCreatedTime($n->getDateTimeValue()); },
            'self' => function (self $o, ParseNode $n) { $o->setEscapedSelf($n->getStringValue()); },
            'id' => function (self $o, ParseNode $n) { $o->setId($n->getStringValue()); },
            'isDefault' => function (self $o, ParseNode $n) { $o->setIsDefault($n->getBooleanValue()); },
            'isShared' => function (self $o, ParseNode $n) { $o->setIsShared($n->getBooleanValue()); },
            'lastModifiedBy' => function (self $o, ParseNode $n) { $o->setLastModifiedBy($n->getStringValue()); },
            'lastModifiedByIdentity' => function (self $o, ParseNode $n) { $o->setLastModifiedByIdentity($n->getObjectValue(IdentitySet::class)); },
            'lastModifiedTime' => function (self $o, ParseNode $n) { $o->setLastModifiedTime($n->getDateTimeValue()); },
            'links' => function (self $o, ParseNode $n) { $o->setLinks($n->getObjectValue(NotebookLinks::class)); },
            'name' => function (self $o, ParseNode $n) { $o->setName($n->getStringValue()); },
            'sectionGroupsUrl' => function (self $o, ParseNode $n) { $o->setSectionGroupsUrl($n->getStringValue()); },
            'sectionsUrl' => function (self $o, ParseNode $n) { $o->setSectionsUrl($n->getStringValue()); },
            'userRole' => function (self $o, ParseNode $n) { $o->setUserRole($n->getEnumValue(OnenoteUserRole::class)); },
        ];
    }

    /**
     * Gets the id property value. 
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the isDefault property value. 
     * @return bool|null
    */
    public function getIsDefault(): ?bool {
        return $this->isDefault;
    }

    /**
     * Gets the isShared property value. 
     * @return bool|null
    */
    public function getIsShared(): ?bool {
        return $this->isShared;
    }

    /**
     * Gets the lastModifiedBy property value. 
     * @return string|null
    */
    public function getLastModifiedBy(): ?string {
        return $this->lastModifiedBy;
    }

    /**
     * Gets the lastModifiedByIdentity property value. 
     * @return IdentitySet|null
    */
    public function getLastModifiedByIdentity(): ?IdentitySet {
        return $this->lastModifiedByIdentity;
    }

    /**
     * Gets the lastModifiedTime property value. 
     * @return DateTime|null
    */
    public function getLastModifiedTime(): ?DateTime {
        return $this->lastModifiedTime;
    }

    /**
     * Gets the links property value. 
     * @return NotebookLinks|null
    */
    public function getLinks(): ?NotebookLinks {
        return $this->links;
    }

    /**
     * Gets the name property value. 
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the sectionGroupsUrl property value. 
     * @return string|null
    */
    public function getSectionGroupsUrl(): ?string {
        return $this->sectionGroupsUrl;
    }

    /**
     * Gets the sectionsUrl property value. 
     * @return string|null
    */
    public function getSectionsUrl(): ?string {
        return $this->sectionsUrl;
    }

    /**
     * Gets the self property value. 
     * @return string|null
    */
    public function getSelf(): ?string {
        return $this->escapedSelf;
    }

    /**
     * Gets the userRole property value. 
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
        $writer->writeStringValue('createdBy', $this->createdBy);
        $writer->writeObjectValue('createdByIdentity', $this->createdByIdentity);
        $writer->writeDateTimeValue('createdTime', $this->createdTime);
        $writer->writeStringValue('self', $this->escapedSelf);
        $writer->writeStringValue('id', $this->id);
        $writer->writeBooleanValue('isDefault', $this->isDefault);
        $writer->writeBooleanValue('isShared', $this->isShared);
        $writer->writeStringValue('lastModifiedBy', $this->lastModifiedBy);
        $writer->writeObjectValue('lastModifiedByIdentity', $this->lastModifiedByIdentity);
        $writer->writeDateTimeValue('lastModifiedTime', $this->lastModifiedTime);
        $writer->writeObjectValue('links', $this->links);
        $writer->writeStringValue('name', $this->name);
        $writer->writeStringValue('sectionGroupsUrl', $this->sectionGroupsUrl);
        $writer->writeStringValue('sectionsUrl', $this->sectionsUrl);
        $writer->writeEnumValue('userRole', $this->userRole);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the createdBy property value. 
     *  @param string|null $value Value to set for the createdBy property.
    */
    public function setCreatedBy(?string $value ): void {
        $this->createdBy = $value;
    }

    /**
     * Sets the createdByIdentity property value. 
     *  @param IdentitySet|null $value Value to set for the createdByIdentity property.
    */
    public function setCreatedByIdentity(?IdentitySet $value ): void {
        $this->createdByIdentity = $value;
    }

    /**
     * Sets the createdTime property value. 
     *  @param DateTime|null $value Value to set for the createdTime property.
    */
    public function setCreatedTime(?DateTime $value ): void {
        $this->createdTime = $value;
    }

    /**
     * Sets the id property value. 
     *  @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value ): void {
        $this->id = $value;
    }

    /**
     * Sets the isDefault property value. 
     *  @param bool|null $value Value to set for the isDefault property.
    */
    public function setIsDefault(?bool $value ): void {
        $this->isDefault = $value;
    }

    /**
     * Sets the isShared property value. 
     *  @param bool|null $value Value to set for the isShared property.
    */
    public function setIsShared(?bool $value ): void {
        $this->isShared = $value;
    }

    /**
     * Sets the lastModifiedBy property value. 
     *  @param string|null $value Value to set for the lastModifiedBy property.
    */
    public function setLastModifiedBy(?string $value ): void {
        $this->lastModifiedBy = $value;
    }

    /**
     * Sets the lastModifiedByIdentity property value. 
     *  @param IdentitySet|null $value Value to set for the lastModifiedByIdentity property.
    */
    public function setLastModifiedByIdentity(?IdentitySet $value ): void {
        $this->lastModifiedByIdentity = $value;
    }

    /**
     * Sets the lastModifiedTime property value. 
     *  @param DateTime|null $value Value to set for the lastModifiedTime property.
    */
    public function setLastModifiedTime(?DateTime $value ): void {
        $this->lastModifiedTime = $value;
    }

    /**
     * Sets the links property value. 
     *  @param NotebookLinks|null $value Value to set for the links property.
    */
    public function setLinks(?NotebookLinks $value ): void {
        $this->links = $value;
    }

    /**
     * Sets the name property value. 
     *  @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value ): void {
        $this->name = $value;
    }

    /**
     * Sets the sectionGroupsUrl property value. 
     *  @param string|null $value Value to set for the sectionGroupsUrl property.
    */
    public function setSectionGroupsUrl(?string $value ): void {
        $this->sectionGroupsUrl = $value;
    }

    /**
     * Sets the sectionsUrl property value. 
     *  @param string|null $value Value to set for the sectionsUrl property.
    */
    public function setSectionsUrl(?string $value ): void {
        $this->sectionsUrl = $value;
    }

    /**
     * Sets the self property value. 
     *  @param string|null $value Value to set for the EscapedSelf property.
    */
    public function setSelf(?string $value ): void {
        $this->escapedSelf = $value;
    }

    /**
     * Sets the userRole property value. 
     *  @param OnenoteUserRole|null $value Value to set for the userRole property.
    */
    public function setUserRole(?OnenoteUserRole $value ): void {
        $this->userRole = $value;
    }

}
