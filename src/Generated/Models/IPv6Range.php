<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class IPv6Range extends IpRange implements Parsable 
{
    /**
     * @var string|null $lowerAddress Lower address.
    */
    private ?string $lowerAddress = null;
    
    /**
     * @var string|null $upperAddress Upper address.
    */
    private ?string $upperAddress = null;
    
    /**
     * Instantiates a new IPv6Range and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.iPv6Range');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IPv6Range
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): IPv6Range {
        return new IPv6Range();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'lowerAddress' => function (ParseNode $n) use ($o) { $o->setLowerAddress($n->getStringValue()); },
            'upperAddress' => function (ParseNode $n) use ($o) { $o->setUpperAddress($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the lowerAddress property value. Lower address.
     * @return string|null
    */
    public function getLowerAddress(): ?string {
        return $this->lowerAddress;
    }

    /**
     * Gets the upperAddress property value. Upper address.
     * @return string|null
    */
    public function getUpperAddress(): ?string {
        return $this->upperAddress;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('lowerAddress', $this->lowerAddress);
        $writer->writeStringValue('upperAddress', $this->upperAddress);
    }

    /**
     * Sets the lowerAddress property value. Lower address.
     *  @param string|null $value Value to set for the lowerAddress property.
    */
    public function setLowerAddress(?string $value ): void {
        $this->lowerAddress = $value;
    }

    /**
     * Sets the upperAddress property value. Upper address.
     *  @param string|null $value Value to set for the upperAddress property.
    */
    public function setUpperAddress(?string $value ): void {
        $this->upperAddress = $value;
    }

}
