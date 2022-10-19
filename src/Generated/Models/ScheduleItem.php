<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ScheduleItem implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var DateTimeTimeZone|null $end The date, time, and time zone that the corresponding event ends.
    */
    private ?DateTimeTimeZone $end = null;
    
    /**
     * @var bool|null $isPrivate The sensitivity of the corresponding event. True if the event is marked private, false otherwise. Optional.
    */
    private ?bool $isPrivate = null;
    
    /**
     * @var string|null $location The location where the corresponding event is held or attended from. Optional.
    */
    private ?string $location = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var DateTimeTimeZone|null $start The date, time, and time zone that the corresponding event starts.
    */
    private ?DateTimeTimeZone $start = null;
    
    /**
     * @var FreeBusyStatus|null $status The availability status of the user or resource during the corresponding event. The possible values are: free, tentative, busy, oof, workingElsewhere, unknown.
    */
    private ?FreeBusyStatus $status = null;
    
    /**
     * @var string|null $subject The corresponding event's subject line. Optional.
    */
    private ?string $subject = null;
    
    /**
     * Instantiates a new scheduleItem and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.scheduleItem');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ScheduleItem
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ScheduleItem {
        return new ScheduleItem();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the end property value. The date, time, and time zone that the corresponding event ends.
     * @return DateTimeTimeZone|null
    */
    public function getEnd(): ?DateTimeTimeZone {
        return $this->end;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'end' => fn(ParseNode $n) => $o->setEnd($n->getObjectValue([DateTimeTimeZone::class, 'createFromDiscriminatorValue'])),
            'isPrivate' => fn(ParseNode $n) => $o->setIsPrivate($n->getBooleanValue()),
            'location' => fn(ParseNode $n) => $o->setLocation($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'start' => fn(ParseNode $n) => $o->setStart($n->getObjectValue([DateTimeTimeZone::class, 'createFromDiscriminatorValue'])),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(FreeBusyStatus::class)),
            'subject' => fn(ParseNode $n) => $o->setSubject($n->getStringValue()),
        ];
    }

    /**
     * Gets the isPrivate property value. The sensitivity of the corresponding event. True if the event is marked private, false otherwise. Optional.
     * @return bool|null
    */
    public function getIsPrivate(): ?bool {
        return $this->isPrivate;
    }

    /**
     * Gets the location property value. The location where the corresponding event is held or attended from. Optional.
     * @return string|null
    */
    public function getLocation(): ?string {
        return $this->location;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the start property value. The date, time, and time zone that the corresponding event starts.
     * @return DateTimeTimeZone|null
    */
    public function getStart(): ?DateTimeTimeZone {
        return $this->start;
    }

    /**
     * Gets the status property value. The availability status of the user or resource during the corresponding event. The possible values are: free, tentative, busy, oof, workingElsewhere, unknown.
     * @return FreeBusyStatus|null
    */
    public function getStatus(): ?FreeBusyStatus {
        return $this->status;
    }

    /**
     * Gets the subject property value. The corresponding event's subject line. Optional.
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
        $writer->writeObjectValue('end', $this->end);
        $writer->writeBooleanValue('isPrivate', $this->isPrivate);
        $writer->writeStringValue('location', $this->location);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeObjectValue('start', $this->start);
        $writer->writeEnumValue('status', $this->status);
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
     * Sets the end property value. The date, time, and time zone that the corresponding event ends.
     *  @param DateTimeTimeZone|null $value Value to set for the end property.
    */
    public function setEnd(?DateTimeTimeZone $value ): void {
        $this->end = $value;
    }

    /**
     * Sets the isPrivate property value. The sensitivity of the corresponding event. True if the event is marked private, false otherwise. Optional.
     *  @param bool|null $value Value to set for the isPrivate property.
    */
    public function setIsPrivate(?bool $value ): void {
        $this->isPrivate = $value;
    }

    /**
     * Sets the location property value. The location where the corresponding event is held or attended from. Optional.
     *  @param string|null $value Value to set for the location property.
    */
    public function setLocation(?string $value ): void {
        $this->location = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the start property value. The date, time, and time zone that the corresponding event starts.
     *  @param DateTimeTimeZone|null $value Value to set for the start property.
    */
    public function setStart(?DateTimeTimeZone $value ): void {
        $this->start = $value;
    }

    /**
     * Sets the status property value. The availability status of the user or resource during the corresponding event. The possible values are: free, tentative, busy, oof, workingElsewhere, unknown.
     *  @param FreeBusyStatus|null $value Value to set for the status property.
    */
    public function setStatus(?FreeBusyStatus $value ): void {
        $this->status = $value;
    }

    /**
     * Sets the subject property value. The corresponding event's subject line. Optional.
     *  @param string|null $value Value to set for the subject property.
    */
    public function setSubject(?string $value ): void {
        $this->subject = $value;
    }

}
