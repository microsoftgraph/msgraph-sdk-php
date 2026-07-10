<?php

namespace Microsoft\Graph\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class AnalyzedEmailAuthenticationDetail implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new AnalyzedEmailAuthenticationDetail and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AnalyzedEmailAuthenticationDetail
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AnalyzedEmailAuthenticationDetail {
        return new AnalyzedEmailAuthenticationDetail();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        $val = $this->getBackingStore()->get('additionalData');
        if (is_null($val) || is_array($val)) {
            /** @var array<string, mixed>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalData'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the compositeAuthentication property value. A value used by Microsoft 365 to combine email authentication such as SPF, DKIM, and DMARC, to determine whether the message is authentic.
     * @return string|null
    */
    public function getCompositeAuthentication(): ?string {
        $val = $this->getBackingStore()->get('compositeAuthentication');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'compositeAuthentication'");
    }

    /**
     * Gets the dkim property value. DomainKeys identified mail (DKIM). Indicates whether it was pass/fail/soft fail.
     * @return string|null
    */
    public function getDkim(): ?string {
        $val = $this->getBackingStore()->get('dkim');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'dkim'");
    }

    /**
     * Gets the dmarc property value. Domain-based Message Authentication. Indicates whether it was pass/fail/soft fail.
     * @return string|null
    */
    public function getDmarc(): ?string {
        $val = $this->getBackingStore()->get('dmarc');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'dmarc'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'compositeAuthentication' => fn(ParseNode $n) => $o->setCompositeAuthentication($n->getStringValue()),
            'dkim' => fn(ParseNode $n) => $o->setDkim($n->getStringValue()),
            'dmarc' => fn(ParseNode $n) => $o->setDmarc($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'senderPolicyFramework' => fn(ParseNode $n) => $o->setSenderPolicyFramework($n->getStringValue()),
        ];
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
     * Gets the senderPolicyFramework property value. Sender Policy Framework (SPF). Indicates whether it was pass/fail/soft fail.
     * @return string|null
    */
    public function getSenderPolicyFramework(): ?string {
        $val = $this->getBackingStore()->get('senderPolicyFramework');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'senderPolicyFramework'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('compositeAuthentication', $this->getCompositeAuthentication());
        $writer->writeStringValue('dkim', $this->getDkim());
        $writer->writeStringValue('dmarc', $this->getDmarc());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('senderPolicyFramework', $this->getSenderPolicyFramework());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the compositeAuthentication property value. A value used by Microsoft 365 to combine email authentication such as SPF, DKIM, and DMARC, to determine whether the message is authentic.
     * @param string|null $value Value to set for the compositeAuthentication property.
    */
    public function setCompositeAuthentication(?string $value): void {
        $this->getBackingStore()->set('compositeAuthentication', $value);
    }

    /**
     * Sets the dkim property value. DomainKeys identified mail (DKIM). Indicates whether it was pass/fail/soft fail.
     * @param string|null $value Value to set for the dkim property.
    */
    public function setDkim(?string $value): void {
        $this->getBackingStore()->set('dkim', $value);
    }

    /**
     * Sets the dmarc property value. Domain-based Message Authentication. Indicates whether it was pass/fail/soft fail.
     * @param string|null $value Value to set for the dmarc property.
    */
    public function setDmarc(?string $value): void {
        $this->getBackingStore()->set('dmarc', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the senderPolicyFramework property value. Sender Policy Framework (SPF). Indicates whether it was pass/fail/soft fail.
     * @param string|null $value Value to set for the senderPolicyFramework property.
    */
    public function setSenderPolicyFramework(?string $value): void {
        $this->getBackingStore()->set('senderPolicyFramework', $value);
    }

}
