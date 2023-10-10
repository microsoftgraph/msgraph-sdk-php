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
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class AlertHistoryState implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new alertHistoryState and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AlertHistoryState
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AlertHistoryState {
        return new AlertHistoryState();
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
     * Gets the appId property value. The appId property
     * @return string|null
    */
    public function getAppId(): ?string {
        $val = $this->getBackingStore()->get('appId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appId'");
    }

    /**
     * Gets the assignedTo property value. The assignedTo property
     * @return string|null
    */
    public function getAssignedTo(): ?string {
        $val = $this->getBackingStore()->get('assignedTo');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'assignedTo'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the comments property value. The comments property
     * @return array<string>|null
    */
    public function getComments(): ?array {
        $val = $this->getBackingStore()->get('comments');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'comments'");
    }

    /**
     * Gets the feedback property value. The feedback property
     * @return AlertFeedback|null
    */
    public function getFeedback(): ?AlertFeedback {
        $val = $this->getBackingStore()->get('feedback');
        if (is_null($val) || $val instanceof AlertFeedback) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'feedback'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'appId' => fn(ParseNode $n) => $o->setAppId($n->getStringValue()),
            'assignedTo' => fn(ParseNode $n) => $o->setAssignedTo($n->getStringValue()),
            'comments' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setComments($val);
            },
            'feedback' => fn(ParseNode $n) => $o->setFeedback($n->getEnumValue(AlertFeedback::class)),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(AlertStatus::class)),
            'updatedDateTime' => fn(ParseNode $n) => $o->setUpdatedDateTime($n->getDateTimeValue()),
            'user' => fn(ParseNode $n) => $o->setUser($n->getStringValue()),
        ];
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
     * Gets the status property value. The status property
     * @return AlertStatus|null
    */
    public function getStatus(): ?AlertStatus {
        $val = $this->getBackingStore()->get('status');
        if (is_null($val) || $val instanceof AlertStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'status'");
    }

    /**
     * Gets the updatedDateTime property value. The updatedDateTime property
     * @return DateTime|null
    */
    public function getUpdatedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('updatedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'updatedDateTime'");
    }

    /**
     * Gets the user property value. The user property
     * @return string|null
    */
    public function getUser(): ?string {
        $val = $this->getBackingStore()->get('user');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'user'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('appId', $this->getAppId());
        $writer->writeStringValue('assignedTo', $this->getAssignedTo());
        $writer->writeCollectionOfPrimitiveValues('comments', $this->getComments());
        $writer->writeEnumValue('feedback', $this->getFeedback());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeEnumValue('status', $this->getStatus());
        $writer->writeDateTimeValue('updatedDateTime', $this->getUpdatedDateTime());
        $writer->writeStringValue('user', $this->getUser());
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
     * Sets the appId property value. The appId property
     * @param string|null $value Value to set for the appId property.
    */
    public function setAppId(?string $value): void {
        $this->getBackingStore()->set('appId', $value);
    }

    /**
     * Sets the assignedTo property value. The assignedTo property
     * @param string|null $value Value to set for the assignedTo property.
    */
    public function setAssignedTo(?string $value): void {
        $this->getBackingStore()->set('assignedTo', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the comments property value. The comments property
     * @param array<string>|null $value Value to set for the comments property.
    */
    public function setComments(?array $value): void {
        $this->getBackingStore()->set('comments', $value);
    }

    /**
     * Sets the feedback property value. The feedback property
     * @param AlertFeedback|null $value Value to set for the feedback property.
    */
    public function setFeedback(?AlertFeedback $value): void {
        $this->getBackingStore()->set('feedback', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the status property value. The status property
     * @param AlertStatus|null $value Value to set for the status property.
    */
    public function setStatus(?AlertStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

    /**
     * Sets the updatedDateTime property value. The updatedDateTime property
     * @param DateTime|null $value Value to set for the updatedDateTime property.
    */
    public function setUpdatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('updatedDateTime', $value);
    }

    /**
     * Sets the user property value. The user property
     * @param string|null $value Value to set for the user property.
    */
    public function setUser(?string $value): void {
        $this->getBackingStore()->set('user', $value);
    }

}
