<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AutomaticRepliesMailTips implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $message The automatic reply message.
    */
    private ?string $message = null;
    
    /**
     * @var LocaleInfo|null $messageLanguage The language that the automatic reply message is in.
    */
    private ?LocaleInfo $messageLanguage = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var DateTimeTimeZone|null $scheduledEndTime The date and time that automatic replies are set to end.
    */
    private ?DateTimeTimeZone $scheduledEndTime = null;
    
    /**
     * @var DateTimeTimeZone|null $scheduledStartTime The date and time that automatic replies are set to begin.
    */
    private ?DateTimeTimeZone $scheduledStartTime = null;
    
    /**
     * Instantiates a new automaticRepliesMailTips and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.automaticRepliesMailTips');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AutomaticRepliesMailTips
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AutomaticRepliesMailTips {
        return new AutomaticRepliesMailTips();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'message' => fn(ParseNode $n) => $o->setMessage($n->getStringValue()),
            'messageLanguage' => fn(ParseNode $n) => $o->setMessageLanguage($n->getObjectValue([LocaleInfo::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'scheduledEndTime' => fn(ParseNode $n) => $o->setScheduledEndTime($n->getObjectValue([DateTimeTimeZone::class, 'createFromDiscriminatorValue'])),
            'scheduledStartTime' => fn(ParseNode $n) => $o->setScheduledStartTime($n->getObjectValue([DateTimeTimeZone::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the message property value. The automatic reply message.
     * @return string|null
    */
    public function getMessage(): ?string {
        return $this->message;
    }

    /**
     * Gets the messageLanguage property value. The language that the automatic reply message is in.
     * @return LocaleInfo|null
    */
    public function getMessageLanguage(): ?LocaleInfo {
        return $this->messageLanguage;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the scheduledEndTime property value. The date and time that automatic replies are set to end.
     * @return DateTimeTimeZone|null
    */
    public function getScheduledEndTime(): ?DateTimeTimeZone {
        return $this->scheduledEndTime;
    }

    /**
     * Gets the scheduledStartTime property value. The date and time that automatic replies are set to begin.
     * @return DateTimeTimeZone|null
    */
    public function getScheduledStartTime(): ?DateTimeTimeZone {
        return $this->scheduledStartTime;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('message', $this->message);
        $writer->writeObjectValue('messageLanguage', $this->messageLanguage);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeObjectValue('scheduledEndTime', $this->scheduledEndTime);
        $writer->writeObjectValue('scheduledStartTime', $this->scheduledStartTime);
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
     * Sets the message property value. The automatic reply message.
     *  @param string|null $value Value to set for the message property.
    */
    public function setMessage(?string $value ): void {
        $this->message = $value;
    }

    /**
     * Sets the messageLanguage property value. The language that the automatic reply message is in.
     *  @param LocaleInfo|null $value Value to set for the messageLanguage property.
    */
    public function setMessageLanguage(?LocaleInfo $value ): void {
        $this->messageLanguage = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the scheduledEndTime property value. The date and time that automatic replies are set to end.
     *  @param DateTimeTimeZone|null $value Value to set for the scheduledEndTime property.
    */
    public function setScheduledEndTime(?DateTimeTimeZone $value ): void {
        $this->scheduledEndTime = $value;
    }

    /**
     * Sets the scheduledStartTime property value. The date and time that automatic replies are set to begin.
     *  @param DateTimeTimeZone|null $value Value to set for the scheduledStartTime property.
    */
    public function setScheduledStartTime(?DateTimeTimeZone $value ): void {
        $this->scheduledStartTime = $value;
    }

}
