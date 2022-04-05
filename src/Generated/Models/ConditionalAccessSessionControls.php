<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ConditionalAccessSessionControls implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var ApplicationEnforcedRestrictionsSessionControl|null $applicationEnforcedRestrictions Session control to enforce application restrictions. Only Exchange Online and Sharepoint Online support this session control. */
    private ?ApplicationEnforcedRestrictionsSessionControl $applicationEnforcedRestrictions = null;
    
    /** @var CloudAppSecuritySessionControl|null $cloudAppSecurity Session control to apply cloud app security. */
    private ?CloudAppSecuritySessionControl $cloudAppSecurity = null;
    
    /** @var bool|null $disableResilienceDefaults Session control that determines whether it is acceptable for Azure AD to extend existing sessions based on information collected prior to an outage or not. */
    private ?bool $disableResilienceDefaults = null;
    
    /** @var PersistentBrowserSessionControl|null $persistentBrowser Session control to define whether to persist cookies or not. All apps should be selected for this session control to work correctly. */
    private ?PersistentBrowserSessionControl $persistentBrowser = null;
    
    /** @var SignInFrequencySessionControl|null $signInFrequency Session control to enforce signin frequency. */
    private ?SignInFrequencySessionControl $signInFrequency = null;
    
    /**
     * Instantiates a new conditionalAccessSessionControls and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ConditionalAccessSessionControls
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): ConditionalAccessSessionControls {
        return new ConditionalAccessSessionControls();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the applicationEnforcedRestrictions property value. Session control to enforce application restrictions. Only Exchange Online and Sharepoint Online support this session control.
     * @return ApplicationEnforcedRestrictionsSessionControl|null
    */
    public function getApplicationEnforcedRestrictions(): ?ApplicationEnforcedRestrictionsSessionControl {
        return $this->applicationEnforcedRestrictions;
    }

    /**
     * Gets the cloudAppSecurity property value. Session control to apply cloud app security.
     * @return CloudAppSecuritySessionControl|null
    */
    public function getCloudAppSecurity(): ?CloudAppSecuritySessionControl {
        return $this->cloudAppSecurity;
    }

    /**
     * Gets the disableResilienceDefaults property value. Session control that determines whether it is acceptable for Azure AD to extend existing sessions based on information collected prior to an outage or not.
     * @return bool|null
    */
    public function getDisableResilienceDefaults(): ?bool {
        return $this->disableResilienceDefaults;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'applicationEnforcedRestrictions' => function (self $o, ParseNode $n) { $o->setApplicationEnforcedRestrictions($n->getObjectValue(ApplicationEnforcedRestrictionsSessionControl::class)); },
            'cloudAppSecurity' => function (self $o, ParseNode $n) { $o->setCloudAppSecurity($n->getObjectValue(CloudAppSecuritySessionControl::class)); },
            'disableResilienceDefaults' => function (self $o, ParseNode $n) { $o->setDisableResilienceDefaults($n->getBooleanValue()); },
            'persistentBrowser' => function (self $o, ParseNode $n) { $o->setPersistentBrowser($n->getObjectValue(PersistentBrowserSessionControl::class)); },
            'signInFrequency' => function (self $o, ParseNode $n) { $o->setSignInFrequency($n->getObjectValue(SignInFrequencySessionControl::class)); },
        ];
    }

    /**
     * Gets the persistentBrowser property value. Session control to define whether to persist cookies or not. All apps should be selected for this session control to work correctly.
     * @return PersistentBrowserSessionControl|null
    */
    public function getPersistentBrowser(): ?PersistentBrowserSessionControl {
        return $this->persistentBrowser;
    }

    /**
     * Gets the signInFrequency property value. Session control to enforce signin frequency.
     * @return SignInFrequencySessionControl|null
    */
    public function getSignInFrequency(): ?SignInFrequencySessionControl {
        return $this->signInFrequency;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('applicationEnforcedRestrictions', $this->applicationEnforcedRestrictions);
        $writer->writeObjectValue('cloudAppSecurity', $this->cloudAppSecurity);
        $writer->writeBooleanValue('disableResilienceDefaults', $this->disableResilienceDefaults);
        $writer->writeObjectValue('persistentBrowser', $this->persistentBrowser);
        $writer->writeObjectValue('signInFrequency', $this->signInFrequency);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the applicationEnforcedRestrictions property value. Session control to enforce application restrictions. Only Exchange Online and Sharepoint Online support this session control.
     *  @param ApplicationEnforcedRestrictionsSessionControl|null $value Value to set for the applicationEnforcedRestrictions property.
    */
    public function setApplicationEnforcedRestrictions(?ApplicationEnforcedRestrictionsSessionControl $value ): void {
        $this->applicationEnforcedRestrictions = $value;
    }

    /**
     * Sets the cloudAppSecurity property value. Session control to apply cloud app security.
     *  @param CloudAppSecuritySessionControl|null $value Value to set for the cloudAppSecurity property.
    */
    public function setCloudAppSecurity(?CloudAppSecuritySessionControl $value ): void {
        $this->cloudAppSecurity = $value;
    }

    /**
     * Sets the disableResilienceDefaults property value. Session control that determines whether it is acceptable for Azure AD to extend existing sessions based on information collected prior to an outage or not.
     *  @param bool|null $value Value to set for the disableResilienceDefaults property.
    */
    public function setDisableResilienceDefaults(?bool $value ): void {
        $this->disableResilienceDefaults = $value;
    }

    /**
     * Sets the persistentBrowser property value. Session control to define whether to persist cookies or not. All apps should be selected for this session control to work correctly.
     *  @param PersistentBrowserSessionControl|null $value Value to set for the persistentBrowser property.
    */
    public function setPersistentBrowser(?PersistentBrowserSessionControl $value ): void {
        $this->persistentBrowser = $value;
    }

    /**
     * Sets the signInFrequency property value. Session control to enforce signin frequency.
     *  @param SignInFrequencySessionControl|null $value Value to set for the signInFrequency property.
    */
    public function setSignInFrequency(?SignInFrequencySessionControl $value ): void {
        $this->signInFrequency = $value;
    }

}
