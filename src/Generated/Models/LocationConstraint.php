<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class LocationConstraint implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var bool|null $isRequired The client requests the service to include in the response a meeting location for the meeting. If this is true and all the resources are busy, findMeetingTimes will not return any meeting time suggestions. If this is false and all the resources are busy, findMeetingTimes would still look for meeting times without locations.
    */
    private ?bool $isRequired = null;
    
    /**
     * @var array<LocationConstraintItem>|null $locations Constraint information for one or more locations that the client requests for the meeting.
    */
    private ?array $locations = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var bool|null $suggestLocation The client requests the service to suggest one or more meeting locations.
    */
    private ?bool $suggestLocation = null;
    
    /**
     * Instantiates a new locationConstraint and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.locationConstraint');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return LocationConstraint
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): LocationConstraint {
        return new LocationConstraint();
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
            'isRequired' => fn(ParseNode $n) => $o->setIsRequired($n->getBooleanValue()),
            'locations' => fn(ParseNode $n) => $o->setLocations($n->getCollectionOfObjectValues([LocationConstraintItem::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'suggestLocation' => fn(ParseNode $n) => $o->setSuggestLocation($n->getBooleanValue()),
        ];
    }

    /**
     * Gets the isRequired property value. The client requests the service to include in the response a meeting location for the meeting. If this is true and all the resources are busy, findMeetingTimes will not return any meeting time suggestions. If this is false and all the resources are busy, findMeetingTimes would still look for meeting times without locations.
     * @return bool|null
    */
    public function getIsRequired(): ?bool {
        return $this->isRequired;
    }

    /**
     * Gets the locations property value. Constraint information for one or more locations that the client requests for the meeting.
     * @return array<LocationConstraintItem>|null
    */
    public function getLocations(): ?array {
        return $this->locations;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the suggestLocation property value. The client requests the service to suggest one or more meeting locations.
     * @return bool|null
    */
    public function getSuggestLocation(): ?bool {
        return $this->suggestLocation;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('isRequired', $this->isRequired);
        $writer->writeCollectionOfObjectValues('locations', $this->locations);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeBooleanValue('suggestLocation', $this->suggestLocation);
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
     * Sets the isRequired property value. The client requests the service to include in the response a meeting location for the meeting. If this is true and all the resources are busy, findMeetingTimes will not return any meeting time suggestions. If this is false and all the resources are busy, findMeetingTimes would still look for meeting times without locations.
     *  @param bool|null $value Value to set for the isRequired property.
    */
    public function setIsRequired(?bool $value ): void {
        $this->isRequired = $value;
    }

    /**
     * Sets the locations property value. Constraint information for one or more locations that the client requests for the meeting.
     *  @param array<LocationConstraintItem>|null $value Value to set for the locations property.
    */
    public function setLocations(?array $value ): void {
        $this->locations = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the suggestLocation property value. The client requests the service to suggest one or more meeting locations.
     *  @param bool|null $value Value to set for the suggestLocation property.
    */
    public function setSuggestLocation(?bool $value ): void {
        $this->suggestLocation = $value;
    }

}
