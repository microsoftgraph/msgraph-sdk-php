<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class ConditionalAccessClientApplications implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new ConditionalAccessClientApplications and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ConditionalAccessClientApplications
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ConditionalAccessClientApplications {
        return new ConditionalAccessClientApplications();
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
     * Gets the excludeServicePrincipals property value. Service principal IDs excluded from the policy scope.
     * @return array<string>|null
    */
    public function getExcludeServicePrincipals(): ?array {
        $val = $this->getBackingStore()->get('excludeServicePrincipals');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'excludeServicePrincipals'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'excludeServicePrincipals' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setExcludeServicePrincipals($val);
            },
            'includeServicePrincipals' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setIncludeServicePrincipals($val);
            },
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'servicePrincipalFilter' => fn(ParseNode $n) => $o->setServicePrincipalFilter($n->getObjectValue([ConditionalAccessFilter::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the includeServicePrincipals property value. Service principal IDs included in the policy scope, or ServicePrincipalsInMyTenant.
     * @return array<string>|null
    */
    public function getIncludeServicePrincipals(): ?array {
        $val = $this->getBackingStore()->get('includeServicePrincipals');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'includeServicePrincipals'");
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
     * Gets the servicePrincipalFilter property value. The servicePrincipalFilter property
     * @return ConditionalAccessFilter|null
    */
    public function getServicePrincipalFilter(): ?ConditionalAccessFilter {
        $val = $this->getBackingStore()->get('servicePrincipalFilter');
        if (is_null($val) || $val instanceof ConditionalAccessFilter) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'servicePrincipalFilter'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfPrimitiveValues('excludeServicePrincipals', $this->getExcludeServicePrincipals());
        $writer->writeCollectionOfPrimitiveValues('includeServicePrincipals', $this->getIncludeServicePrincipals());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeObjectValue('servicePrincipalFilter', $this->getServicePrincipalFilter());
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
     * Sets the excludeServicePrincipals property value. Service principal IDs excluded from the policy scope.
     * @param array<string>|null $value Value to set for the excludeServicePrincipals property.
    */
    public function setExcludeServicePrincipals(?array $value): void {
        $this->getBackingStore()->set('excludeServicePrincipals', $value);
    }

    /**
     * Sets the includeServicePrincipals property value. Service principal IDs included in the policy scope, or ServicePrincipalsInMyTenant.
     * @param array<string>|null $value Value to set for the includeServicePrincipals property.
    */
    public function setIncludeServicePrincipals(?array $value): void {
        $this->getBackingStore()->set('includeServicePrincipals', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the servicePrincipalFilter property value. The servicePrincipalFilter property
     * @param ConditionalAccessFilter|null $value Value to set for the servicePrincipalFilter property.
    */
    public function setServicePrincipalFilter(?ConditionalAccessFilter $value): void {
        $this->getBackingStore()->set('servicePrincipalFilter', $value);
    }

}
