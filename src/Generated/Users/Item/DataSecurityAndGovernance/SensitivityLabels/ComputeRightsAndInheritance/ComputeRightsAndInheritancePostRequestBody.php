<?php

namespace Microsoft\\Graph\\Generated\Users\Item\DataSecurityAndGovernance\SensitivityLabels\ComputeRightsAndInheritance;

use Microsoft\\Graph\\Generated\Models\ProtectedContent;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class ComputeRightsAndInheritancePostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new ComputeRightsAndInheritancePostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ComputeRightsAndInheritancePostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ComputeRightsAndInheritancePostRequestBody {
        return new ComputeRightsAndInheritancePostRequestBody();
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
     * Gets the delegatedUserEmail property value. The delegatedUserEmail property
     * @return string|null
    */
    public function getDelegatedUserEmail(): ?string {
        $val = $this->getBackingStore()->get('delegatedUserEmail');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'delegatedUserEmail'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'delegatedUserEmail' => fn(ParseNode $n) => $o->setDelegatedUserEmail($n->getStringValue()),
            'locale' => fn(ParseNode $n) => $o->setLocale($n->getStringValue()),
            'protectedContents' => fn(ParseNode $n) => $o->setProtectedContents($n->getCollectionOfObjectValues([ProtectedContent::class, 'createFromDiscriminatorValue'])),
            'supportedContentFormats' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setSupportedContentFormats($val);
            },
        ];
    }

    /**
     * Gets the locale property value. The locale property
     * @return string|null
    */
    public function getLocale(): ?string {
        $val = $this->getBackingStore()->get('locale');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'locale'");
    }

    /**
     * Gets the protectedContents property value. The protectedContents property
     * @return array<ProtectedContent>|null
    */
    public function getProtectedContents(): ?array {
        $val = $this->getBackingStore()->get('protectedContents');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ProtectedContent::class);
            /** @var array<ProtectedContent>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'protectedContents'");
    }

    /**
     * Gets the supportedContentFormats property value. The supportedContentFormats property
     * @return array<string>|null
    */
    public function getSupportedContentFormats(): ?array {
        $val = $this->getBackingStore()->get('supportedContentFormats');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'supportedContentFormats'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('delegatedUserEmail', $this->getDelegatedUserEmail());
        $writer->writeStringValue('locale', $this->getLocale());
        $writer->writeCollectionOfObjectValues('protectedContents', $this->getProtectedContents());
        $writer->writeCollectionOfPrimitiveValues('supportedContentFormats', $this->getSupportedContentFormats());
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
     * Sets the delegatedUserEmail property value. The delegatedUserEmail property
     * @param string|null $value Value to set for the delegatedUserEmail property.
    */
    public function setDelegatedUserEmail(?string $value): void {
        $this->getBackingStore()->set('delegatedUserEmail', $value);
    }

    /**
     * Sets the locale property value. The locale property
     * @param string|null $value Value to set for the locale property.
    */
    public function setLocale(?string $value): void {
        $this->getBackingStore()->set('locale', $value);
    }

    /**
     * Sets the protectedContents property value. The protectedContents property
     * @param array<ProtectedContent>|null $value Value to set for the protectedContents property.
    */
    public function setProtectedContents(?array $value): void {
        $this->getBackingStore()->set('protectedContents', $value);
    }

    /**
     * Sets the supportedContentFormats property value. The supportedContentFormats property
     * @param array<string>|null $value Value to set for the supportedContentFormats property.
    */
    public function setSupportedContentFormats(?array $value): void {
        $this->getBackingStore()->set('supportedContentFormats', $value);
    }

}
