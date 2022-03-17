<?php

namespace Microsoft\Graph\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class BroadcastMeetingSettings implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var BroadcastMeetingAudience|null $allowedAudience Defines who can join the Teams live event. Possible values are listed in the following table. */
    private ?BroadcastMeetingAudience $allowedAudience = null;
    
    /** @var bool|null $isAttendeeReportEnabled Indicates whether attendee report is enabled for this Teams live event. Default value is false. */
    private ?bool $isAttendeeReportEnabled = null;
    
    /** @var bool|null $isQuestionAndAnswerEnabled Indicates whether Q&A is enabled for this Teams live event. Default value is false. */
    private ?bool $isQuestionAndAnswerEnabled = null;
    
    /** @var bool|null $isRecordingEnabled Indicates whether recording is enabled for this Teams live event. Default value is false. */
    private ?bool $isRecordingEnabled = null;
    
    /** @var bool|null $isVideoOnDemandEnabled Indicates whether video on demand is enabled for this Teams live event. Default value is false. */
    private ?bool $isVideoOnDemandEnabled = null;
    
    /**
     * Instantiates a new broadcastMeetingSettings and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BroadcastMeetingSettings
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): BroadcastMeetingSettings {
        return new BroadcastMeetingSettings();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the allowedAudience property value. Defines who can join the Teams live event. Possible values are listed in the following table.
     * @return BroadcastMeetingAudience|null
    */
    public function getAllowedAudience(): ?BroadcastMeetingAudience {
        return $this->allowedAudience;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'allowedAudience' => function (self $o, ParseNode $n) { $o->setAllowedAudience($n->getEnumValue(BroadcastMeetingAudience::class)); },
            'isAttendeeReportEnabled' => function (self $o, ParseNode $n) { $o->setIsAttendeeReportEnabled($n->getBooleanValue()); },
            'isQuestionAndAnswerEnabled' => function (self $o, ParseNode $n) { $o->setIsQuestionAndAnswerEnabled($n->getBooleanValue()); },
            'isRecordingEnabled' => function (self $o, ParseNode $n) { $o->setIsRecordingEnabled($n->getBooleanValue()); },
            'isVideoOnDemandEnabled' => function (self $o, ParseNode $n) { $o->setIsVideoOnDemandEnabled($n->getBooleanValue()); },
        ];
    }

    /**
     * Gets the isAttendeeReportEnabled property value. Indicates whether attendee report is enabled for this Teams live event. Default value is false.
     * @return bool|null
    */
    public function getIsAttendeeReportEnabled(): ?bool {
        return $this->isAttendeeReportEnabled;
    }

    /**
     * Gets the isQuestionAndAnswerEnabled property value. Indicates whether Q&A is enabled for this Teams live event. Default value is false.
     * @return bool|null
    */
    public function getIsQuestionAndAnswerEnabled(): ?bool {
        return $this->isQuestionAndAnswerEnabled;
    }

    /**
     * Gets the isRecordingEnabled property value. Indicates whether recording is enabled for this Teams live event. Default value is false.
     * @return bool|null
    */
    public function getIsRecordingEnabled(): ?bool {
        return $this->isRecordingEnabled;
    }

    /**
     * Gets the isVideoOnDemandEnabled property value. Indicates whether video on demand is enabled for this Teams live event. Default value is false.
     * @return bool|null
    */
    public function getIsVideoOnDemandEnabled(): ?bool {
        return $this->isVideoOnDemandEnabled;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('allowedAudience', $this->allowedAudience);
        $writer->writeBooleanValue('isAttendeeReportEnabled', $this->isAttendeeReportEnabled);
        $writer->writeBooleanValue('isQuestionAndAnswerEnabled', $this->isQuestionAndAnswerEnabled);
        $writer->writeBooleanValue('isRecordingEnabled', $this->isRecordingEnabled);
        $writer->writeBooleanValue('isVideoOnDemandEnabled', $this->isVideoOnDemandEnabled);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the allowedAudience property value. Defines who can join the Teams live event. Possible values are listed in the following table.
     *  @param BroadcastMeetingAudience|null $value Value to set for the allowedAudience property.
    */
    public function setAllowedAudience(?BroadcastMeetingAudience $value ): void {
        $this->allowedAudience = $value;
    }

    /**
     * Sets the isAttendeeReportEnabled property value. Indicates whether attendee report is enabled for this Teams live event. Default value is false.
     *  @param bool|null $value Value to set for the isAttendeeReportEnabled property.
    */
    public function setIsAttendeeReportEnabled(?bool $value ): void {
        $this->isAttendeeReportEnabled = $value;
    }

    /**
     * Sets the isQuestionAndAnswerEnabled property value. Indicates whether Q&A is enabled for this Teams live event. Default value is false.
     *  @param bool|null $value Value to set for the isQuestionAndAnswerEnabled property.
    */
    public function setIsQuestionAndAnswerEnabled(?bool $value ): void {
        $this->isQuestionAndAnswerEnabled = $value;
    }

    /**
     * Sets the isRecordingEnabled property value. Indicates whether recording is enabled for this Teams live event. Default value is false.
     *  @param bool|null $value Value to set for the isRecordingEnabled property.
    */
    public function setIsRecordingEnabled(?bool $value ): void {
        $this->isRecordingEnabled = $value;
    }

    /**
     * Sets the isVideoOnDemandEnabled property value. Indicates whether video on demand is enabled for this Teams live event. Default value is false.
     *  @param bool|null $value Value to set for the isVideoOnDemandEnabled property.
    */
    public function setIsVideoOnDemandEnabled(?bool $value ): void {
        $this->isVideoOnDemandEnabled = $value;
    }

}
