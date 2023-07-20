<?php

namespace Microsoft\Graph\Generated\Groups\Item\AssignLicense;

use Microsoft\Graph\Generated\Models\AssignedLicense;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class AssignLicensePostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new assignLicensePostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AssignLicensePostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AssignLicensePostRequestBody {
        return new AssignLicensePostRequestBody();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
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
     * Gets the addLicenses property value. The addLicenses property
     * @return array<AssignedLicense>|null
    */
    public function getAddLicenses(): ?array {
        $val = $this->getBackingStore()->get('addLicenses');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AssignedLicense::class);
            /** @var array<AssignedLicense>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'addLicenses'");
    }

    /**
     * Gets the backingStore property value. Stores model information.
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
            'addLicenses' => fn(ParseNode $n) => $o->setAddLicenses($n->getCollectionOfObjectValues([AssignedLicense::class, 'createFromDiscriminatorValue'])),
            'removeLicenses' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setRemoveLicenses($val);
            },
        ];
    }

    /**
     * Gets the removeLicenses property value. The removeLicenses property
     * @return array<string>|null
    */
    public function getRemoveLicenses(): ?array {
        $val = $this->getBackingStore()->get('removeLicenses');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'removeLicenses'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('addLicenses', $this->getAddLicenses());
        $writer->writeCollectionOfPrimitiveValues('removeLicenses', $this->getRemoveLicenses());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the additionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the addLicenses property value. The addLicenses property
     * @param array<AssignedLicense>|null $value Value to set for the addLicenses property.
    */
    public function setAddLicenses(?array $value): void {
        $this->getBackingStore()->set('addLicenses', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the backingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the removeLicenses property value. The removeLicenses property
     * @param array<string>|null $value Value to set for the removeLicenses property.
    */
    public function setRemoveLicenses(?array $value): void {
        $this->getBackingStore()->set('removeLicenses', $value);
    }

}
