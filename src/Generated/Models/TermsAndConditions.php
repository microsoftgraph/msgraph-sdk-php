<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TermsAndConditions extends Entity 
{
    /** @var string|null $acceptanceStatement Administrator-supplied explanation of the terms and conditions, typically describing what it means to accept the terms and conditions set out in the T&C policy. This is shown to the user on prompts to accept the T&C policy. */
    private ?string $acceptanceStatement = null;
    
    /** @var array<TermsAndConditionsAcceptanceStatus>|null $acceptanceStatuses The list of acceptance statuses for this T&C policy. */
    private ?array $acceptanceStatuses = null;
    
    /** @var array<TermsAndConditionsAssignment>|null $assignments The list of assignments for this T&C policy. */
    private ?array $assignments = null;
    
    /** @var string|null $bodyText Administrator-supplied body text of the terms and conditions, typically the terms themselves. This is shown to the user on prompts to accept the T&C policy. */
    private ?string $bodyText = null;
    
    /** @var DateTime|null $createdDateTime DateTime the object was created. */
    private ?DateTime $createdDateTime = null;
    
    /** @var string|null $description Administrator-supplied description of the T&C policy. */
    private ?string $description = null;
    
    /** @var string|null $displayName Administrator-supplied name for the T&C policy. */
    private ?string $displayName = null;
    
    /** @var DateTime|null $lastModifiedDateTime DateTime the object was last modified. */
    private ?DateTime $lastModifiedDateTime = null;
    
    /** @var string|null $title Administrator-supplied title of the terms and conditions. This is shown to the user on prompts to accept the T&C policy. */
    private ?string $title = null;
    
    /** @var int|null $version Integer indicating the current version of the terms. Incremented when an administrator makes a change to the terms and wishes to require users to re-accept the modified T&C policy. */
    private ?int $version = null;
    
    /**
     * Instantiates a new termsAndConditions and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TermsAndConditions
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): TermsAndConditions {
        return new TermsAndConditions();
    }

    /**
     * Gets the acceptanceStatement property value. Administrator-supplied explanation of the terms and conditions, typically describing what it means to accept the terms and conditions set out in the T&C policy. This is shown to the user on prompts to accept the T&C policy.
     * @return string|null
    */
    public function getAcceptanceStatement(): ?string {
        return $this->acceptanceStatement;
    }

    /**
     * Gets the acceptanceStatuses property value. The list of acceptance statuses for this T&C policy.
     * @return array<TermsAndConditionsAcceptanceStatus>|null
    */
    public function getAcceptanceStatuses(): ?array {
        return $this->acceptanceStatuses;
    }

    /**
     * Gets the assignments property value. The list of assignments for this T&C policy.
     * @return array<TermsAndConditionsAssignment>|null
    */
    public function getAssignments(): ?array {
        return $this->assignments;
    }

    /**
     * Gets the bodyText property value. Administrator-supplied body text of the terms and conditions, typically the terms themselves. This is shown to the user on prompts to accept the T&C policy.
     * @return string|null
    */
    public function getBodyText(): ?string {
        return $this->bodyText;
    }

    /**
     * Gets the createdDateTime property value. DateTime the object was created.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * Gets the description property value. Administrator-supplied description of the T&C policy.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the displayName property value. Administrator-supplied name for the T&C policy.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'acceptanceStatement' => function (self $o, ParseNode $n) { $o->setAcceptanceStatement($n->getStringValue()); },
            'acceptanceStatuses' => function (self $o, ParseNode $n) { $o->setAcceptanceStatuses($n->getCollectionOfObjectValues(TermsAndConditionsAcceptanceStatus::class)); },
            'assignments' => function (self $o, ParseNode $n) { $o->setAssignments($n->getCollectionOfObjectValues(TermsAndConditionsAssignment::class)); },
            'bodyText' => function (self $o, ParseNode $n) { $o->setBodyText($n->getStringValue()); },
            'createdDateTime' => function (self $o, ParseNode $n) { $o->setCreatedDateTime($n->getDateTimeValue()); },
            'description' => function (self $o, ParseNode $n) { $o->setDescription($n->getStringValue()); },
            'displayName' => function (self $o, ParseNode $n) { $o->setDisplayName($n->getStringValue()); },
            'lastModifiedDateTime' => function (self $o, ParseNode $n) { $o->setLastModifiedDateTime($n->getDateTimeValue()); },
            'title' => function (self $o, ParseNode $n) { $o->setTitle($n->getStringValue()); },
            'version' => function (self $o, ParseNode $n) { $o->setVersion($n->getIntegerValue()); },
        ]);
    }

    /**
     * Gets the lastModifiedDateTime property value. DateTime the object was last modified.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->lastModifiedDateTime;
    }

    /**
     * Gets the title property value. Administrator-supplied title of the terms and conditions. This is shown to the user on prompts to accept the T&C policy.
     * @return string|null
    */
    public function getTitle(): ?string {
        return $this->title;
    }

    /**
     * Gets the version property value. Integer indicating the current version of the terms. Incremented when an administrator makes a change to the terms and wishes to require users to re-accept the modified T&C policy.
     * @return int|null
    */
    public function getVersion(): ?int {
        return $this->version;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('acceptanceStatement', $this->acceptanceStatement);
        $writer->writeCollectionOfObjectValues('acceptanceStatuses', $this->acceptanceStatuses);
        $writer->writeCollectionOfObjectValues('assignments', $this->assignments);
        $writer->writeStringValue('bodyText', $this->bodyText);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeStringValue('description', $this->description);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->lastModifiedDateTime);
        $writer->writeStringValue('title', $this->title);
        $writer->writeIntegerValue('version', $this->version);
    }

    /**
     * Sets the acceptanceStatement property value. Administrator-supplied explanation of the terms and conditions, typically describing what it means to accept the terms and conditions set out in the T&C policy. This is shown to the user on prompts to accept the T&C policy.
     *  @param string|null $value Value to set for the acceptanceStatement property.
    */
    public function setAcceptanceStatement(?string $value ): void {
        $this->acceptanceStatement = $value;
    }

    /**
     * Sets the acceptanceStatuses property value. The list of acceptance statuses for this T&C policy.
     *  @param array<TermsAndConditionsAcceptanceStatus>|null $value Value to set for the acceptanceStatuses property.
    */
    public function setAcceptanceStatuses(?array $value ): void {
        $this->acceptanceStatuses = $value;
    }

    /**
     * Sets the assignments property value. The list of assignments for this T&C policy.
     *  @param array<TermsAndConditionsAssignment>|null $value Value to set for the assignments property.
    */
    public function setAssignments(?array $value ): void {
        $this->assignments = $value;
    }

    /**
     * Sets the bodyText property value. Administrator-supplied body text of the terms and conditions, typically the terms themselves. This is shown to the user on prompts to accept the T&C policy.
     *  @param string|null $value Value to set for the bodyText property.
    */
    public function setBodyText(?string $value ): void {
        $this->bodyText = $value;
    }

    /**
     * Sets the createdDateTime property value. DateTime the object was created.
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the description property value. Administrator-supplied description of the T&C policy.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the displayName property value. Administrator-supplied name for the T&C policy.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the lastModifiedDateTime property value. DateTime the object was last modified.
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value ): void {
        $this->lastModifiedDateTime = $value;
    }

    /**
     * Sets the title property value. Administrator-supplied title of the terms and conditions. This is shown to the user on prompts to accept the T&C policy.
     *  @param string|null $value Value to set for the title property.
    */
    public function setTitle(?string $value ): void {
        $this->title = $value;
    }

    /**
     * Sets the version property value. Integer indicating the current version of the terms. Incremented when an administrator makes a change to the terms and wishes to require users to re-accept the modified T&C policy.
     *  @param int|null $value Value to set for the version property.
    */
    public function setVersion(?int $value ): void {
        $this->version = $value;
    }

}
