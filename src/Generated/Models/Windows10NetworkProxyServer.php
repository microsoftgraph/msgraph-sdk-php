<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

/**
 * Network Proxy Server Policy.
*/
class Windows10NetworkProxyServer implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new windows10NetworkProxyServer and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Windows10NetworkProxyServer
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Windows10NetworkProxyServer {
        return new Windows10NetworkProxyServer();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the address property value. Address to the proxy server. Specify an address in the format [':']
     * @return string|null
    */
    public function getAddress(): ?string {
        return $this->getBackingStore()->get('address');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the exceptions property value. Addresses that should not use the proxy server. The system will not use the proxy server for addresses beginning with what is specified in this node.
     * @return array<string>|null
    */
    public function getExceptions(): ?array {
        return $this->getBackingStore()->get('exceptions');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'address' => fn(ParseNode $n) => $o->setAddress($n->getStringValue()),
            'exceptions' => fn(ParseNode $n) => $o->setExceptions($n->getCollectionOfPrimitiveValues()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'useForLocalAddresses' => fn(ParseNode $n) => $o->setUseForLocalAddresses($n->getBooleanValue()),
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the useForLocalAddresses property value. Specifies whether the proxy server should be used for local (intranet) addresses.
     * @return bool|null
    */
    public function getUseForLocalAddresses(): ?bool {
        return $this->getBackingStore()->get('useForLocalAddresses');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('address', $this->getAddress());
        $writer->writeCollectionOfPrimitiveValues('exceptions', $this->getExceptions());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeBooleanValue('useForLocalAddresses', $this->getUseForLocalAddresses());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the address property value. Address to the proxy server. Specify an address in the format [':']
     * @param string|null $value Value to set for the address property.
    */
    public function setAddress(?string $value): void {
        $this->getBackingStore()->set('address', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the exceptions property value. Addresses that should not use the proxy server. The system will not use the proxy server for addresses beginning with what is specified in this node.
     * @param array<string>|null $value Value to set for the exceptions property.
    */
    public function setExceptions(?array $value): void {
        $this->getBackingStore()->set('exceptions', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the useForLocalAddresses property value. Specifies whether the proxy server should be used for local (intranet) addresses.
     * @param bool|null $value Value to set for the useForLocalAddresses property.
    */
    public function setUseForLocalAddresses(?bool $value): void {
        $this->getBackingStore()->set('useForLocalAddresses', $value);
    }

}
