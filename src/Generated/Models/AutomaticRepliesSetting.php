<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AutomaticRepliesSetting implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var ExternalAudienceScope|null $externalAudience The set of audience external to the signed-in user's organization who will receive the ExternalReplyMessage, if Status is AlwaysEnabled or Scheduled. The possible values are: none, contactsOnly, all.
    */
    private ?ExternalAudienceScope $externalAudience = null;
    
    /**
     * @var string|null $externalReplyMessage The automatic reply to send to the specified external audience, if Status is AlwaysEnabled or Scheduled.
    */
    private ?string $externalReplyMessage = null;
    
    /**
     * @var string|null $internalReplyMessage The automatic reply to send to the audience internal to the signed-in user's organization, if Status is AlwaysEnabled or Scheduled.
    */
    private ?string $internalReplyMessage = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var DateTimeTimeZone|null $scheduledEndDateTime The date and time that automatic replies are set to end, if Status is set to Scheduled.
    */
    private ?DateTimeTimeZone $scheduledEndDateTime = null;
    
    /**
     * @var DateTimeTimeZone|null $scheduledStartDateTime The date and time that automatic replies are set to begin, if Status is set to Scheduled.
    */
    private ?DateTimeTimeZone $scheduledStartDateTime = null;
    
    /**
     * @var AutomaticRepliesStatus|null $status Configurations status for automatic replies. The possible values are: disabled, alwaysEnabled, scheduled.
    */
    private ?AutomaticRepliesStatus $status = null;
    
    /**
     * Instantiates a new automaticRepliesSetting and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.automaticRepliesSetting');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AutomaticRepliesSetting
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AutomaticRepliesSetting {
        return new AutomaticRepliesSetting();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the externalAudience property value. The set of audience external to the signed-in user's organization who will receive the ExternalReplyMessage, if Status is AlwaysEnabled or Scheduled. The possible values are: none, contactsOnly, all.
     * @return ExternalAudienceScope|null
    */
    public function getExternalAudience(): ?ExternalAudienceScope {
        return $this->externalAudience;
    }

    /**
     * Gets the externalReplyMessage property value. The automatic reply to send to the specified external audience, if Status is AlwaysEnabled or Scheduled.
     * @return string|null
    */
    public function getExternalReplyMessage(): ?string {
        return $this->externalReplyMessage;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'externalAudience' => function (ParseNode $n) use ($o) { $o->setExternalAudience($n->getEnumValue(ExternalAudienceScope::class)); },
            'externalReplyMessage' => function (ParseNode $n) use ($o) { $o->setExternalReplyMessage($n->getStringValue()); },
            'internalReplyMessage' => function (ParseNode $n) use ($o) { $o->setInternalReplyMessage($n->getStringValue()); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'scheduledEndDateTime' => function (ParseNode $n) use ($o) { $o->setScheduledEndDateTime($n->getObjectValue(array(DateTimeTimeZone::class, 'createFromDiscriminatorValue'))); },
            'scheduledStartDateTime' => function (ParseNode $n) use ($o) { $o->setScheduledStartDateTime($n->getObjectValue(array(DateTimeTimeZone::class, 'createFromDiscriminatorValue'))); },
            'status' => function (ParseNode $n) use ($o) { $o->setStatus($n->getEnumValue(AutomaticRepliesStatus::class)); },
        ];
    }

    /**
     * Gets the internalReplyMessage property value. The automatic reply to send to the audience internal to the signed-in user's organization, if Status is AlwaysEnabled or Scheduled.
     * @return string|null
    */
    public function getInternalReplyMessage(): ?string {
        return $this->internalReplyMessage;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the scheduledEndDateTime property value. The date and time that automatic replies are set to end, if Status is set to Scheduled.
     * @return DateTimeTimeZone|null
    */
    public function getScheduledEndDateTime(): ?DateTimeTimeZone {
        return $this->scheduledEndDateTime;
    }

    /**
     * Gets the scheduledStartDateTime property value. The date and time that automatic replies are set to begin, if Status is set to Scheduled.
     * @return DateTimeTimeZone|null
    */
    public function getScheduledStartDateTime(): ?DateTimeTimeZone {
        return $this->scheduledStartDateTime;
    }

    /**
     * Gets the status property value. Configurations status for automatic replies. The possible values are: disabled, alwaysEnabled, scheduled.
     * @return AutomaticRepliesStatus|null
    */
    public function getStatus(): ?AutomaticRepliesStatus {
        return $this->status;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('externalAudience', $this->externalAudience);
        $writer->writeStringValue('externalReplyMessage', $this->externalReplyMessage);
        $writer->writeStringValue('internalReplyMessage', $this->internalReplyMessage);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeObjectValue('scheduledEndDateTime', $this->scheduledEndDateTime);
        $writer->writeObjectValue('scheduledStartDateTime', $this->scheduledStartDateTime);
        $writer->writeEnumValue('status', $this->status);
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
     * Sets the externalAudience property value. The set of audience external to the signed-in user's organization who will receive the ExternalReplyMessage, if Status is AlwaysEnabled or Scheduled. The possible values are: none, contactsOnly, all.
     *  @param ExternalAudienceScope|null $value Value to set for the externalAudience property.
    */
    public function setExternalAudience(?ExternalAudienceScope $value ): void {
        $this->externalAudience = $value;
    }

    /**
     * Sets the externalReplyMessage property value. The automatic reply to send to the specified external audience, if Status is AlwaysEnabled or Scheduled.
     *  @param string|null $value Value to set for the externalReplyMessage property.
    */
    public function setExternalReplyMessage(?string $value ): void {
        $this->externalReplyMessage = $value;
    }

    /**
     * Sets the internalReplyMessage property value. The automatic reply to send to the audience internal to the signed-in user's organization, if Status is AlwaysEnabled or Scheduled.
     *  @param string|null $value Value to set for the internalReplyMessage property.
    */
    public function setInternalReplyMessage(?string $value ): void {
        $this->internalReplyMessage = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the scheduledEndDateTime property value. The date and time that automatic replies are set to end, if Status is set to Scheduled.
     *  @param DateTimeTimeZone|null $value Value to set for the scheduledEndDateTime property.
    */
    public function setScheduledEndDateTime(?DateTimeTimeZone $value ): void {
        $this->scheduledEndDateTime = $value;
    }

    /**
     * Sets the scheduledStartDateTime property value. The date and time that automatic replies are set to begin, if Status is set to Scheduled.
     *  @param DateTimeTimeZone|null $value Value to set for the scheduledStartDateTime property.
    */
    public function setScheduledStartDateTime(?DateTimeTimeZone $value ): void {
        $this->scheduledStartDateTime = $value;
    }

    /**
     * Sets the status property value. Configurations status for automatic replies. The possible values are: disabled, alwaysEnabled, scheduled.
     *  @param AutomaticRepliesStatus|null $value Value to set for the status property.
    */
    public function setStatus(?AutomaticRepliesStatus $value ): void {
        $this->status = $value;
    }

}
