<?php

namespace Microsoft\Graph\Generated\Users\Item\ManagedDevices\Item\WindowsDefenderScan;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WindowsDefenderScanRequestBody implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var bool|null $quickScan The quickScan property */
    private ?bool $quickScan = null;
    
    /**
     * Instantiates a new windowsDefenderScanRequestBody and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WindowsDefenderScanRequestBody
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): WindowsDefenderScanRequestBody {
        return new WindowsDefenderScanRequestBody();
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
            'quickScan' => function (self $o, ParseNode $n) { $o->setQuickScan($n->getBooleanValue()); },
        ];
    }

    /**
     * Gets the quickScan property value. The quickScan property
     * @return bool|null
    */
    public function getQuickScan(): ?bool {
        return $this->quickScan;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('quickScan', $this->quickScan);
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
     * Sets the quickScan property value. The quickScan property
     *  @param bool|null $value Value to set for the quickScan property.
    */
    public function setQuickScan(?bool $value ): void {
        $this->quickScan = $value;
    }

}
