<?php

namespace Microsoft\Graph\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class StoragePlanInformation implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var bool|null $upgradeAvailable Indicates whether there are higher storage quota plans available. Read-only. */
    private ?bool $upgradeAvailable = null;
    
    /**
     * Instantiates a new storagePlanInformation and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return StoragePlanInformation
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): StoragePlanInformation {
        return new StoragePlanInformation();
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
        return  [
            'upgradeAvailable' => function (self $o, ParseNode $n) { $o->setUpgradeAvailable($n->getBooleanValue()); },
        ];
    }

    /**
     * Gets the upgradeAvailable property value. Indicates whether there are higher storage quota plans available. Read-only.
     * @return bool|null
    */
    public function getUpgradeAvailable(): ?bool {
        return $this->upgradeAvailable;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('upgradeAvailable', $this->upgradeAvailable);
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
     * Sets the upgradeAvailable property value. Indicates whether there are higher storage quota plans available. Read-only.
     *  @param bool|null $value Value to set for the upgradeAvailable property.
    */
    public function setUpgradeAvailable(?bool $value ): void {
        $this->upgradeAvailable = $value;
    }

}
