<?php

namespace Microsoft\Graph\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ManagedEBook extends Entity implements Parsable 
{
    /**
     * @var array<ManagedEBookAssignment>|null $assignments The list of assignments for this eBook.
    */
    private ?array $assignments = null;
    
    /**
     * @var DateTime|null $createdDateTime The date and time when the eBook file was created.
    */
    private ?DateTime $createdDateTime = null;
    
    /**
     * @var string|null $description Description.
    */
    private ?string $description = null;
    
    /**
     * @var array<DeviceInstallState>|null $deviceStates The list of installation states for this eBook.
    */
    private ?array $deviceStates = null;
    
    /**
     * @var string|null $displayName Name of the eBook.
    */
    private ?string $displayName = null;
    
    /**
     * @var string|null $informationUrl The more information Url.
    */
    private ?string $informationUrl = null;
    
    /**
     * @var EBookInstallSummary|null $installSummary Mobile App Install Summary.
    */
    private ?EBookInstallSummary $installSummary = null;
    
    /**
     * @var MimeContent|null $largeCover Book cover.
    */
    private ?MimeContent $largeCover = null;
    
    /**
     * @var DateTime|null $lastModifiedDateTime The date and time when the eBook was last modified.
    */
    private ?DateTime $lastModifiedDateTime = null;
    
    /**
     * @var string|null $privacyInformationUrl The privacy statement Url.
    */
    private ?string $privacyInformationUrl = null;
    
    /**
     * @var DateTime|null $publishedDateTime The date and time when the eBook was published.
    */
    private ?DateTime $publishedDateTime = null;
    
    /**
     * @var string|null $publisher Publisher.
    */
    private ?string $publisher = null;
    
    /**
     * @var array<UserInstallStateSummary>|null $userStateSummary The list of installation states for this eBook.
    */
    private ?array $userStateSummary = null;
    
    /**
     * Instantiates a new managedEBook and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ManagedEBook
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ManagedEBook {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.iosVppEBook': return new IosVppEBook();
            }
        }
        return new ManagedEBook();
    }

    /**
     * Gets the assignments property value. The list of assignments for this eBook.
     * @return array<ManagedEBookAssignment>|null
    */
    public function getAssignments(): ?array {
        return $this->assignments;
    }

    /**
     * Gets the createdDateTime property value. The date and time when the eBook file was created.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * Gets the description property value. Description.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the deviceStates property value. The list of installation states for this eBook.
     * @return array<DeviceInstallState>|null
    */
    public function getDeviceStates(): ?array {
        return $this->deviceStates;
    }

    /**
     * Gets the displayName property value. Name of the eBook.
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
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'assignments' => function (ParseNode $n) use ($o) { $o->setAssignments($n->getCollectionOfObjectValues(array(ManagedEBookAssignment::class, 'createFromDiscriminatorValue'))); },
            'createdDateTime' => function (ParseNode $n) use ($o) { $o->setCreatedDateTime($n->getDateTimeValue()); },
            'description' => function (ParseNode $n) use ($o) { $o->setDescription($n->getStringValue()); },
            'deviceStates' => function (ParseNode $n) use ($o) { $o->setDeviceStates($n->getCollectionOfObjectValues(array(DeviceInstallState::class, 'createFromDiscriminatorValue'))); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'informationUrl' => function (ParseNode $n) use ($o) { $o->setInformationUrl($n->getStringValue()); },
            'installSummary' => function (ParseNode $n) use ($o) { $o->setInstallSummary($n->getObjectValue(array(EBookInstallSummary::class, 'createFromDiscriminatorValue'))); },
            'largeCover' => function (ParseNode $n) use ($o) { $o->setLargeCover($n->getObjectValue(array(MimeContent::class, 'createFromDiscriminatorValue'))); },
            'lastModifiedDateTime' => function (ParseNode $n) use ($o) { $o->setLastModifiedDateTime($n->getDateTimeValue()); },
            'privacyInformationUrl' => function (ParseNode $n) use ($o) { $o->setPrivacyInformationUrl($n->getStringValue()); },
            'publishedDateTime' => function (ParseNode $n) use ($o) { $o->setPublishedDateTime($n->getDateTimeValue()); },
            'publisher' => function (ParseNode $n) use ($o) { $o->setPublisher($n->getStringValue()); },
            'userStateSummary' => function (ParseNode $n) use ($o) { $o->setUserStateSummary($n->getCollectionOfObjectValues(array(UserInstallStateSummary::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the informationUrl property value. The more information Url.
     * @return string|null
    */
    public function getInformationUrl(): ?string {
        return $this->informationUrl;
    }

