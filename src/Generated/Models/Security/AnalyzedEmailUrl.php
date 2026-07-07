<?php

namespace Microsoft\Graph\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class AnalyzedEmailUrl implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new AnalyzedEmailUrl and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AnalyzedEmailUrl
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AnalyzedEmailUrl {
        return new AnalyzedEmailUrl();
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
     * Gets the detectionMethod property value. The method used to detect threats in the URL.
     * @return string|null
    */
    public function getDetectionMethod(): ?string {
        $val = $this->getBackingStore()->get('detectionMethod');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'detectionMethod'");
    }

    /**
     * Gets the detonationDetails property value. Detonation data associated with the URL.
     * @return DetonationDetails|null
    */
    public function getDetonationDetails(): ?DetonationDetails {
        $val = $this->getBackingStore()->get('detonationDetails');
        if (is_null($val) || $val instanceof DetonationDetails) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'detonationDetails'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'detectionMethod' => fn(ParseNode $n) => $o->setDetectionMethod($n->getStringValue()),
            'detonationDetails' => fn(ParseNode $n) => $o->setDetonationDetails($n->getObjectValue([DetonationDetails::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'tenantAllowBlockListDetailInfo' => fn(ParseNode $n) => $o->setTenantAllowBlockListDetailInfo($n->getStringValue()),
            'threatType' => fn(ParseNode $n) => $o->setThreatType($n->getEnumValue(ThreatType::class)),
            'url' => fn(ParseNode $n) => $o->setUrl($n->getStringValue()),
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
     * Gets the tenantAllowBlockListDetailInfo property value. Details of entries in tenant allow/block list configured by tenant.
     * @return string|null
    */
    public function getTenantAllowBlockListDetailInfo(): ?string {
        $val = $this->getBackingStore()->get('tenantAllowBlockListDetailInfo');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'tenantAllowBlockListDetailInfo'");
    }

    /**
     * Gets the threatType property value. The type of threat associated with the URL. The possible values are: unknown, spam, malware, phishing, none, unknownFutureValue.
     * @return ThreatType|null
    */
    public function getThreatType(): ?ThreatType {
        $val = $this->getBackingStore()->get('threatType');
        if (is_null($val) || $val instanceof ThreatType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'threatType'");
    }

    /**
     * Gets the url property value. The URL that is found in the email. This is full URL string, including query parameters.
     * @return string|null
    */
    public function getUrl(): ?string {
        $val = $this->getBackingStore()->get('url');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'url'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('detectionMethod', $this->getDetectionMethod());
        $writer->writeObjectValue('detonationDetails', $this->getDetonationDetails());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('tenantAllowBlockListDetailInfo', $this->getTenantAllowBlockListDetailInfo());
        $writer->writeEnumValue('threatType', $this->getThreatType());
        $writer->writeStringValue('url', $this->getUrl());
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
     * Sets the detectionMethod property value. The method used to detect threats in the URL.
     * @param string|null $value Value to set for the detectionMethod property.
    */
    public function setDetectionMethod(?string $value): void {
        $this->getBackingStore()->set('detectionMethod', $value);
    }

    /**
     * Sets the detonationDetails property value. Detonation data associated with the URL.
     * @param DetonationDetails|null $value Value to set for the detonationDetails property.
    */
    public function setDetonationDetails(?DetonationDetails $value): void {
        $this->getBackingStore()->set('detonationDetails', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the tenantAllowBlockListDetailInfo property value. Details of entries in tenant allow/block list configured by tenant.
     * @param string|null $value Value to set for the tenantAllowBlockListDetailInfo property.
    */
    public function setTenantAllowBlockListDetailInfo(?string $value): void {
        $this->getBackingStore()->set('tenantAllowBlockListDetailInfo', $value);
    }

    /**
     * Sets the threatType property value. The type of threat associated with the URL. The possible values are: unknown, spam, malware, phishing, none, unknownFutureValue.
     * @param ThreatType|null $value Value to set for the threatType property.
    */
    public function setThreatType(?ThreatType $value): void {
        $this->getBackingStore()->set('threatType', $value);
    }

    /**
     * Sets the url property value. The URL that is found in the email. This is full URL string, including query parameters.
     * @param string|null $value Value to set for the url property.
    */
    public function setUrl(?string $value): void {
        $this->getBackingStore()->set('url', $value);
    }

}
