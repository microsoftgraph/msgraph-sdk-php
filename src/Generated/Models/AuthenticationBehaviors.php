<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class AuthenticationBehaviors implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new AuthenticationBehaviors and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AuthenticationBehaviors
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AuthenticationBehaviors {
        return new AuthenticationBehaviors();
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
     * Gets the blockAzureADGraphAccess property value. If false, allows the app to have extended access to Azure AD Graph until August 31, 2025 when Azure AD Graph is fully retired. For more information on Azure AD retirement updates, see June 2024 update on Azure AD Graph API retirement.
     * @return bool|null
    */
    public function getBlockAzureADGraphAccess(): ?bool {
        $val = $this->getBackingStore()->get('blockAzureADGraphAccess');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'blockAzureADGraphAccess'");
    }

    /**
     * Gets the coopEnforcement property value. Indicates whether Cross-Origin-Opener-Policy (COOP) headers are enforced on browser-based authentication responses for the application. Set to true to enable enforcement, false to temporarily suppress enforcement, or null to use the service default. For how-to guidance, see Control Cross-Origin-Opener-Policy enforcement.
     * @return bool|null
    */
    public function getCoopEnforcement(): ?bool {
        $val = $this->getBackingStore()->get('coopEnforcement');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'coopEnforcement'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'blockAzureADGraphAccess' => fn(ParseNode $n) => $o->setBlockAzureADGraphAccess($n->getBooleanValue()),
            'coopEnforcement' => fn(ParseNode $n) => $o->setCoopEnforcement($n->getBooleanValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'removeUnverifiedEmailClaim' => fn(ParseNode $n) => $o->setRemoveUnverifiedEmailClaim($n->getBooleanValue()),
            'requireClientServicePrincipal' => fn(ParseNode $n) => $o->setRequireClientServicePrincipal($n->getBooleanValue()),
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
     * Gets the removeUnverifiedEmailClaim property value. If true, removes the email claim from tokens sent to an application when the email address's domain can't be verified.
     * @return bool|null
    */
    public function getRemoveUnverifiedEmailClaim(): ?bool {
        $val = $this->getBackingStore()->get('removeUnverifiedEmailClaim');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'removeUnverifiedEmailClaim'");
    }

    /**
     * Gets the requireClientServicePrincipal property value. If true, requires multitenant applications to have a service principal in the resource tenant as part of authorization checks before they're granted access tokens. This property is only modifiable for multitenant resource applications that rely on access from clients without a service principal and had this behavior as set to false by Microsoft. Tenant administrators should respond to security advisories sent through Azure Health Service events and the Microsoft 365 message center.
     * @return bool|null
    */
    public function getRequireClientServicePrincipal(): ?bool {
        $val = $this->getBackingStore()->get('requireClientServicePrincipal');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'requireClientServicePrincipal'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('blockAzureADGraphAccess', $this->getBlockAzureADGraphAccess());
        $writer->writeBooleanValue('coopEnforcement', $this->getCoopEnforcement());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeBooleanValue('removeUnverifiedEmailClaim', $this->getRemoveUnverifiedEmailClaim());
        $writer->writeBooleanValue('requireClientServicePrincipal', $this->getRequireClientServicePrincipal());
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
     * Sets the blockAzureADGraphAccess property value. If false, allows the app to have extended access to Azure AD Graph until August 31, 2025 when Azure AD Graph is fully retired. For more information on Azure AD retirement updates, see June 2024 update on Azure AD Graph API retirement.
     * @param bool|null $value Value to set for the blockAzureADGraphAccess property.
    */
    public function setBlockAzureADGraphAccess(?bool $value): void {
        $this->getBackingStore()->set('blockAzureADGraphAccess', $value);
    }

    /**
     * Sets the coopEnforcement property value. Indicates whether Cross-Origin-Opener-Policy (COOP) headers are enforced on browser-based authentication responses for the application. Set to true to enable enforcement, false to temporarily suppress enforcement, or null to use the service default. For how-to guidance, see Control Cross-Origin-Opener-Policy enforcement.
     * @param bool|null $value Value to set for the coopEnforcement property.
    */
    public function setCoopEnforcement(?bool $value): void {
        $this->getBackingStore()->set('coopEnforcement', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the removeUnverifiedEmailClaim property value. If true, removes the email claim from tokens sent to an application when the email address's domain can't be verified.
     * @param bool|null $value Value to set for the removeUnverifiedEmailClaim property.
    */
    public function setRemoveUnverifiedEmailClaim(?bool $value): void {
        $this->getBackingStore()->set('removeUnverifiedEmailClaim', $value);
    }

    /**
     * Sets the requireClientServicePrincipal property value. If true, requires multitenant applications to have a service principal in the resource tenant as part of authorization checks before they're granted access tokens. This property is only modifiable for multitenant resource applications that rely on access from clients without a service principal and had this behavior as set to false by Microsoft. Tenant administrators should respond to security advisories sent through Azure Health Service events and the Microsoft 365 message center.
     * @param bool|null $value Value to set for the requireClientServicePrincipal property.
    */
    public function setRequireClientServicePrincipal(?bool $value): void {
        $this->getBackingStore()->set('requireClientServicePrincipal', $value);
    }

}
