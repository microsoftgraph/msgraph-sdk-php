<?php

namespace Microsoft\Graph\Me\OnlineMeetings\CreateOrGet;

use DateTime;
use Microsoft\Graph\Models\ChatInfo;
use Microsoft\Graph\Models\MeetingParticipants;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CreateOrGetPostRequestBody implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var ChatInfo|null $chatInfo The chatInfo property
    */
    private ?ChatInfo $chatInfo = null;
    
    /**
     * @var DateTime|null $endDateTime The endDateTime property
    */
    private ?DateTime $endDateTime = null;
    
    /**
     * @var string|null $externalId The externalId property
    */
    private ?string $externalId = null;
    
    /**
     * @var MeetingParticipants|null $participants The participants property
    */
    private ?MeetingParticipants $participants = null;
    
    /**
     * @var DateTime|null $startDateTime The startDateTime property
    */
    private ?DateTime $startDateTime = null;
    
    /**
     * @var string|null $subject The subject property
    */
    private ?string $subject = null;
    
    /**
     * Instantiates a new createOrGetPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CreateOrGetPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CreateOrGetPostRequestBody {
        return new CreateOrGetPostRequestBody();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the chatInfo property value. The chatInfo property
     * @return ChatInfo|null
    */
    public function getChatInfo(): ?ChatInfo {
        return $this->chatInfo;
    }

    /**
     * Gets the endDateTime property value. The endDateTime property
     * @return DateTime|null
    */
    public function getEndDateTime(): ?DateTime {
        return $this->endDateTime;
    }

    /**
     * Gets the externalId property value. The externalId property
     * @return string|null
    */
    public function getExternalId(): ?string {
        return $this->externalId;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'chatInfo' => function (ParseNode $n) use ($o) { $o->setChatInfo($n->getObjectValue(array(ChatInfo::class, 'createFromDiscriminatorValue'))); },
            'endDateTime' => function (ParseNode $n) use ($o) { $o->setEndDateTime($n->getDateTimeValue()); },
            'externalId' => function (ParseNode $n) use ($o) { $o->setExternalId($n->getStringValue()); },
            'participants' => function (ParseNode $n) use ($o) { $o->setParticipants($n->getObjectValue(array(MeetingParticipants::class, 'createFromDiscriminatorValue'))); },
            'startDateTime' => function (ParseNode $n) use ($o) { $o->setStartDateTime($n->getDateTimeValue()); },
            'subject' => function (ParseNode $n) use ($o) { $o->setSubject($n->getStringValue()); },
        ];
    }

    /**
     * Gets the participants property value. The participants property
     * @return MeetingParticipants|null
    */
    public function getParticipants(): ?MeetingParticipants {
        return $this->participants;
    }

    /**
     * Gets the startDateTime property value. The startDateTime property
     * @return DateTime|null
    */
    public function getStartDateTime(): ?DateTime {
        return $this->startDateTime;
    }

    /**
     * Gets the subject property value. The subject property
     * @return string|null
    */
    public function getSubject(): ?string {
        return $this->subject;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('chatInfo', $this->chatInfo);
        $writer->writeDateTimeValue('endDateTime', $this->endDateTime);
        $writer->writeStringValue('externalId', $this->externalId);
        $writer->writeObjectValue('participants', $this->participants);
        $writer->writeDateTimeValue('startDateTime', $this->startDateTime);
        $writer->writeStringValue('subject', $this->subject);
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
     * Sets the chatInfo property value. The chatInfo property
     *  @param ChatInfo|null $value Value to set for the chatInfo property.
    */
    public function setChatInfo(?ChatInfo $value ): void {
        $this->chatInfo = $value;
    }

    /**
     * Sets the endDateTime property value. The endDateTime property
     *  @param DateTime|null $value Value to set for the endDateTime property.
    */
    public function setEndDateTime(?DateTime $value ): void {
        $this->endDateTime = $value;
    }

    /**
     * Sets the externalId property value. The externalId property
     *  @param string|null $value Value to set for the externalId property.
    */
    public function setExternalId(?string $value ): void {
        $this->externalId = $value;
    }

    /**
     * Sets the participants property value. The participants property
     *  @param MeetingParticipants|null $value Value to set for the participants property.
    */
    public function setParticipants(?MeetingParticipants $value ): void {
        $this->participants = $value;
    }

    /**
     * Sets the startDateTime property value. The startDateTime property
     *  @param DateTime|null $value Value to set for the startDateTime property.
    */
    public function setStartDateTime(?DateTime $value ): void {
        $this->startDateTime = $value;
    }

    /**
     * Sets the subject property value. The subject property
     *  @param string|null $value Value to set for the subject property.
    */
    public function setSubject(?string $value ): void {
        $this->subject = $value;
    }

}