    /**
     * Gets the installSummary property value. Mobile App Install Summary.
     * @return EBookInstallSummary|null
    */
    public function getInstallSummary(): ?EBookInstallSummary {
        return $this->installSummary;
    }

    /**
     * Gets the largeCover property value. Book cover.
     * @return MimeContent|null
    */
    public function getLargeCover(): ?MimeContent {
        return $this->largeCover;
    }

    /**
     * Gets the lastModifiedDateTime property value. The date and time when the eBook was last modified.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->lastModifiedDateTime;
    }

    /**
     * Gets the privacyInformationUrl property value. The privacy statement Url.
     * @return string|null
    */
    public function getPrivacyInformationUrl(): ?string {
        return $this->privacyInformationUrl;
    }

    /**
     * Gets the publishedDateTime property value. The date and time when the eBook was published.
     * @return DateTime|null
    */
    public function getPublishedDateTime(): ?DateTime {
        return $this->publishedDateTime;
    }

    /**
     * Gets the publisher property value. Publisher.
     * @return string|null
    */
    public function getPublisher(): ?string {
        return $this->publisher;
    }

    /**
     * Gets the userStateSummary property value. The list of installation states for this eBook.
     * @return array<UserInstallStateSummary>|null
    */
    public function getUserStateSummary(): ?array {
        return $this->userStateSummary;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('assignments', $this->assignments);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeStringValue('description', $this->description);
        $writer->writeCollectionOfObjectValues('deviceStates', $this->deviceStates);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeStringValue('informationUrl', $this->informationUrl);
        $writer->writeObjectValue('installSummary', $this->installSummary);
        $writer->writeObjectValue('largeCover', $this->largeCover);
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->lastModifiedDateTime);
        $writer->writeStringValue('privacyInformationUrl', $this->privacyInformationUrl);
        $writer->writeDateTimeValue('publishedDateTime', $this->publishedDateTime);
        $writer->writeStringValue('publisher', $this->publisher);
        $writer->writeCollectionOfObjectValues('userStateSummary', $this->userStateSummary);
    }

    /**
     * Sets the assignments property value. The list of assignments for this eBook.
     *  @param array<ManagedEBookAssignment>|null $value Value to set for the assignments property.
    */
    public function setAssignments(?array $value ): void {
        $this->assignments = $value;
    }

    /**
     * Sets the createdDateTime property value. The date and time when the eBook file was created.
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the description property value. Description.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the deviceStates property value. The list of installation states for this eBook.
     *  @param array<DeviceInstallState>|null $value Value to set for the deviceStates property.
    */
    public function setDeviceStates(?array $value ): void {
        $this->deviceStates = $value;
    }

    /**
     * Sets the displayName property value. Name of the eBook.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the informationUrl property value. The more information Url.
     *  @param string|null $value Value to set for the informationUrl property.
    */
    public function setInformationUrl(?string $value ): void {
        $this->informationUrl = $value;
    }

    /**
     * Sets the installSummary property value. Mobile App Install Summary.
     *  @param EBookInstallSummary|null $value Value to set for the installSummary property.
    */
    public function setInstallSummary(?EBookInstallSummary $value ): void {
        $this->installSummary = $value;
    }

    /**
     * Sets the largeCover property value. Book cover.
     *  @param MimeContent|null $value Value to set for the largeCover property.
    */
    public function setLargeCover(?MimeContent $value ): void {
        $this->largeCover = $value;
    }

    /**
     * Sets the lastModifiedDateTime property value. The date and time when the eBook was last modified.
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value ): void {
        $this->lastModifiedDateTime = $value;
    }

    /**
     * Sets the privacyInformationUrl property value. The privacy statement Url.
     *  @param string|null $value Value to set for the privacyInformationUrl property.
    */
    public function setPrivacyInformationUrl(?string $value ): void {
        $this->privacyInformationUrl = $value;
    }

    /**
     * Sets the publishedDateTime property value. The date and time when the eBook was published.
     *  @param DateTime|null $value Value to set for the publishedDateTime property.
    */
    public function setPublishedDateTime(?DateTime $value ): void {
        $this->publishedDateTime = $value;
    }

    /**
     * Sets the publisher property value. Publisher.
     *  @param string|null $value Value to set for the publisher property.
    */
    public function setPublisher(?string $value ): void {
        $this->publisher = $value;
    }

    /**
     * Sets the userStateSummary property value. The list of installation states for this eBook.
     *  @param array<UserInstallStateSummary>|null $value Value to set for the userStateSummary property.
    */
    public function setUserStateSummary(?array $value ): void {
        $this->userStateSummary = $value;
    }

}
