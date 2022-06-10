<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AssignedLicense implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<string>|null $disabledPlans A collection of the unique identifiers for plans that have been disabled.
    */
    private ?array $disabledPlans = null;
    
    /**
     * @var string|null $skuId The unique identifier for the SKU.
    */
    private ?string $skuId = null;
    
    /**
     * Instantiates a new assignedLicense and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AssignedLicense
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AssignedLicense {
        return new AssignedLicense();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the disabledPlans property value. A collection of the unique identifiers for plans that have been disabled.
     * @return array<string>|null
    */
    public function getDisabledPlans(): ?array {
        return $this->disabledPlans;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'disabledPlans' => function (ParseNode $n) use ($o) { $o->setDisabledPlans($n->getCollectionOfPrimitiveValues()); },
            'skuId' => function (ParseNode $n) use ($o) { $o->setSkuId($n->getStringValue()); },
        ];
    }

    /**
     * Gets the skuId property value. The unique identifier for the SKU.
     * @return string|null
    */
    public function getSkuId(): ?string {
        return $this->skuId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfPrimitiveValues('disabledPlans', $this->disabledPlans);
        $writer->writeStringValue('skuId', $this->skuId);
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
     * Sets the disabledPlans property value. A collection of the unique identifiers for plans that have been disabled.
     *  @param array<string>|null $value Value to set for the disabledPlans property.
    */
    public function setDisabledPlans(?array $value ): void {
        $this->disabledPlans = $value;
    }

    /**
     * Sets the skuId property value. The unique identifier for the SKU.
     *  @param string|null $value Value to set for the skuId property.
    */
    public function setSkuId(?string $value ): void {
        $this->skuId = $value;
    }

}
