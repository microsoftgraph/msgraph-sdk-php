<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AccessReviewHistoryInstance extends Entity implements Parsable 
{
    /**
     * @var string|null $downloadUri Uri which can be used to retrieve review history data. This URI will be active for 24 hours after being generated. Required.
    */
    private ?string $downloadUri = null;
    
    /**
     * @var DateTime|null $expirationDateTime Timestamp when this instance and associated data expires and the history is deleted. Required.
    */
    private ?DateTime $expirationDateTime = null;
    
    /**
     * @var DateTime|null $fulfilledDateTime Timestamp when all of the available data for this instance was collected. This will be set after this instance's status is set to done. Required.
    */
    private ?DateTime $fulfilledDateTime = null;
    
    /**
     * @var DateTime|null $reviewHistoryPeriodEndDateTime Timestamp, reviews ending on or before this date will be included in the fetched history data.
    */
    private ?DateTime $reviewHistoryPeriodEndDateTime = null;
    
    /**
     * @var DateTime|null $reviewHistoryPeriodStartDateTime Timestamp, reviews starting on or after this date will be included in the fetched history data.
    */
    private ?DateTime $reviewHistoryPeriodStartDateTime = null;
    
    /**
     * @var DateTime|null $runDateTime Timestamp when the instance's history data is scheduled to be generated.
    */
    private ?DateTime $runDateTime = null;
    
    /**
     * @var AccessReviewHistoryStatus|null $status Represents the status of the review history data collection. The possible values are: done, inProgress, error, requested, unknownFutureValue. Once the status has been marked as done, a link can be generated to retrieve the instance's data by calling generateDownloadUri method.
    */
    private ?AccessReviewHistoryStatus $status = null;
    
    /**
     * Instantiates a new accessReviewHistoryInstance and sets the default values.
    */
    public function __construct() {
        parent::__construct();
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
        return $this->downloadUri;
    }

    /**
     * Gets the expirationDateTime property value. Timestamp when this instance and associated data expires and the history is deleted. Required.
     * @return DateTime|null
    */
    public function getExpirationDateTime(): ?DateTime {
        return $this->expirationDateTime;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'downloadUri' => function (ParseNode $n) use ($o) { $o->setDownloadUri($n->getStringValue()); },
            'expirationDateTime' => function (ParseNode $n) use ($o) { $o->setExpirationDateTime($n->getDateTimeValue()); },
            'fulfilledDateTime' => function (ParseNode $n) use ($o) { $o->setFulfilledDateTime($n->getDateTimeValue()); },
            'reviewHistoryPeriodEndDateTime' => function (ParseNode $n) use ($o) { $o->setReviewHistoryPeriodEndDateTime($n->getDateTimeValue()); },
            'reviewHistoryPeriodStartDateTime' => function (ParseNode $n) use ($o) { $o->setReviewHistoryPeriodStartDateTime($n->getDateTimeValue()); },
            'runDateTime' => function (ParseNode $n) use ($o) { $o->setRunDateTime($n->getDateTimeValue()); },
            'status' => function (ParseNode $n) use ($o) { $o->setStatus($n->getEnumValue(AccessReviewHistoryStatus::class)); },
        ]);
    }

    /**
     * Gets the fulfilledDateTime property value. Timestamp when all of the available data for this instance was collected. This will be set after this instance's status is set to done. Required.
     * @return DateTime|null
    */
    public function getFulfilledDateTime(): ?DateTime {
        return $this->fulfilledDateTime;
    }

    /**
     * Gets the reviewHistoryPeriodEndDateTime property value. Timestamp, reviews ending on or before this date will be included in the fetched history data.
     * @return DateTime|null
    */
    public function getReviewHistoryPeriodEndDateTime(): ?DateTime {
        return $this->reviewHistoryPeriodEndDateTime;
    }

    /**
     * Gets the reviewHistoryPeriodStartDateTime property value. Timestamp, reviews starting on or after this date will be included in the fetched history data.
     * @return DateTime|null
    */
    public function getReviewHistoryPeriodStartDateTime(): ?DateTime {
        return $this->reviewHistoryPeriodStartDateTime;
    }

    /**
     * Gets the runDateTime property value. Timestamp when the instance's history data is scheduled to be generated.
     * @return DateTime|null
    */
    public function getRunDateTime(): ?DateTime {
        return $this->runDateTime;
    }

    /**
     * Gets the status property value. Represents the status of the review history data collection. The possible values are: done, inProgress, error, requested, unknownFutureValue. Once the status has been marked as done, a link can be generated to retrieve the instance's data by calling generateDownloadUri method.
     * @return AccessReviewHistoryStatus|null
    */
    public function getStatus(): ?AccessReviewHistoryStatus {
        return $this->status;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('downloadUri', $this->downloadUri);
        $writer->writeDateTimeValue('expirationDateTime', $this->expirationDateTime);
        $writer->writeDateTimeValue('fulfilledDateTime', $this->fulfilledDateTime);
        $writer->writeDateTimeValue('reviewHistoryPeriodEndDateTime', $this->reviewHistoryPeriodEndDateTime);
        $writer->writeDateTimeValue('reviewHistoryPeriodStartDateTime', $this->reviewHistoryPeriodStartDateTime);
        $writer->writeDateTimeValue('runDateTime', $this->runDateTime);
        $writer->writeEnumValue('status', $this->status);
    }

    /**
     * Sets the downloadUri property value. Uri which can be used to retrieve review history data. This URI will be active for 24 hours after being generated. Required.
     *  @param string|null $value Value to set for the downloadUri property.
    */
    public function setDownloadUri(?string $value ): void {
        $this->downloadUri = $value;
    }

    /**
     * Sets the expirationDateTime property value. Timestamp when this instance and associated data expires and the history is deleted. Required.
     *  @param DateTime|null $value Value to set for the expirationDateTime property.
    */
    public function setExpirationDateTime(?DateTime $value ): void {
        $this->expirationDateTime = $value;
    }

    /**
     * Sets the fulfilledDateTime property value. Timestamp when all of the available data for this instance was collected. This will be set after this instance's status is set to done. Required.
     *  @param DateTime|null $value Value to set for the fulfilledDateTime property.
    */
    public function setFulfilledDateTime(?DateTime $value ): void {
        $this->fulfilledDateTime = $value;
    }

    /**
     * Sets the reviewHistoryPeriodEndDateTime property value. Timestamp, reviews ending on or before this date will be included in the fetched history data.
     *  @param DateTime|null $value Value to set for the reviewHistoryPeriodEndDateTime property.
    */
    public function setReviewHistoryPeriodEndDateTime(?DateTime $value ): void {
        $this->reviewHistoryPeriodEndDateTime = $value;
    }

    /**
     * Sets the reviewHistoryPeriodStartDateTime property value. Timestamp, reviews starting on or after this date will be included in the fetched history data.
     *  @param DateTime|null $value Value to set for the reviewHistoryPeriodStartDateTime property.
    */
    public function setReviewHistoryPeriodStartDateTime(?DateTime $value ): void {
        $this->reviewHistoryPeriodStartDateTime = $value;
    }

    /**
     * Sets the runDateTime property value. Timestamp when the instance's history data is scheduled to be generated.
     *  @param DateTime|null $value Value to set for the runDateTime property.
    */
    public function setRunDateTime(?DateTime $value ): void {
        $this->runDateTime = $value;
    }

    /**
     * Sets the status property value. Represents the status of the review history data collection. The possible values are: done, inProgress, error, requested, unknownFutureValue. Once the status has been marked as done, a link can be generated to retrieve the instance's data by calling generateDownloadUri method.
     *  @param AccessReviewHistoryStatus|null $value Value to set for the status property.
    */
    public function setStatus(?AccessReviewHistoryStatus $value ): void {
        $this->status = $value;
    }

}
