<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class CustomTrainingSetting extends TrainingSetting implements Parsable 
{
    /**
     * Instantiates a new CustomTrainingSetting and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.customTrainingSetting');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CustomTrainingSetting
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CustomTrainingSetting {
        return new CustomTrainingSetting();
    }

    /**
     * Gets the assignedTo property value. A user collection that specifies to whom the training should be assigned. Possible values are: none, allUsers, clickedPayload, compromised, reportedPhish, readButNotClicked, didNothing, unknownFutureValue.
     * @return array<TrainingAssignedTo>|null
    */
    public function getAssignedTo(): ?array {
        $val = $this->getBackingStore()->get('assignedTo');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, TrainingAssignedTo::class);
            /** @var array<TrainingAssignedTo>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'assignedTo'");
    }

    /**
     * Gets the description property value. The description of the custom training setting.
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
     * Gets the displayName property value. The display name of the custom training setting.
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
            'assignedTo' => fn(ParseNode $n) => $o->setAssignedTo($n->getCollectionOfEnumValues(TrainingAssignedTo::class)),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'durationInMinutes' => fn(ParseNode $n) => $o->setDurationInMinutes($n->getIntegerValue()),
            'url' => fn(ParseNode $n) => $o->setUrl($n->getStringValue()),
        ]);
    }

    /**
     * Gets the url property value. The training URL.
     * @return string|null
    */
    public function getUrl(): ?string {
        $val = $this->getBackingStore()->get('url');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'url'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfEnumValues('assignedTo', $this->getAssignedTo());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeIntegerValue('durationInMinutes', $this->getDurationInMinutes());
        $writer->writeStringValue('url', $this->getUrl());
    }

    /**
     * Sets the assignedTo property value. A user collection that specifies to whom the training should be assigned. Possible values are: none, allUsers, clickedPayload, compromised, reportedPhish, readButNotClicked, didNothing, unknownFutureValue.
     * @param array<TrainingAssignedTo>|null $value Value to set for the assignedTo property.
    */
    public function setAssignedTo(?array $value): void {
        $this->getBackingStore()->set('assignedTo', $value);
    }

    /**
     * Sets the description property value. The description of the custom training setting.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the displayName property value. The display name of the custom training setting.
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
     * Sets the url property value. The training URL.
     * @param string|null $value Value to set for the url property.
    */
    public function setUrl(?string $value): void {
        $this->getBackingStore()->set('url', $value);
    }

}
