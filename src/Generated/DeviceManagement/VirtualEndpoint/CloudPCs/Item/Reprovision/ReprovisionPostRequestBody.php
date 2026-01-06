<?php

namespace Microsoft\Graph\Generated\DeviceManagement\VirtualEndpoint\CloudPCs\Item\Reprovision;

use Microsoft\Graph\Generated\Models\CloudPcOperatingSystem;
use Microsoft\Graph\Generated\Models\CloudPcUserAccountType;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class ReprovisionPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new ReprovisionPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ReprovisionPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ReprovisionPostRequestBody {
        return new ReprovisionPostRequestBody();
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
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'osVersion' => fn(ParseNode $n) => $o->setOsVersion($n->getEnumValue(CloudPcOperatingSystem::class)),
            'userAccountType' => fn(ParseNode $n) => $o->setUserAccountType($n->getEnumValue(CloudPcUserAccountType::class)),
        ];
    }

    /**
     * Gets the osVersion property value. The osVersion property
     * @return CloudPcOperatingSystem|null
    */
    public function getOsVersion(): ?CloudPcOperatingSystem {
        $val = $this->getBackingStore()->get('osVersion');
        if (is_null($val) || $val instanceof CloudPcOperatingSystem) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'osVersion'");
    }

    /**
     * Gets the userAccountType property value. The userAccountType property
     * @return CloudPcUserAccountType|null
    */
    public function getUserAccountType(): ?CloudPcUserAccountType {
        $val = $this->getBackingStore()->get('userAccountType');
        if (is_null($val) || $val instanceof CloudPcUserAccountType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userAccountType'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('osVersion', $this->getOsVersion());
        $writer->writeEnumValue('userAccountType', $this->getUserAccountType());
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
     * Sets the osVersion property value. The osVersion property
     * @param CloudPcOperatingSystem|null $value Value to set for the osVersion property.
    */
    public function setOsVersion(?CloudPcOperatingSystem $value): void {
        $this->getBackingStore()->set('osVersion', $value);
    }

    /**
     * Sets the userAccountType property value. The userAccountType property
     * @param CloudPcUserAccountType|null $value Value to set for the userAccountType property.
    */
    public function setUserAccountType(?CloudPcUserAccountType $value): void {
        $this->getBackingStore()->set('userAccountType', $value);
    }

}
