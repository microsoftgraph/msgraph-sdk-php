<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class StaffAvailabilityItem implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<AvailabilityItem>|null $availabilityItems Each item in this collection indicates a slot and the status of the staff member.
    */
    private ?array $availabilityItems = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var string|null $staffId The ID of the staff member.
    */
    private ?string $staffId = null;
    
    /**
     * Instantiates a new staffAvailabilityItem and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.staffAvailabilityItem');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return StaffAvailabilityItem
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): StaffAvailabilityItem {
        return new StaffAvailabilityItem();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the availabilityItems property value. Each item in this collection indicates a slot and the status of the staff member.
     * @return array<AvailabilityItem>|null
    */
    public function getAvailabilityItems(): ?array {
        return $this->availabilityItems;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'availabilityItems' => function (ParseNode $n) use ($o) { $o->setAvailabilityItems($n->getCollectionOfObjectValues(array(AvailabilityItem::class, 'createFromDiscriminatorValue'))); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'staffId' => function (ParseNode $n) use ($o) { $o->setStaffId($n->getStringValue()); },
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the staffId property value. The ID of the staff member.
     * @return string|null
    */
    public function getStaffId(): ?string {
        return $this->staffId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('availabilityItems', $this->availabilityItems);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeStringValue('staffId', $this->staffId);
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
     * Sets the availabilityItems property value. Each item in this collection indicates a slot and the status of the staff member.
     *  @param array<AvailabilityItem>|null $value Value to set for the availabilityItems property.
    */
    public function setAvailabilityItems(?array $value ): void {
        $this->availabilityItems = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the staffId property value. The ID of the staff member.
     *  @param string|null $value Value to set for the staffId property.
    */
    public function setStaffId(?string $value ): void {
        $this->staffId = $value;
    }

}
