<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class OnlineMeetingInfo implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $conferenceId The ID of the conference.
    */
    private ?string $conferenceId = null;
    
    /**
     * @var string|null $joinUrl The external link that launches the online meeting. This is a URL that clients will launch into a browser and will redirect the user to join the meeting.
    */
    private ?string $joinUrl = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var array<Phone>|null $phones All of the phone numbers associated with this conference.
    */
    private ?array $phones = null;
    
    /**
     * @var string|null $quickDial The pre-formatted quickdial for this call.
    */
    private ?string $quickDial = null;
    
    /**
     * @var array<string>|null $tollFreeNumbers The toll free numbers that can be used to join the conference.
    */
    private ?array $tollFreeNumbers = null;
    
    /**
     * @var string|null $tollNumber The toll number that can be used to join the conference.
    */
    private ?string $tollNumber = null;
    
    /**
     * Instantiates a new onlineMeetingInfo and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.onlineMeetingInfo');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OnlineMeetingInfo
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OnlineMeetingInfo {
        return new OnlineMeetingInfo();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the conferenceId property value. The ID of the conference.
     * @return string|null
    */
    public function getConferenceId(): ?string {
        return $this->conferenceId;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'conferenceId' => function (ParseNode $n) use ($o) { $o->setConferenceId($n->getStringValue()); },
            'joinUrl' => function (ParseNode $n) use ($o) { $o->setJoinUrl($n->getStringValue()); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'phones' => function (ParseNode $n) use ($o) { $o->setPhones($n->getCollectionOfObjectValues(array(Phone::class, 'createFromDiscriminatorValue'))); },
            'quickDial' => function (ParseNode $n) use ($o) { $o->setQuickDial($n->getStringValue()); },
            'tollFreeNumbers' => function (ParseNode $n) use ($o) { $o->setTollFreeNumbers($n->getCollectionOfPrimitiveValues()); },
            'tollNumber' => function (ParseNode $n) use ($o) { $o->setTollNumber($n->getStringValue()); },
        ];
    }

    /**
     * Gets the joinUrl property value. The external link that launches the online meeting. This is a URL that clients will launch into a browser and will redirect the user to join the meeting.
     * @return string|null
    */
    public function getJoinUrl(): ?string {
        return $this->joinUrl;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the phones property value. All of the phone numbers associated with this conference.
     * @return array<Phone>|null
    */
    public function getPhones(): ?array {
        return $this->phones;
    }

    /**
     * Gets the quickDial property value. The pre-formatted quickdial for this call.
     * @return string|null
    */
    public function getQuickDial(): ?string {
        return $this->quickDial;
    }

    /**
     * Gets the tollFreeNumbers property value. The toll free numbers that can be used to join the conference.
     * @return array<string>|null
    */
    public function getTollFreeNumbers(): ?array {
        return $this->tollFreeNumbers;
    }

    /**
     * Gets the tollNumber property value. The toll number that can be used to join the conference.
     * @return string|null
    */
    public function getTollNumber(): ?string {
        return $this->tollNumber;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('conferenceId', $this->conferenceId);
        $writer->writeStringValue('joinUrl', $this->joinUrl);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeCollectionOfObjectValues('phones', $this->phones);
        $writer->writeStringValue('quickDial', $this->quickDial);
        $writer->writeCollectionOfPrimitiveValues('tollFreeNumbers', $this->tollFreeNumbers);
        $writer->writeStringValue('tollNumber', $this->tollNumber);
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
     * Sets the conferenceId property value. The ID of the conference.
     *  @param string|null $value Value to set for the conferenceId property.
    */
    public function setConferenceId(?string $value ): void {
        $this->conferenceId = $value;
    }

    /**
     * Sets the joinUrl property value. The external link that launches the online meeting. This is a URL that clients will launch into a browser and will redirect the user to join the meeting.
     *  @param string|null $value Value to set for the joinUrl property.
    */
    public function setJoinUrl(?string $value ): void {
        $this->joinUrl = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the phones property value. All of the phone numbers associated with this conference.
     *  @param array<Phone>|null $value Value to set for the phones property.
    */
    public function setPhones(?array $value ): void {
        $this->phones = $value;
    }

    /**
     * Sets the quickDial property value. The pre-formatted quickdial for this call.
     *  @param string|null $value Value to set for the quickDial property.
    */
    public function setQuickDial(?string $value ): void {
        $this->quickDial = $value;
    }

    /**
     * Sets the tollFreeNumbers property value. The toll free numbers that can be used to join the conference.
     *  @param array<string>|null $value Value to set for the tollFreeNumbers property.
    */
    public function setTollFreeNumbers(?array $value ): void {
        $this->tollFreeNumbers = $value;
    }

    /**
     * Sets the tollNumber property value. The toll number that can be used to join the conference.
     *  @param string|null $value Value to set for the tollNumber property.
    */
    public function setTollNumber(?string $value ): void {
        $this->tollNumber = $value;
    }

}
