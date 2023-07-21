<?php

namespace Microsoft\Graph\Generated\Models;

use DateInterval;
use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class LearningContent extends Entity implements Parsable 
{
    /**
     * Instantiates a new learningContent and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return LearningContent
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): LearningContent {
        return new LearningContent();
    }

    /**
     * Gets the additionalTags property value. Keywords, topics, and other tags associated with the learning content. Optional.
     * @return array<string>|null
    */
    public function getAdditionalTags(): ?array {
        $val = $this->getBackingStore()->get('additionalTags');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalTags'");
    }

    /**
     * Gets the contentWebUrl property value. The content web URL for the learning content. Required.
     * @return string|null
    */
    public function getContentWebUrl(): ?string {
        $val = $this->getBackingStore()->get('contentWebUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'contentWebUrl'");
    }

    /**
     * Gets the contributors property value. The authors, creators, or contributors of the learning content. Optional.
     * @return array<string>|null
    */
    public function getContributors(): ?array {
        $val = $this->getBackingStore()->get('contributors');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'contributors'");
    }

    /**
     * Gets the createdDateTime property value. The date and time when the learning content was created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Optional.
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
     * Gets the description property value. The description or summary for the learning content. Optional.
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
     * Gets the duration property value. The duration of the learning content in seconds. The value is represented in ISO 8601 format for durations. Optional.
     * @return DateInterval|null
    */
    public function getDuration(): ?DateInterval {
        $val = $this->getBackingStore()->get('duration');
        if (is_null($val) || $val instanceof DateInterval) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'duration'");
    }

    /**
     * Gets the externalId property value. Unique external content ID for the learning content. Required.
     * @return string|null
    */
    public function getExternalId(): ?string {
        $val = $this->getBackingStore()->get('externalId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'externalId'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'additionalTags' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setAdditionalTags($val);
            },
            'contentWebUrl' => fn(ParseNode $n) => $o->setContentWebUrl($n->getStringValue()),
            'contributors' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setContributors($val);
            },
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'duration' => fn(ParseNode $n) => $o->setDuration($n->getDateIntervalValue()),
            'externalId' => fn(ParseNode $n) => $o->setExternalId($n->getStringValue()),
            'format' => fn(ParseNode $n) => $o->setFormat($n->getStringValue()),
            'isActive' => fn(ParseNode $n) => $o->setIsActive($n->getBooleanValue()),
            'isPremium' => fn(ParseNode $n) => $o->setIsPremium($n->getBooleanValue()),
            'isSearchable' => fn(ParseNode $n) => $o->setIsSearchable($n->getBooleanValue()),
            'languageTag' => fn(ParseNode $n) => $o->setLanguageTag($n->getStringValue()),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'numberOfPages' => fn(ParseNode $n) => $o->setNumberOfPages($n->getIntegerValue()),
            'skillTags' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setSkillTags($val);
            },
            'sourceName' => fn(ParseNode $n) => $o->setSourceName($n->getStringValue()),
            'thumbnailWebUrl' => fn(ParseNode $n) => $o->setThumbnailWebUrl($n->getStringValue()),
            'title' => fn(ParseNode $n) => $o->setTitle($n->getStringValue()),
        ]);
    }

    /**
     * Gets the format property value. The format of the learning content. For example, Course, Video, Book, Book Summary, Audiobook Summary. Optional.
     * @return string|null
    */
    public function getFormat(): ?string {
        $val = $this->getBackingStore()->get('format');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'format'");
    }

    /**
     * Gets the isActive property value. Indicates whether the content is active or not. Inactive content doesn't show up in the UI. The default value is true. Optional.
     * @return bool|null
    */
    public function getIsActive(): ?bool {
        $val = $this->getBackingStore()->get('isActive');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isActive'");
    }

    /**
     * Gets the isPremium property value. Indicates whether the learning content requires the user to sign-in on the learning provider platform or not. The default value is false. Optional.
     * @return bool|null
    */
    public function getIsPremium(): ?bool {
        $val = $this->getBackingStore()->get('isPremium');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isPremium'");
    }

    /**
     * Gets the isSearchable property value. Indicates whether the learning content is searchable or not. The default value is true. Optional.
     * @return bool|null
    */
    public function getIsSearchable(): ?bool {
        $val = $this->getBackingStore()->get('isSearchable');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isSearchable'");
    }

    /**
     * Gets the languageTag property value. The language of the learning content, for example, en-us or fr-fr. Required.
     * @return string|null
    */
    public function getLanguageTag(): ?string {
        $val = $this->getBackingStore()->get('languageTag');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'languageTag'");
    }

    /**
     * Gets the lastModifiedDateTime property value. The date and time when the learning content was last modified. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Optional.
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
     * Gets the numberOfPages property value. The number of pages of the learning content, for example, 9. Optional.
     * @return int|null
    */
    public function getNumberOfPages(): ?int {
        $val = $this->getBackingStore()->get('numberOfPages');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'numberOfPages'");
    }

    /**
     * Gets the skillTags property value. The skills tags associated with the learning content. Optional.
     * @return array<string>|null
    */
    public function getSkillTags(): ?array {
        $val = $this->getBackingStore()->get('skillTags');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'skillTags'");
    }

    /**
     * Gets the sourceName property value. The source name of the learning content, such as LinkedIn Learning or Coursera. Optional.
     * @return string|null
    */
    public function getSourceName(): ?string {
        $val = $this->getBackingStore()->get('sourceName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sourceName'");
    }

    /**
     * Gets the thumbnailWebUrl property value. The URL of learning content thumbnail image. Optional.
     * @return string|null
    */
    public function getThumbnailWebUrl(): ?string {
        $val = $this->getBackingStore()->get('thumbnailWebUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'thumbnailWebUrl'");
    }

    /**
     * Gets the title property value. The title of the learning content. Required.
     * @return string|null
    */
    public function getTitle(): ?string {
        $val = $this->getBackingStore()->get('title');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'title'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfPrimitiveValues('additionalTags', $this->getAdditionalTags());
        $writer->writeStringValue('contentWebUrl', $this->getContentWebUrl());
        $writer->writeCollectionOfPrimitiveValues('contributors', $this->getContributors());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeDateIntervalValue('duration', $this->getDuration());
        $writer->writeStringValue('externalId', $this->getExternalId());
        $writer->writeStringValue('format', $this->getFormat());
        $writer->writeBooleanValue('isActive', $this->getIsActive());
        $writer->writeBooleanValue('isPremium', $this->getIsPremium());
        $writer->writeBooleanValue('isSearchable', $this->getIsSearchable());
        $writer->writeStringValue('languageTag', $this->getLanguageTag());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeIntegerValue('numberOfPages', $this->getNumberOfPages());
        $writer->writeCollectionOfPrimitiveValues('skillTags', $this->getSkillTags());
        $writer->writeStringValue('sourceName', $this->getSourceName());
        $writer->writeStringValue('thumbnailWebUrl', $this->getThumbnailWebUrl());
        $writer->writeStringValue('title', $this->getTitle());
    }

    /**
     * Sets the additionalTags property value. Keywords, topics, and other tags associated with the learning content. Optional.
     * @param array<string>|null $value Value to set for the additionalTags property.
    */
    public function setAdditionalTags(?array $value): void {
        $this->getBackingStore()->set('additionalTags', $value);
    }

    /**
     * Sets the contentWebUrl property value. The content web URL for the learning content. Required.
     * @param string|null $value Value to set for the contentWebUrl property.
    */
    public function setContentWebUrl(?string $value): void {
        $this->getBackingStore()->set('contentWebUrl', $value);
    }

    /**
     * Sets the contributors property value. The authors, creators, or contributors of the learning content. Optional.
     * @param array<string>|null $value Value to set for the contributors property.
    */
    public function setContributors(?array $value): void {
        $this->getBackingStore()->set('contributors', $value);
    }

    /**
     * Sets the createdDateTime property value. The date and time when the learning content was created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Optional.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the description property value. The description or summary for the learning content. Optional.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the duration property value. The duration of the learning content in seconds. The value is represented in ISO 8601 format for durations. Optional.
     * @param DateInterval|null $value Value to set for the duration property.
    */
    public function setDuration(?DateInterval $value): void {
        $this->getBackingStore()->set('duration', $value);
    }

    /**
     * Sets the externalId property value. Unique external content ID for the learning content. Required.
     * @param string|null $value Value to set for the externalId property.
    */
    public function setExternalId(?string $value): void {
        $this->getBackingStore()->set('externalId', $value);
    }

    /**
     * Sets the format property value. The format of the learning content. For example, Course, Video, Book, Book Summary, Audiobook Summary. Optional.
     * @param string|null $value Value to set for the format property.
    */
    public function setFormat(?string $value): void {
        $this->getBackingStore()->set('format', $value);
    }

    /**
     * Sets the isActive property value. Indicates whether the content is active or not. Inactive content doesn't show up in the UI. The default value is true. Optional.
     * @param bool|null $value Value to set for the isActive property.
    */
    public function setIsActive(?bool $value): void {
        $this->getBackingStore()->set('isActive', $value);
    }

    /**
     * Sets the isPremium property value. Indicates whether the learning content requires the user to sign-in on the learning provider platform or not. The default value is false. Optional.
     * @param bool|null $value Value to set for the isPremium property.
    */
    public function setIsPremium(?bool $value): void {
        $this->getBackingStore()->set('isPremium', $value);
    }

    /**
     * Sets the isSearchable property value. Indicates whether the learning content is searchable or not. The default value is true. Optional.
     * @param bool|null $value Value to set for the isSearchable property.
    */
    public function setIsSearchable(?bool $value): void {
        $this->getBackingStore()->set('isSearchable', $value);
    }

    /**
     * Sets the languageTag property value. The language of the learning content, for example, en-us or fr-fr. Required.
     * @param string|null $value Value to set for the languageTag property.
    */
    public function setLanguageTag(?string $value): void {
        $this->getBackingStore()->set('languageTag', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. The date and time when the learning content was last modified. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Optional.
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the numberOfPages property value. The number of pages of the learning content, for example, 9. Optional.
     * @param int|null $value Value to set for the numberOfPages property.
    */
    public function setNumberOfPages(?int $value): void {
        $this->getBackingStore()->set('numberOfPages', $value);
    }

    /**
     * Sets the skillTags property value. The skills tags associated with the learning content. Optional.
     * @param array<string>|null $value Value to set for the skillTags property.
    */
    public function setSkillTags(?array $value): void {
        $this->getBackingStore()->set('skillTags', $value);
    }

    /**
     * Sets the sourceName property value. The source name of the learning content, such as LinkedIn Learning or Coursera. Optional.
     * @param string|null $value Value to set for the sourceName property.
    */
    public function setSourceName(?string $value): void {
        $this->getBackingStore()->set('sourceName', $value);
    }

    /**
     * Sets the thumbnailWebUrl property value. The URL of learning content thumbnail image. Optional.
     * @param string|null $value Value to set for the thumbnailWebUrl property.
    */
    public function setThumbnailWebUrl(?string $value): void {
        $this->getBackingStore()->set('thumbnailWebUrl', $value);
    }

    /**
     * Sets the title property value. The title of the learning content. Required.
     * @param string|null $value Value to set for the title property.
    */
    public function setTitle(?string $value): void {
        $this->getBackingStore()->set('title', $value);
    }

}
