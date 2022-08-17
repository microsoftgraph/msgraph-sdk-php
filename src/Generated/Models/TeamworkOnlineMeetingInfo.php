<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TeamworkOnlineMeetingInfo implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $calendarEventId The identifier of the calendar event associated with the meeting.
    */
    private ?string $calendarEventId = null;
    
    /**
     * @var string|null $joinWebUrl The URL that users click to join or uniquely identify the meeting.
    */
    private ?string $joinWebUrl = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var TeamworkUserIdentity|null $organizer The organizer of the meeting.
    */
    private ?TeamworkUserIdentity $organizer = null;
    
    /**
     * Instantiates a new teamworkOnlineMeetingInfo and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.teamworkOnlineMeetingInfo');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TeamworkOnlineMeetingInfo
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TeamworkOnlineMeetingInfo {
        return new TeamworkOnlineMeetingInfo();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the calendarEventId property value. The identifier of the calendar event associated with the meeting.
     * @return string|null
    */
    public function getCalendarEventId(): ?string {
        return $this->calendarEventId;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'calendarEventId' => function (ParseNode $n) use ($o) { $o->setCalendarEventId($n->getStringValue()); },
            'joinWebUrl' => function (ParseNode $n) use ($o) { $o->setJoinWebUrl($n->getStringValue()); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'organizer' => function (ParseNode $n) use ($o) { $o->setOrganizer($n->getObjectValue(array(TeamworkUserIdentity::class, 'createFromDiscriminatorValue'))); },
        ];
    }

    /**
     * Gets the joinWebUrl property value. The URL that users click to join or uniquely identify the meeting.
     * @return string|null
    */
    public function getJoinWebUrl(): ?string {
        return $this->joinWebUrl;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the organizer property value. The organizer of the meeting.
     * @return TeamworkUserIdentity|null
    */
    public function getOrganizer(): ?TeamworkUserIdentity {
        return $this->organizer;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('calendarEventId', $this->calendarEventId);
        $writer->writeStringValue('joinWebUrl', $this->joinWebUrl);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeObjectValue('organizer', $this->organizer);
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
     * Sets the calendarEventId property value. The identifier of the calendar event associated with the meeting.
     *  @param string|null $value Value to set for the calendarEventId property.
    */
    public function setCalendarEventId(?string $value ): void {
        $this->calendarEventId = $value;
    }

    /**
     * Sets the joinWebUrl property value. The URL that users click to join or uniquely identify the meeting.
     *  @param string|null $value Value to set for the joinWebUrl property.
    */
    public function setJoinWebUrl(?string $value ): void {
        $this->joinWebUrl = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the organizer property value. The organizer of the meeting.
     *  @param TeamworkUserIdentity|null $value Value to set for the organizer property.
    */
    public function setOrganizer(?TeamworkUserIdentity $value ): void {
        $this->organizer = $value;
    }

}
