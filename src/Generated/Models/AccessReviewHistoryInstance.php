<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AccessReviewHistoryInstance extends Entity implements Parsable 
{
    /**
     * Instantiates a new accessReviewHistoryInstance and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.accessReviewHistoryInstance');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AccessReviewHistoryInstance
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AccessReviewHistoryInstance {
        return new AccessReviewHistoryInstance();
    }

    /**
     * Gets the downloadUri property value. Uri which can be used to retrieve review history data. This URI will be active for 24 hours after being generated. Required.
     * @return string|null
    */
    public function getDownloadUri(): ?string {
        return $this->getBackingStore()->get('downloadUri');
    }

    /**
     * Gets the expirationDateTime property value. Timestamp when this instance and associated data expires and the history is deleted. Required.
     * @return DateTime|null
    */
    public function getExpirationDateTime(): ?DateTime {
        return $this->getBackingStore()->get('expirationDateTime');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'downloadUri' => fn(ParseNode $n) => $o->setDownloadUri($n->getStringValue()),
            'expirationDateTime' => fn(ParseNode $n) => $o->setExpirationDateTime($n->getDateTimeValue()),
            'fulfilledDateTime' => fn(ParseNode $n) => $o->setFulfilledDateTime($n->getDateTimeValue()),
            'reviewHistoryPeriodEndDateTime' => fn(ParseNode $n) => $o->setReviewHistoryPeriodEndDateTime($n->getDateTimeValue()),
            'reviewHistoryPeriodStartDateTime' => fn(ParseNode $n) => $o->setReviewHistoryPeriodStartDateTime($n->getDateTimeValue()),
            'runDateTime' => fn(ParseNode $n) => $o->setRunDateTime($n->getDateTimeValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(AccessReviewHistoryStatus::class)),
        ]);
    }

    /**
     * Gets the fulfilledDateTime property value. Timestamp when all of the available data for this instance was collected. This will be set after this instance's status is set to done. Required.
     * @return DateTime|null
    */
    public function getFulfilledDateTime(): ?DateTime {
        return $this->getBackingStore()->get('fulfilledDateTime');
    }

    /**
     * Gets the reviewHistoryPeriodEndDateTime property value. Timestamp, reviews ending on or before this date will be included in the fetched history data.
     * @return DateTime|null
    */
    public function getReviewHistoryPeriodEndDateTime(): ?DateTime {
        return $this->getBackingStore()->get('reviewHistoryPeriodEndDateTime');
    }

    /**
     * Gets the reviewHistoryPeriodStartDateTime property value. Timestamp, reviews starting on or after this date will be included in the fetched history data.
     * @return DateTime|null
    */
    public function getReviewHistoryPeriodStartDateTime(): ?DateTime {
        return $this->getBackingStore()->get('reviewHistoryPeriodStartDateTime');
    }

    /**
     * Gets the runDateTime property value. Timestamp when the instance's history data is scheduled to be generated.
     * @return DateTime|null
    */
    public function getRunDateTime(): ?DateTime {
        return $this->getBackingStore()->get('runDateTime');
    }

    /**
     * Gets the status property value. Represents the status of the review history data collection. The possible values are: done, inProgress, error, requested, unknownFutureValue. Once the status has been marked as done, a link can be generated to retrieve the instance's data by calling generateDownloadUri method.
     * @return AccessReviewHistoryStatus|null
    */
    public function getStatus(): ?AccessReviewHistoryStatus {
        return $this->getBackingStore()->get('status');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('downloadUri', $this->getDownloadUri());
        $writer->writeDateTimeValue('expirationDateTime', $this->getExpirationDateTime());
        $writer->writeDateTimeValue('fulfilledDateTime', $this->getFulfilledDateTime());
        $writer->writeDateTimeValue('reviewHistoryPeriodEndDateTime', $this->getReviewHistoryPeriodEndDateTime());
        $writer->writeDateTimeValue('reviewHistoryPeriodStartDateTime', $this->getReviewHistoryPeriodStartDateTime());
        $writer->writeDateTimeValue('runDateTime', $this->getRunDateTime());
        $writer->writeEnumValue('status', $this->getStatus());
    }

    /**
     * Sets the downloadUri property value. Uri which can be used to retrieve review history data. This URI will be active for 24 hours after being generated. Required.
     *  @param string|null $value Value to set for the downloadUri property.
    */
    public function setDownloadUri(?string $value): void {
        $this->getBackingStore()->set('downloadUri', $value);
    }

    /**
     * Sets the expirationDateTime property value. Timestamp when this instance and associated data expires and the history is deleted. Required.
     *  @param DateTime|null $value Value to set for the expirationDateTime property.
    */
    public function setExpirationDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('expirationDateTime', $value);
    }

    /**
     * Sets the fulfilledDateTime property value. Timestamp when all of the available data for this instance was collected. This will be set after this instance's status is set to done. Required.
     *  @param DateTime|null $value Value to set for the fulfilledDateTime property.
    */
    public function setFulfilledDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('fulfilledDateTime', $value);
    }

    /**
     * Sets the reviewHistoryPeriodEndDateTime property value. Timestamp, reviews ending on or before this date will be included in the fetched history data.
     *  @param DateTime|null $value Value to set for the reviewHistoryPeriodEndDateTime property.
    */
    public function setReviewHistoryPeriodEndDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('reviewHistoryPeriodEndDateTime', $value);
    }

    /**
     * Sets the reviewHistoryPeriodStartDateTime property value. Timestamp, reviews starting on or after this date will be included in the fetched history data.
     *  @param DateTime|null $value Value to set for the reviewHistoryPeriodStartDateTime property.
    */
    public function setReviewHistoryPeriodStartDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('reviewHistoryPeriodStartDateTime', $value);
    }

    /**
     * Sets the runDateTime property value. Timestamp when the instance's history data is scheduled to be generated.
     *  @param DateTime|null $value Value to set for the runDateTime property.
    */
    public function setRunDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('runDateTime', $value);
    }

    /**
     * Sets the status property value. Represents the status of the review history data collection. The possible values are: done, inProgress, error, requested, unknownFutureValue. Once the status has been marked as done, a link can be generated to retrieve the instance's data by calling generateDownloadUri method.
     *  @param AccessReviewHistoryStatus|null $value Value to set for the status property.
    */
    public function setStatus(?AccessReviewHistoryStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

}
