<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class Training extends Entity implements Parsable 
{
    /**
     * Instantiates a new Training and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Training
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Training {
        return new Training();
    }

    /**
     * Gets the availabilityStatus property value. Training availability status. Possible values are: unknown, notAvailable, available, archive, delete, unknownFutureValue.
     * @return TrainingAvailabilityStatus|null
    */
    public function getAvailabilityStatus(): ?TrainingAvailabilityStatus {
        $val = $this->getBackingStore()->get('availabilityStatus');
        if (is_null($val) || $val instanceof TrainingAvailabilityStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'availabilityStatus'");
    }

    /**
     * Gets the createdBy property value. Identity of the user who created the training.
     * @return EmailIdentity|null
    */
    public function getCreatedBy(): ?EmailIdentity {
        $val = $this->getBackingStore()->get('createdBy');
        if (is_null($val) || $val instanceof EmailIdentity) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdBy'");
    }

    /**
     * Gets the createdDateTime property value. Date and time when the training was created. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
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
     * Gets the description property value. The description for the training.
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
     * Gets the displayName property value. The display name for the training.
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
     * Gets the durationInMinutes property value. Training duration.
     * @return int|null
    */
    public function getDurationInMinutes(): ?int {
        $val = $this->getBackingStore()->get('durationInMinutes');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'durationInMinutes'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'availabilityStatus' => fn(ParseNode $n) => $o->setAvailabilityStatus($n->getEnumValue(TrainingAvailabilityStatus::class)),
            'createdBy' => fn(ParseNode $n) => $o->setCreatedBy($n->getObjectValue([EmailIdentity::class, 'createFromDiscriminatorValue'])),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'durationInMinutes' => fn(ParseNode $n) => $o->setDurationInMinutes($n->getIntegerValue()),
            'hasEvaluation' => fn(ParseNode $n) => $o->setHasEvaluation($n->getBooleanValue()),
            'languageDetails' => fn(ParseNode $n) => $o->setLanguageDetails($n->getCollectionOfObjectValues([TrainingLanguageDetail::class, 'createFromDiscriminatorValue'])),
            'lastModifiedBy' => fn(ParseNode $n) => $o->setLastModifiedBy($n->getObjectValue([EmailIdentity::class, 'createFromDiscriminatorValue'])),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'source' => fn(ParseNode $n) => $o->setSource($n->getEnumValue(SimulationContentSource::class)),
            'supportedLocales' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setSupportedLocales($val);
            },
            'tags' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setTags($val);
            },
            'type' => fn(ParseNode $n) => $o->setType($n->getEnumValue(TrainingType::class)),
        ]);
    }

    /**
     * Gets the hasEvaluation property value. Indicates whether the training has any evaluation.
     * @return bool|null
    */
    public function getHasEvaluation(): ?bool {
        $val = $this->getBackingStore()->get('hasEvaluation');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'hasEvaluation'");
    }

    /**
     * Gets the languageDetails property value. Language specific details on a training.
     * @return array<TrainingLanguageDetail>|null
    */
    public function getLanguageDetails(): ?array {
        $val = $this->getBackingStore()->get('languageDetails');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, TrainingLanguageDetail::class);
            /** @var array<TrainingLanguageDetail>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'languageDetails'");
    }

    /**
     * Gets the lastModifiedBy property value. Identity of the user who last modified the training.
     * @return EmailIdentity|null
    */
    public function getLastModifiedBy(): ?EmailIdentity {
        $val = $this->getBackingStore()->get('lastModifiedBy');
        if (is_null($val) || $val instanceof EmailIdentity) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastModifiedBy'");
    }

    /**
     * Gets the lastModifiedDateTime property value. Date and time when the training was last modified. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
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
     * Gets the source property value. Training content source. Possible values are: unknown, global, tenant, unknownFutureValue.
     * @return SimulationContentSource|null
    */
    public function getSource(): ?SimulationContentSource {
        $val = $this->getBackingStore()->get('source');
        if (is_null($val) || $val instanceof SimulationContentSource) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'source'");
    }

    /**
     * Gets the supportedLocales property value. Supported locales for content for the associated training.
     * @return array<string>|null
    */
    public function getSupportedLocales(): ?array {
        $val = $this->getBackingStore()->get('supportedLocales');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'supportedLocales'");
    }

    /**
     * Gets the tags property value. Training tags.
     * @return array<string>|null
    */
    public function getTags(): ?array {
        $val = $this->getBackingStore()->get('tags');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'tags'");
    }

    /**
     * Gets the type property value. The type of training. Possible values are: unknown, phishing, unknownFutureValue.
     * @return TrainingType|null
    */
    public function getType(): ?TrainingType {
        $val = $this->getBackingStore()->get('type');
        if (is_null($val) || $val instanceof TrainingType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'type'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('availabilityStatus', $this->getAvailabilityStatus());
        $writer->writeObjectValue('createdBy', $this->getCreatedBy());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeIntegerValue('durationInMinutes', $this->getDurationInMinutes());
        $writer->writeBooleanValue('hasEvaluation', $this->getHasEvaluation());
        $writer->writeCollectionOfObjectValues('languageDetails', $this->getLanguageDetails());
        $writer->writeObjectValue('lastModifiedBy', $this->getLastModifiedBy());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeEnumValue('source', $this->getSource());
        $writer->writeCollectionOfPrimitiveValues('supportedLocales', $this->getSupportedLocales());
        $writer->writeCollectionOfPrimitiveValues('tags', $this->getTags());
        $writer->writeEnumValue('type', $this->getType());
    }

    /**
     * Sets the availabilityStatus property value. Training availability status. Possible values are: unknown, notAvailable, available, archive, delete, unknownFutureValue.
     * @param TrainingAvailabilityStatus|null $value Value to set for the availabilityStatus property.
    */
    public function setAvailabilityStatus(?TrainingAvailabilityStatus $value): void {
        $this->getBackingStore()->set('availabilityStatus', $value);
    }

    /**
     * Sets the createdBy property value. Identity of the user who created the training.
     * @param EmailIdentity|null $value Value to set for the createdBy property.
    */
    public function setCreatedBy(?EmailIdentity $value): void {
        $this->getBackingStore()->set('createdBy', $value);
    }

    /**
     * Sets the createdDateTime property value. Date and time when the training was created. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the description property value. The description for the training.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the displayName property value. The display name for the training.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the durationInMinutes property value. Training duration.
     * @param int|null $value Value to set for the durationInMinutes property.
    */
    public function setDurationInMinutes(?int $value): void {
        $this->getBackingStore()->set('durationInMinutes', $value);
    }

    /**
     * Sets the hasEvaluation property value. Indicates whether the training has any evaluation.
     * @param bool|null $value Value to set for the hasEvaluation property.
    */
    public function setHasEvaluation(?bool $value): void {
        $this->getBackingStore()->set('hasEvaluation', $value);
    }

    /**
     * Sets the languageDetails property value. Language specific details on a training.
     * @param array<TrainingLanguageDetail>|null $value Value to set for the languageDetails property.
    */
    public function setLanguageDetails(?array $value): void {
        $this->getBackingStore()->set('languageDetails', $value);
    }

    /**
     * Sets the lastModifiedBy property value. Identity of the user who last modified the training.
     * @param EmailIdentity|null $value Value to set for the lastModifiedBy property.
    */
    public function setLastModifiedBy(?EmailIdentity $value): void {
        $this->getBackingStore()->set('lastModifiedBy', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. Date and time when the training was last modified. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the source property value. Training content source. Possible values are: unknown, global, tenant, unknownFutureValue.
     * @param SimulationContentSource|null $value Value to set for the source property.
    */
    public function setSource(?SimulationContentSource $value): void {
        $this->getBackingStore()->set('source', $value);
    }

    /**
     * Sets the supportedLocales property value. Supported locales for content for the associated training.
     * @param array<string>|null $value Value to set for the supportedLocales property.
    */
    public function setSupportedLocales(?array $value): void {
        $this->getBackingStore()->set('supportedLocales', $value);
    }

    /**
     * Sets the tags property value. Training tags.
     * @param array<string>|null $value Value to set for the tags property.
    */
    public function setTags(?array $value): void {
        $this->getBackingStore()->set('tags', $value);
    }

    /**
     * Sets the type property value. The type of training. Possible values are: unknown, phishing, unknownFutureValue.
     * @param TrainingType|null $value Value to set for the type property.
    */
    public function setType(?TrainingType $value): void {
        $this->getBackingStore()->set('type', $value);
    }

}
