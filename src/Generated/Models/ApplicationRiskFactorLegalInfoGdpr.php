<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class ApplicationRiskFactorLegalInfoGdpr implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new ApplicationRiskFactorLegalInfoGdpr and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ApplicationRiskFactorLegalInfoGdpr
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ApplicationRiskFactorLegalInfoGdpr {
        return new ApplicationRiskFactorLegalInfoGdpr();
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
     * Gets the dataProtection property value. The dataProtection property
     * @return DataProtection|null
    */
    public function getDataProtection(): ?DataProtection {
        $val = $this->getBackingStore()->get('dataProtection');
        if (is_null($val) || $val instanceof DataProtection) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'dataProtection'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'dataProtection' => fn(ParseNode $n) => $o->setDataProtection($n->getEnumValue(DataProtection::class)),
            'hasRightToErasure' => fn(ParseNode $n) => $o->setHasRightToErasure($n->getBooleanValue()),
            'isReportingDataBreaches' => fn(ParseNode $n) => $o->setIsReportingDataBreaches($n->getBooleanValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'statementUrl' => fn(ParseNode $n) => $o->setStatementUrl($n->getStringValue()),
            'userOwnership' => fn(ParseNode $n) => $o->setUserOwnership($n->getEnumValue(UserOwnership::class)),
        ];
    }

    /**
     * Gets the hasRightToErasure property value. Indicates whether the application provides users with the ability to request deletion of their personal data (the right to be forgotten).
     * @return bool|null
    */
    public function getHasRightToErasure(): ?bool {
        $val = $this->getBackingStore()->get('hasRightToErasure');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'hasRightToErasure'");
    }

    /**
     * Gets the isReportingDataBreaches property value. Indicates whether the organization reports personal data breaches to authorities and affected users in accordance with GDPR requirements.
     * @return bool|null
    */
    public function getIsReportingDataBreaches(): ?bool {
        $val = $this->getBackingStore()->get('isReportingDataBreaches');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isReportingDataBreaches'");
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
     * Gets the statementUrl property value. Specifies the URL of the application's GDPR or privacy compliance statement, outlining how user data is handled.
     * @return string|null
    */
    public function getStatementUrl(): ?string {
        $val = $this->getBackingStore()->get('statementUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'statementUrl'");
    }

    /**
     * Gets the userOwnership property value. The userOwnership property
     * @return UserOwnership|null
    */
    public function getUserOwnership(): ?UserOwnership {
        $val = $this->getBackingStore()->get('userOwnership');
        if (is_null($val) || $val instanceof UserOwnership) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userOwnership'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('dataProtection', $this->getDataProtection());
        $writer->writeBooleanValue('hasRightToErasure', $this->getHasRightToErasure());
        $writer->writeBooleanValue('isReportingDataBreaches', $this->getIsReportingDataBreaches());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('statementUrl', $this->getStatementUrl());
        $writer->writeEnumValue('userOwnership', $this->getUserOwnership());
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
     * Sets the dataProtection property value. The dataProtection property
     * @param DataProtection|null $value Value to set for the dataProtection property.
    */
    public function setDataProtection(?DataProtection $value): void {
        $this->getBackingStore()->set('dataProtection', $value);
    }

    /**
     * Sets the hasRightToErasure property value. Indicates whether the application provides users with the ability to request deletion of their personal data (the right to be forgotten).
     * @param bool|null $value Value to set for the hasRightToErasure property.
    */
    public function setHasRightToErasure(?bool $value): void {
        $this->getBackingStore()->set('hasRightToErasure', $value);
    }

    /**
     * Sets the isReportingDataBreaches property value. Indicates whether the organization reports personal data breaches to authorities and affected users in accordance with GDPR requirements.
     * @param bool|null $value Value to set for the isReportingDataBreaches property.
    */
    public function setIsReportingDataBreaches(?bool $value): void {
        $this->getBackingStore()->set('isReportingDataBreaches', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the statementUrl property value. Specifies the URL of the application's GDPR or privacy compliance statement, outlining how user data is handled.
     * @param string|null $value Value to set for the statementUrl property.
    */
    public function setStatementUrl(?string $value): void {
        $this->getBackingStore()->set('statementUrl', $value);
    }

    /**
     * Sets the userOwnership property value. The userOwnership property
     * @param UserOwnership|null $value Value to set for the userOwnership property.
    */
    public function setUserOwnership(?UserOwnership $value): void {
        $this->getBackingStore()->set('userOwnership', $value);
    }

}
