<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MeetingTimeSuggestionsResult implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $emptySuggestionsReason A reason for not returning any meeting suggestions. Possible values are: attendeesUnavailable, attendeesUnavailableOrUnknown, locationsUnavailable, organizerUnavailable, or unknown. This property is an empty string if the meetingTimeSuggestions property does include any meeting suggestions.
    */
    private ?string $emptySuggestionsReason = null;
    
    /**
     * @var array<MeetingTimeSuggestion>|null $meetingTimeSuggestions An array of meeting suggestions.
    */
    private ?array $meetingTimeSuggestions = null;
    
    /**
     * Instantiates a new MeetingTimeSuggestionsResult and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MeetingTimeSuggestionsResult
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MeetingTimeSuggestionsResult {
        return new MeetingTimeSuggestionsResult();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the emptySuggestionsReason property value. A reason for not returning any meeting suggestions. Possible values are: attendeesUnavailable, attendeesUnavailableOrUnknown, locationsUnavailable, organizerUnavailable, or unknown. This property is an empty string if the meetingTimeSuggestions property does include any meeting suggestions.
     * @return string|null
    */
    public function getEmptySuggestionsReason(): ?string {
        return $this->emptySuggestionsReason;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'emptySuggestionsReason' => function (ParseNode $n) use ($o) { $o->setEmptySuggestionsReason($n->getStringValue()); },
            'meetingTimeSuggestions' => function (ParseNode $n) use ($o) { $o->setMeetingTimeSuggestions($n->getCollectionOfObjectValues(array(MeetingTimeSuggestion::class, 'createFromDiscriminatorValue'))); },
        ];
    }

    /**
     * Gets the meetingTimeSuggestions property value. An array of meeting suggestions.
     * @return array<MeetingTimeSuggestion>|null
    */
    public function getMeetingTimeSuggestions(): ?array {
        return $this->meetingTimeSuggestions;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('emptySuggestionsReason', $this->emptySuggestionsReason);
        $writer->writeCollectionOfObjectValues('meetingTimeSuggestions', $this->meetingTimeSuggestions);
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
     * Sets the emptySuggestionsReason property value. A reason for not returning any meeting suggestions. Possible values are: attendeesUnavailable, attendeesUnavailableOrUnknown, locationsUnavailable, organizerUnavailable, or unknown. This property is an empty string if the meetingTimeSuggestions property does include any meeting suggestions.
     *  @param string|null $value Value to set for the emptySuggestionsReason property.
    */
    public function setEmptySuggestionsReason(?string $value ): void {
        $this->emptySuggestionsReason = $value;
    }

    /**
     * Sets the meetingTimeSuggestions property value. An array of meeting suggestions.
     *  @param array<MeetingTimeSuggestion>|null $value Value to set for the meetingTimeSuggestions property.
    */
    public function setMeetingTimeSuggestions(?array $value ): void {
        $this->meetingTimeSuggestions = $value;
    }

}
