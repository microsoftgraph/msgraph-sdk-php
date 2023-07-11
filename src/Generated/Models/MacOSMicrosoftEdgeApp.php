<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Contains properties and inherited properties for the macOS Microsoft Edge App.
*/
class MacOSMicrosoftEdgeApp extends MobileApp implements Parsable 
{
    /**
     * Instantiates a new macOSMicrosoftEdgeApp and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.macOSMicrosoftEdgeApp');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MacOSMicrosoftEdgeApp
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MacOSMicrosoftEdgeApp {
        return new MacOSMicrosoftEdgeApp();
    }

    /**
     * Gets the channel property value. The enum to specify the channels for Microsoft Edge apps.
     * @return MicrosoftEdgeChannel|null
    */
    public function getChannel(): ?MicrosoftEdgeChannel {
        $val = $this->getBackingStore()->get('channel');
        if (is_null($val) || $val instanceof MicrosoftEdgeChannel) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'channel'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'channel' => fn(ParseNode $n) => $o->setChannel($n->getEnumValue(MicrosoftEdgeChannel::class)),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ]);
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('channel', $this->getChannel());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
    }

    /**
     * Sets the channel property value. The enum to specify the channels for Microsoft Edge apps.
     * @param MicrosoftEdgeChannel|null $value Value to set for the channel property.
    */
    public function setChannel(?MicrosoftEdgeChannel $value): void {
        $this->getBackingStore()->set('channel', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
