<?php

namespace Microsoft\\Graph\\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * An abstract class containing the base properties for Managed eBook.
*/
class ManagedEBook extends Entity implements Parsable 
{
    /**
     * Instantiates a new ManagedEBook and sets the default values.
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
        $val = $this->getBackingStore()->get('assignments');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ManagedEBookAssignment::class);
            /** @var array<ManagedEBookAssignment>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'assignments'");
    }

    /**
     * Gets the createdDateTime property value. The date and time when the eBook file was created.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('createdDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdDateTime'");
    }

    /**
     * Gets the description property value. Description.
     * @return string|null
    */
    public function getDescription(): ?string {
        $val = $this->getBackingStore()->get('description');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'description'");
    }

    /**
     * Gets the deviceStates property value. The list of installation states for this eBook.
     * @return array<DeviceInstallState>|null
    */
    public function getDeviceStates(): ?array {
        $val = $this->getBackingStore()->get('deviceStates');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DeviceInstallState::class);
            /** @var array<DeviceInstallState>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceStates'");
    }

    /**
     * Gets the displayName property value. Name of the eBook.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        $val = $this->getBackingStore()->get('displayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayName'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'assignments' => fn(ParseNode $n) => $o->setAssignments($n->getCollectionOfObjectValues([ManagedEBookAssignment::class, 'createFromDiscriminatorValue'])),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'deviceStates' => fn(ParseNode $n) => $o->setDeviceStates($n->getCollectionOfObjectValues([DeviceInstallState::class, 'createFromDiscriminatorValue'])),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'informationUrl' => fn(ParseNode $n) => $o->setInformationUrl($n->getStringValue()),
            'installSummary' => fn(ParseNode $n) => $o->setInstallSummary($n->getObjectValue([EBookInstallSummary::class, 'createFromDiscriminatorValue'])),
            'largeCover' => fn(ParseNode $n) => $o->setLargeCover($n->getObjectValue([MimeContent::class, 'createFromDiscriminatorValue'])),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'privacyInformationUrl' => fn(ParseNode $n) => $o->setPrivacyInformationUrl($n->getStringValue()),
            'publishedDateTime' => fn(ParseNode $n) => $o->setPublishedDateTime($n->getDateTimeValue()),
            'publisher' => fn(ParseNode $n) => $o->setPublisher($n->getStringValue()),
            'userStateSummary' => fn(ParseNode $n) => $o->setUserStateSummary($n->getCollectionOfObjectValues([UserInstallStateSummary::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the informationUrl property value. The more information Url.
     * @return string|null
    */
    public function getInformationUrl(): ?string {
        $val = $this->getBackingStore()->get('informationUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'informationUrl'");
    }

    /**
     * Gets the installSummary property value. Mobile App Install Summary.
     * @return EBookInstallSummary|null
    */
    public function getInstallSummary(): ?EBookInstallSummary {
        $val = $this->getBackingStore()->get('installSummary');
        if (is_null($val) || $val instanceof EBookInstallSummary) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'installSummary'");
    }

    /**
     * Gets the largeCover property value. Book cover.
     * @return MimeContent|null
    */
    public function getLargeCover(): ?MimeContent {
        $val = $this->getBackingStore()->get('largeCover');
        if (is_null($val) || $val instanceof MimeContent) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'largeCover'");
    }

    /**
     * Gets the lastModifiedDateTime property value. The date and time when the eBook was last modified.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastModifiedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastModifiedDateTime'");
    }

    /**
     * Gets the privacyInformationUrl property value. The privacy statement Url.
     * @return string|null
    */
    public function getPrivacyInformationUrl(): ?string {
        $val = $this->getBackingStore()->get('privacyInformationUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'privacyInformationUrl'");
    }

    /**
     * Gets the publishedDateTime property value. The date and time when the eBook was published.
     * @return DateTime|null
    */
    public function getPublishedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('publishedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'publishedDateTime'");
    }

    /**
     * Gets the publisher property value. Publisher.
     * @return string|null
    */
    public function getPublisher(): ?string {
        $val = $this->getBackingStore()->get('publisher');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'publisher'");
    }

    /**
     * Gets the userStateSummary property value. The list of installation states for this eBook.
     * @return array<UserInstallStateSummary>|null
    */
    public function getUserStateSummary(): ?array {
        $val = $this->getBackingStore()->get('userStateSummary');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, UserInstallStateSummary::class);
            /** @var array<UserInstallStateSummary>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userStateSummary'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('assignments', $this->getAssignments());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeCollectionOfObjectValues('deviceStates', $this->getDeviceStates());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeStringValue('informationUrl', $this->getInformationUrl());
        $writer->writeObjectValue('installSummary', $this->getInstallSummary());
        $writer->writeObjectValue('largeCover', $this->getLargeCover());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeStringValue('privacyInformationUrl', $this->getPrivacyInformationUrl());
        $writer->writeDateTimeValue('publishedDateTime', $this->getPublishedDateTime());
        $writer->writeStringValue('publisher', $this->getPublisher());
        $writer->writeCollectionOfObjectValues('userStateSummary', $this->getUserStateSummary());
    }

    /**
     * Sets the assignments property value. The list of assignments for this eBook.
     * @param array<ManagedEBookAssignment>|null $value Value to set for the assignments property.
    */
    public function setAssignments(?array $value): void {
        $this->getBackingStore()->set('assignments', $value);
    }

    /**
     * Sets the createdDateTime property value. The date and time when the eBook file was created.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the description property value. Description.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the deviceStates property value. The list of installation states for this eBook.
     * @param array<DeviceInstallState>|null $value Value to set for the deviceStates property.
    */
    public function setDeviceStates(?array $value): void {
        $this->getBackingStore()->set('deviceStates', $value);
    }

    /**
     * Sets the displayName property value. Name of the eBook.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the informationUrl property value. The more information Url.
     * @param string|null $value Value to set for the informationUrl property.
    */
    public function setInformationUrl(?string $value): void {
        $this->getBackingStore()->set('informationUrl', $value);
    }

    /**
     * Sets the installSummary property value. Mobile App Install Summary.
     * @param EBookInstallSummary|null $value Value to set for the installSummary property.
    */
    public function setInstallSummary(?EBookInstallSummary $value): void {
        $this->getBackingStore()->set('installSummary', $value);
    }

    /**
     * Sets the largeCover property value. Book cover.
     * @param MimeContent|null $value Value to set for the largeCover property.
    */
    public function setLargeCover(?MimeContent $value): void {
        $this->getBackingStore()->set('largeCover', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. The date and time when the eBook was last modified.
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the privacyInformationUrl property value. The privacy statement Url.
     * @param string|null $value Value to set for the privacyInformationUrl property.
    */
    public function setPrivacyInformationUrl(?string $value): void {
        $this->getBackingStore()->set('privacyInformationUrl', $value);
    }

    /**
     * Sets the publishedDateTime property value. The date and time when the eBook was published.
     * @param DateTime|null $value Value to set for the publishedDateTime property.
    */
    public function setPublishedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('publishedDateTime', $value);
    }

    /**
     * Sets the publisher property value. Publisher.
     * @param string|null $value Value to set for the publisher property.
    */
    public function setPublisher(?string $value): void {
        $this->getBackingStore()->set('publisher', $value);
    }

    /**
     * Sets the userStateSummary property value. The list of installation states for this eBook.
     * @param array<UserInstallStateSummary>|null $value Value to set for the userStateSummary property.
    */
    public function setUserStateSummary(?array $value): void {
        $this->getBackingStore()->set('userStateSummary', $value);
    }

}
