<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WindowsDeviceADAccount extends WindowsDeviceAccount implements Parsable 
{
    /**
     * @var string|null $odataType The OdataType property
    */
    public ?string $odataType = null;
    
    /**
     * Instantiates a new windowsDeviceADAccount and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.windowsDeviceADAccount');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WindowsDeviceADAccount
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WindowsDeviceADAccount {
        return new WindowsDeviceADAccount();
    }

    /**
     * Gets the domainName property value. Not yet documented
     * @return string|null
    */
    public function getDomainName(): ?string {
        $val = $this->getBackingStore()->get('domainName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'domainName'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'domainName' => fn(ParseNode $n) => $o->setDomainName($n->getStringValue()),
            'userName' => fn(ParseNode $n) => $o->setUserName($n->getStringValue()),
        ]);
    }

    /**
     * Gets the userName property value. Not yet documented
     * @return string|null
    */
    public function getUserName(): ?string {
        $val = $this->getBackingStore()->get('userName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userName'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('domainName', $this->getDomainName());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('userName', $this->getUserName());
    }

    /**
     * Sets the domainName property value. Not yet documented
     * @param string|null $value Value to set for the domainName property.
    */
    public function setDomainName(?string $value): void {
        $this->getBackingStore()->set('domainName', $value);
    }

    /**
     * Sets the userName property value. Not yet documented
     * @param string|null $value Value to set for the userName property.
    */
    public function setUserName(?string $value): void {
        $this->getBackingStore()->set('userName', $value);
    }

}
