<?php

namespace Microsoft\Graph\Generated\Models\Search;

use DateTime;
use Microsoft\Graph\Generated\Models\DevicePlatformType;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class Qna extends SearchAnswer implements Parsable 
{
    /**
     * Instantiates a new Qna and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Qna
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Qna {
        return new Qna();
    }

    /**
     * Gets the availabilityEndDateTime property value. Date and time when the QnA stops appearing as a search result. Set as null for always available. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getAvailabilityEndDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('availabilityEndDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'availabilityEndDateTime'");
    }

    /**
     * Gets the availabilityStartDateTime property value. Date and time when the QnA starts to appear as a search result. Set as null for always available. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getAvailabilityStartDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('availabilityStartDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'availabilityStartDateTime'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'availabilityEndDateTime' => fn(ParseNode $n) => $o->setAvailabilityEndDateTime($n->getDateTimeValue()),
            'availabilityStartDateTime' => fn(ParseNode $n) => $o->setAvailabilityStartDateTime($n->getDateTimeValue()),
            'groupIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setGroupIds($val);
            },
            'isSuggested' => fn(ParseNode $n) => $o->setIsSuggested($n->getBooleanValue()),
            'keywords' => fn(ParseNode $n) => $o->setKeywords($n->getObjectValue([AnswerKeyword::class, 'createFromDiscriminatorValue'])),
            'languageTags' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setLanguageTags($val);
            },
            'platforms' => fn(ParseNode $n) => $o->setPlatforms($n->getCollectionOfEnumValues(DevicePlatformType::class)),
            'state' => fn(ParseNode $n) => $o->setState($n->getEnumValue(AnswerState::class)),
            'targetedVariations' => fn(ParseNode $n) => $o->setTargetedVariations($n->getCollectionOfObjectValues([AnswerVariant::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the groupIds property value. The list of security groups that are able to view this QnA.
     * @return array<string>|null
    */
    public function getGroupIds(): ?array {
        $val = $this->getBackingStore()->get('groupIds');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'groupIds'");
    }

    /**
     * Gets the isSuggested property value. True if a user or Microsoft suggested this QnA to the admin. Read-only.
     * @return bool|null
    */
    public function getIsSuggested(): ?bool {
        $val = $this->getBackingStore()->get('isSuggested');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isSuggested'");
    }

    /**
     * Gets the keywords property value. Keywords that trigger this QnA to appear in search results.
     * @return AnswerKeyword|null
    */
    public function getKeywords(): ?AnswerKeyword {
        $val = $this->getBackingStore()->get('keywords');
        if (is_null($val) || $val instanceof AnswerKeyword) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'keywords'");
    }

    /**
     * Gets the languageTags property value. A list of geographically specific language names in which this QnA can be viewed. Each language tag value follows the pattern {language}-{region}. For example, en-us is English as used in the United States. For the list of possible values, see Supported language tags.
     * @return array<string>|null
    */
    public function getLanguageTags(): ?array {
        $val = $this->getBackingStore()->get('languageTags');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'languageTags'");
    }

    /**
     * Gets the platforms property value. List of devices and operating systems that are able to view this QnA. The possible values are: android, androidForWork, ios, macOS, windowsPhone81, windowsPhone81AndLater, windows10AndLater, androidWorkProfile, unknown, androidASOP, androidMobileApplicationManagement, iOSMobileApplicationManagement, unknownFutureValue.
     * @return array<DevicePlatformType>|null
    */
    public function getPlatforms(): ?array {
        $val = $this->getBackingStore()->get('platforms');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DevicePlatformType::class);
            /** @var array<DevicePlatformType>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'platforms'");
    }

    /**
     * Gets the state property value. The state property
     * @return AnswerState|null
    */
    public function getState(): ?AnswerState {
        $val = $this->getBackingStore()->get('state');
        if (is_null($val) || $val instanceof AnswerState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'state'");
    }

    /**
     * Gets the targetedVariations property value. Variations of a QnA for different countries/regions or devices. Use when you need to show different content to users based on their device, country/region, or both. The date and group settings apply to all variations.
     * @return array<AnswerVariant>|null
    */
    public function getTargetedVariations(): ?array {
        $val = $this->getBackingStore()->get('targetedVariations');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AnswerVariant::class);
            /** @var array<AnswerVariant>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'targetedVariations'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('availabilityEndDateTime', $this->getAvailabilityEndDateTime());
        $writer->writeDateTimeValue('availabilityStartDateTime', $this->getAvailabilityStartDateTime());
        $writer->writeCollectionOfPrimitiveValues('groupIds', $this->getGroupIds());
        $writer->writeBooleanValue('isSuggested', $this->getIsSuggested());
        $writer->writeObjectValue('keywords', $this->getKeywords());
        $writer->writeCollectionOfPrimitiveValues('languageTags', $this->getLanguageTags());
        $writer->writeCollectionOfEnumValues('platforms', $this->getPlatforms());
        $writer->writeEnumValue('state', $this->getState());
        $writer->writeCollectionOfObjectValues('targetedVariations', $this->getTargetedVariations());
    }

    /**
     * Sets the availabilityEndDateTime property value. Date and time when the QnA stops appearing as a search result. Set as null for always available. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the availabilityEndDateTime property.
    */
    public function setAvailabilityEndDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('availabilityEndDateTime', $value);
    }

    /**
     * Sets the availabilityStartDateTime property value. Date and time when the QnA starts to appear as a search result. Set as null for always available. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the availabilityStartDateTime property.
    */
    public function setAvailabilityStartDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('availabilityStartDateTime', $value);
    }

    /**
     * Sets the groupIds property value. The list of security groups that are able to view this QnA.
     * @param array<string>|null $value Value to set for the groupIds property.
    */
    public function setGroupIds(?array $value): void {
        $this->getBackingStore()->set('groupIds', $value);
    }

    /**
     * Sets the isSuggested property value. True if a user or Microsoft suggested this QnA to the admin. Read-only.
     * @param bool|null $value Value to set for the isSuggested property.
    */
    public function setIsSuggested(?bool $value): void {
        $this->getBackingStore()->set('isSuggested', $value);
    }

    /**
     * Sets the keywords property value. Keywords that trigger this QnA to appear in search results.
     * @param AnswerKeyword|null $value Value to set for the keywords property.
    */
    public function setKeywords(?AnswerKeyword $value): void {
        $this->getBackingStore()->set('keywords', $value);
    }

    /**
     * Sets the languageTags property value. A list of geographically specific language names in which this QnA can be viewed. Each language tag value follows the pattern {language}-{region}. For example, en-us is English as used in the United States. For the list of possible values, see Supported language tags.
     * @param array<string>|null $value Value to set for the languageTags property.
    */
    public function setLanguageTags(?array $value): void {
        $this->getBackingStore()->set('languageTags', $value);
    }

    /**
     * Sets the platforms property value. List of devices and operating systems that are able to view this QnA. The possible values are: android, androidForWork, ios, macOS, windowsPhone81, windowsPhone81AndLater, windows10AndLater, androidWorkProfile, unknown, androidASOP, androidMobileApplicationManagement, iOSMobileApplicationManagement, unknownFutureValue.
     * @param array<DevicePlatformType>|null $value Value to set for the platforms property.
    */
    public function setPlatforms(?array $value): void {
        $this->getBackingStore()->set('platforms', $value);
    }

    /**
     * Sets the state property value. The state property
     * @param AnswerState|null $value Value to set for the state property.
    */
    public function setState(?AnswerState $value): void {
        $this->getBackingStore()->set('state', $value);
    }

    /**
     * Sets the targetedVariations property value. Variations of a QnA for different countries/regions or devices. Use when you need to show different content to users based on their device, country/region, or both. The date and group settings apply to all variations.
     * @param array<AnswerVariant>|null $value Value to set for the targetedVariations property.
    */
    public function setTargetedVariations(?array $value): void {
        $this->getBackingStore()->set('targetedVariations', $value);
    }

}
