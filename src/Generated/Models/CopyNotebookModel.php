<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CopyNotebookModel implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $createdBy The createdBy property
    */
    private ?string $createdBy = null;
    
    /**
     * @var IdentitySet|null $createdByIdentity The createdByIdentity property
    */
    private ?IdentitySet $createdByIdentity = null;
    
    /**
     * @var DateTime|null $createdTime The createdTime property
    */
    private ?DateTime $createdTime = null;
    
    /**
     * @var string|null $escapedSelf The self property
    */
    private ?string $escapedSelf = null;
    
    /**
     * @var string|null $id The id property
    */
    private ?string $id = null;
    
    /**
     * @var bool|null $isDefault The isDefault property
    */
    private ?bool $isDefault = null;
    
    /**
     * @var bool|null $isShared The isShared property
    */
    private ?bool $isShared = null;
    
    /**
     * @var string|null $lastModifiedBy The lastModifiedBy property
    */
    private ?string $lastModifiedBy = null;
    
    /**
     * @var IdentitySet|null $lastModifiedByIdentity The lastModifiedByIdentity property
    */
    private ?IdentitySet $lastModifiedByIdentity = null;
    
    /**
     * @var DateTime|null $lastModifiedTime The lastModifiedTime property
    */
    private ?DateTime $lastModifiedTime = null;
    
    /**
     * @var NotebookLinks|null $links The links property
    */
    private ?NotebookLinks $links = null;
    
    /**
     * @var string|null $name The name property
    */
    private ?string $name = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var string|null $sectionGroupsUrl The sectionGroupsUrl property
    */
    private ?string $sectionGroupsUrl = null;
    
    /**
     * @var string|null $sectionsUrl The sectionsUrl property
    */
    private ?string $sectionsUrl = null;
    
    /**
     * @var OnenoteUserRole|null $userRole The userRole property
    */
    private ?OnenoteUserRole $userRole = null;
    
    /**
     * Instantiates a new CopyNotebookModel and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.CopyNotebookModel');
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
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the createdBy property value. The createdBy property
     * @return string|null
    */
    public function getCreatedBy(): ?string {
        return $this->createdBy;
    }

    /**
     * Gets the createdByIdentity property value. The createdByIdentity property
     * @return IdentitySet|null
    */
    public function getCreatedByIdentity(): ?IdentitySet {
        return $this->createdByIdentity;
    }

    /**
     * Gets the createdTime property value. The createdTime property
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
        $o = $this;
        return  [
            'createdBy' => fn(ParseNode $n) => $o->setCreatedBy($n->getStringValue()),
            'createdByIdentity' => fn(ParseNode $n) => $o->setCreatedByIdentity($n->getObjectValue([IdentitySet::class, 'createFromDiscriminatorValue'])),
            'createdTime' => fn(ParseNode $n) => $o->setCreatedTime($n->getDateTimeValue()),
            'self' => fn(ParseNode $n) => $o->setSelf($n->getStringValue()),
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
            'userRole' => fn(ParseNode $n) => $o->setUserRole($n->getEnumValue(OnenoteUserRole::class)),
        ];
    }

    /**
     * Gets the id property value. The id property
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the isDefault property value. The isDefault property
     * @return bool|null
    */
    public function getIsDefault(): ?bool {
        return $this->isDefault;
    }

    /**
     * Gets the isShared property value. The isShared property
     * @return bool|null
    */
    public function getIsShared(): ?bool {
        return $this->isShared;
    }

    /**
     * Gets the lastModifiedBy property value. The lastModifiedBy property
     * @return string|null
    */
    public function getLastModifiedBy(): ?string {
        return $this->lastModifiedBy;
    }

    /**
     * Gets the lastModifiedByIdentity property value. The lastModifiedByIdentity property
     * @return IdentitySet|null
    */
    public function getLastModifiedByIdentity(): ?IdentitySet {
        return $this->lastModifiedByIdentity;
    }

    /**
     * Gets the lastModifiedTime property value. The lastModifiedTime property
     * @return DateTime|null
    */
    public function getLastModifiedTime(): ?DateTime {
        return $this->lastModifiedTime;
    }

    /**
     * Gets the links property value. The links property
     * @return NotebookLinks|null
    */
    public function getLinks(): ?NotebookLinks {
        return $this->links;
    }

    /**
     * Gets the name property value. The name property
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the sectionGroupsUrl property value. The sectionGroupsUrl property
     * @return string|null
    */
    public function getSectionGroupsUrl(): ?string {
        return $this->sectionGroupsUrl;
    }

    /**
     * Gets the sectionsUrl property value. The sectionsUrl property
     * @return string|null
    */
    public function getSectionsUrl(): ?string {
        return $this->sectionsUrl;
    }

    /**
     * Gets the self property value. The self property
     * @return string|null
    */
    public function getSelf(): ?string {
        return $this->escapedSelf;
    }

    /**
     * Gets the userRole property value. The userRole property
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
        $writer->writeStringValue('@odata.type', $this->odataType);
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
     * Sets the createdBy property value. The createdBy property
     *  @param string|null $value Value to set for the createdBy property.
    */
    public function setCreatedBy(?string $value ): void {
        $this->createdBy = $value;
    }

    /**
     * Sets the createdByIdentity property value. The createdByIdentity property
     *  @param IdentitySet|null $value Value to set for the createdByIdentity property.
    */
    public function setCreatedByIdentity(?IdentitySet $value ): void {
        $this->createdByIdentity = $value;
    }

    /**
     * Sets the createdTime property value. The createdTime property
     *  @param DateTime|null $value Value to set for the createdTime property.
    */
    public function setCreatedTime(?DateTime $value ): void {
        $this->createdTime = $value;
    }

    /**
     * Sets the id property value. The id property
     *  @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value ): void {
        $this->id = $value;
    }

    /**
     * Sets the isDefault property value. The isDefault property
     *  @param bool|null $value Value to set for the isDefault property.
    */
    public function setIsDefault(?bool $value ): void {
        $this->isDefault = $value;
    }

    /**
     * Sets the isShared property value. The isShared property
     *  @param bool|null $value Value to set for the isShared property.
    */
    public function setIsShared(?bool $value ): void {
        $this->isShared = $value;
    }

    /**
     * Sets the lastModifiedBy property value. The lastModifiedBy property
     *  @param string|null $value Value to set for the lastModifiedBy property.
    */
    public function setLastModifiedBy(?string $value ): void {
        $this->lastModifiedBy = $value;
    }

    /**
     * Sets the lastModifiedByIdentity property value. The lastModifiedByIdentity property
     *  @param IdentitySet|null $value Value to set for the lastModifiedByIdentity property.
    */
    public function setLastModifiedByIdentity(?IdentitySet $value ): void {
        $this->lastModifiedByIdentity = $value;
    }

    /**
     * Sets the lastModifiedTime property value. The lastModifiedTime property
     *  @param DateTime|null $value Value to set for the lastModifiedTime property.
    */
    public function setLastModifiedTime(?DateTime $value ): void {
        $this->lastModifiedTime = $value;
    }

    /**
     * Sets the links property value. The links property
     *  @param NotebookLinks|null $value Value to set for the links property.
    */
    public function setLinks(?NotebookLinks $value ): void {
        $this->links = $value;
    }

    /**
     * Sets the name property value. The name property
     *  @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value ): void {
        $this->name = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the sectionGroupsUrl property value. The sectionGroupsUrl property
     *  @param string|null $value Value to set for the sectionGroupsUrl property.
    */
    public function setSectionGroupsUrl(?string $value ): void {
        $this->sectionGroupsUrl = $value;
    }

    /**
     * Sets the sectionsUrl property value. The sectionsUrl property
     *  @param string|null $value Value to set for the sectionsUrl property.
    */
    public function setSectionsUrl(?string $value ): void {
        $this->sectionsUrl = $value;
    }

    /**
     * Sets the self property value. The self property
     *  @param string|null $value Value to set for the EscapedSelf property.
    */
    public function setSelf(?string $value ): void {
        $this->escapedSelf = $value;
    }

    /**
     * Sets the userRole property value. The userRole property
     *  @param OnenoteUserRole|null $value Value to set for the userRole property.
    */
    public function setUserRole(?OnenoteUserRole $value ): void {
        $this->userRole = $value;
    }

}
