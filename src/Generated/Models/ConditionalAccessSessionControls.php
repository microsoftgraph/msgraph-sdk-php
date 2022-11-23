<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class ConditionalAccessSessionControls implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new conditionalAccessSessionControls and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ConditionalAccessSessionControls
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ConditionalAccessSessionControls {
        return new ConditionalAccessSessionControls();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the applicationEnforcedRestrictions property value. Session control to enforce application restrictions. Only Exchange Online and Sharepoint Online support this session control.
     * @return ApplicationEnforcedRestrictionsSessionControl|null
    */
    public function getApplicationEnforcedRestrictions(): ?ApplicationEnforcedRestrictionsSessionControl {
        return $this->getBackingStore()->get('applicationEnforcedRestrictions');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the cloudAppSecurity property value. Session control to apply cloud app security.
     * @return CloudAppSecuritySessionControl|null
    */
    public function getCloudAppSecurity(): ?CloudAppSecuritySessionControl {
        return $this->getBackingStore()->get('cloudAppSecurity');
    }

    /**
     * Gets the disableResilienceDefaults property value. Session control that determines whether it is acceptable for Azure AD to extend existing sessions based on information collected prior to an outage or not.
     * @return bool|null
    */
    public function getDisableResilienceDefaults(): ?bool {
        return $this->getBackingStore()->get('disableResilienceDefaults');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'applicationEnforcedRestrictions' => fn(ParseNode $n) => $o->setApplicationEnforcedRestrictions($n->getObjectValue([ApplicationEnforcedRestrictionsSessionControl::class, 'createFromDiscriminatorValue'])),
            'cloudAppSecurity' => fn(ParseNode $n) => $o->setCloudAppSecurity($n->getObjectValue([CloudAppSecuritySessionControl::class, 'createFromDiscriminatorValue'])),
            'disableResilienceDefaults' => fn(ParseNode $n) => $o->setDisableResilienceDefaults($n->getBooleanValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'persistentBrowser' => fn(ParseNode $n) => $o->setPersistentBrowser($n->getObjectValue([PersistentBrowserSessionControl::class, 'createFromDiscriminatorValue'])),
            'signInFrequency' => fn(ParseNode $n) => $o->setSignInFrequency($n->getObjectValue([SignInFrequencySessionControl::class, 'createFromDiscriminatorValue'])),
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
     * Gets the persistentBrowser property value. Session control to define whether to persist cookies or not. All apps should be selected for this session control to work correctly.
     * @return PersistentBrowserSessionControl|null
    */
    public function getPersistentBrowser(): ?PersistentBrowserSessionControl {
        return $this->getBackingStore()->get('persistentBrowser');
    }

    /**
     * Gets the signInFrequency property value. Session control to enforce signin frequency.
     * @return SignInFrequencySessionControl|null
    */
    public function getSignInFrequency(): ?SignInFrequencySessionControl {
        return $this->getBackingStore()->get('signInFrequency');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('applicationEnforcedRestrictions', $this->getApplicationEnforcedRestrictions());
        $writer->writeObjectValue('cloudAppSecurity', $this->getCloudAppSecurity());
        $writer->writeBooleanValue('disableResilienceDefaults', $this->getDisableResilienceDefaults());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeObjectValue('persistentBrowser', $this->getPersistentBrowser());
        $writer->writeObjectValue('signInFrequency', $this->getSignInFrequency());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the applicationEnforcedRestrictions property value. Session control to enforce application restrictions. Only Exchange Online and Sharepoint Online support this session control.
     *  @param ApplicationEnforcedRestrictionsSessionControl|null $value Value to set for the applicationEnforcedRestrictions property.
    */
    public function setApplicationEnforcedRestrictions(?ApplicationEnforcedRestrictionsSessionControl $value): void {
        $this->getBackingStore()->set('applicationEnforcedRestrictions', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     *  @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the cloudAppSecurity property value. Session control to apply cloud app security.
     *  @param CloudAppSecuritySessionControl|null $value Value to set for the cloudAppSecurity property.
    */
    public function setCloudAppSecurity(?CloudAppSecuritySessionControl $value): void {
        $this->getBackingStore()->set('cloudAppSecurity', $value);
    }

    /**
     * Sets the disableResilienceDefaults property value. Session control that determines whether it is acceptable for Azure AD to extend existing sessions based on information collected prior to an outage or not.
     *  @param bool|null $value Value to set for the disableResilienceDefaults property.
    */
    public function setDisableResilienceDefaults(?bool $value): void {
        $this->getBackingStore()->set('disableResilienceDefaults', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the persistentBrowser property value. Session control to define whether to persist cookies or not. All apps should be selected for this session control to work correctly.
     *  @param PersistentBrowserSessionControl|null $value Value to set for the persistentBrowser property.
    */
    public function setPersistentBrowser(?PersistentBrowserSessionControl $value): void {
        $this->getBackingStore()->set('persistentBrowser', $value);
    }

    /**
     * Sets the signInFrequency property value. Session control to enforce signin frequency.
     *  @param SignInFrequencySessionControl|null $value Value to set for the signInFrequency property.
    */
    public function setSignInFrequency(?SignInFrequencySessionControl $value): void {
        $this->getBackingStore()->set('signInFrequency', $value);
    }

}
