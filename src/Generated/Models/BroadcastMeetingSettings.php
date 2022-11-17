<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class BroadcastMeetingSettings implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new broadcastMeetingSettings and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.broadcastMeetingSettings');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BroadcastMeetingSettings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): BroadcastMeetingSettings {
        return new BroadcastMeetingSettings();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the allowedAudience property value. Defines who can join the Teams live event. Possible values are listed in the following table.
     * @return BroadcastMeetingAudience|null
    */
    public function getAllowedAudience(): ?BroadcastMeetingAudience {
        return $this->getBackingStore()->get('allowedAudience');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the captions property value. Caption settings of a Teams live event.
     * @return BroadcastMeetingCaptionSettings|null
    */
    public function getCaptions(): ?BroadcastMeetingCaptionSettings {
        return $this->getBackingStore()->get('captions');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'allowedAudience' => fn(ParseNode $n) => $o->setAllowedAudience($n->getEnumValue(BroadcastMeetingAudience::class)),
            'captions' => fn(ParseNode $n) => $o->setCaptions($n->getObjectValue([BroadcastMeetingCaptionSettings::class, 'createFromDiscriminatorValue'])),
            'isAttendeeReportEnabled' => fn(ParseNode $n) => $o->setIsAttendeeReportEnabled($n->getBooleanValue()),
            'isQuestionAndAnswerEnabled' => fn(ParseNode $n) => $o->setIsQuestionAndAnswerEnabled($n->getBooleanValue()),
            'isRecordingEnabled' => fn(ParseNode $n) => $o->setIsRecordingEnabled($n->getBooleanValue()),
            'isVideoOnDemandEnabled' => fn(ParseNode $n) => $o->setIsVideoOnDemandEnabled($n->getBooleanValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the isAttendeeReportEnabled property value. Indicates whether attendee report is enabled for this Teams live event. Default value is false.
     * @return bool|null
    */
    public function getIsAttendeeReportEnabled(): ?bool {
        return $this->getBackingStore()->get('isAttendeeReportEnabled');
    }

    /**
     * Gets the isQuestionAndAnswerEnabled property value. Indicates whether Q&A is enabled for this Teams live event. Default value is false.
     * @return bool|null
    */
    public function getIsQuestionAndAnswerEnabled(): ?bool {
        return $this->getBackingStore()->get('isQuestionAndAnswerEnabled');
    }

    /**
     * Gets the isRecordingEnabled property value. Indicates whether recording is enabled for this Teams live event. Default value is false.
     * @return bool|null
    */
    public function getIsRecordingEnabled(): ?bool {
        return $this->getBackingStore()->get('isRecordingEnabled');
    }

    /**
     * Gets the isVideoOnDemandEnabled property value. Indicates whether video on demand is enabled for this Teams live event. Default value is false.
     * @return bool|null
    */
    public function getIsVideoOnDemandEnabled(): ?bool {
        return $this->getBackingStore()->get('isVideoOnDemandEnabled');
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('allowedAudience', $this->getAllowedAudience());
        $writer->writeObjectValue('captions', $this->getCaptions());
        $writer->writeBooleanValue('isAttendeeReportEnabled', $this->getIsAttendeeReportEnabled());
        $writer->writeBooleanValue('isQuestionAndAnswerEnabled', $this->getIsQuestionAndAnswerEnabled());
        $writer->writeBooleanValue('isRecordingEnabled', $this->getIsRecordingEnabled());
        $writer->writeBooleanValue('isVideoOnDemandEnabled', $this->getIsVideoOnDemandEnabled());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the allowedAudience property value. Defines who can join the Teams live event. Possible values are listed in the following table.
     *  @param BroadcastMeetingAudience|null $value Value to set for the allowedAudience property.
    */
    public function setAllowedAudience(?BroadcastMeetingAudience $value): void {
        $this->getBackingStore()->set('allowedAudience', $value);
    }

    /**
     * Sets the captions property value. Caption settings of a Teams live event.
     *  @param BroadcastMeetingCaptionSettings|null $value Value to set for the captions property.
    */
    public function setCaptions(?BroadcastMeetingCaptionSettings $value): void {
        $this->getBackingStore()->set('captions', $value);
    }

    /**
     * Sets the isAttendeeReportEnabled property value. Indicates whether attendee report is enabled for this Teams live event. Default value is false.
     *  @param bool|null $value Value to set for the isAttendeeReportEnabled property.
    */
    public function setIsAttendeeReportEnabled(?bool $value): void {
        $this->getBackingStore()->set('isAttendeeReportEnabled', $value);
    }

    /**
     * Sets the isQuestionAndAnswerEnabled property value. Indicates whether Q&A is enabled for this Teams live event. Default value is false.
     *  @param bool|null $value Value to set for the isQuestionAndAnswerEnabled property.
    */
    public function setIsQuestionAndAnswerEnabled(?bool $value): void {
        $this->getBackingStore()->set('isQuestionAndAnswerEnabled', $value);
    }

    /**
     * Sets the isRecordingEnabled property value. Indicates whether recording is enabled for this Teams live event. Default value is false.
     *  @param bool|null $value Value to set for the isRecordingEnabled property.
    */
    public function setIsRecordingEnabled(?bool $value): void {
        $this->getBackingStore()->set('isRecordingEnabled', $value);
    }

    /**
     * Sets the isVideoOnDemandEnabled property value. Indicates whether video on demand is enabled for this Teams live event. Default value is false.
     *  @param bool|null $value Value to set for the isVideoOnDemandEnabled property.
    */
    public function setIsVideoOnDemandEnabled(?bool $value): void {
        $this->getBackingStore()->set('isVideoOnDemandEnabled', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
