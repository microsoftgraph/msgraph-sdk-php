<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Windows10SecureAssessmentConfiguration extends DeviceConfiguration implements Parsable 
{
    /**
     * @var bool|null $allowPrinting Indicates whether or not to allow the app from printing during the test.
    */
    private ?bool $allowPrinting = null;
    
    /**
     * @var bool|null $allowScreenCapture Indicates whether or not to allow screen capture capability during a test.
    */
    private ?bool $allowScreenCapture = null;
    
    /**
     * @var bool|null $allowTextSuggestion Indicates whether or not to allow text suggestions during the test.
    */
    private ?bool $allowTextSuggestion = null;
    
    /**
     * @var string|null $configurationAccount The account used to configure the Windows device for taking the test. The user can be a domain account (domain/user), an AAD account (username@tenant.com) or a local account (username).
    */
    private ?string $configurationAccount = null;
    
    /**
     * @var string|null $launchUri Url link to an assessment that's automatically loaded when the secure assessment browser is launched. It has to be a valid Url (http[s]://msdn.microsoft.com/).
    */
    private ?string $launchUri = null;
    
    /**
     * Instantiates a new Windows10SecureAssessmentConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Windows10SecureAssessmentConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Windows10SecureAssessmentConfiguration {
        return new Windows10SecureAssessmentConfiguration();
    }

    /**
     * Gets the allowPrinting property value. Indicates whether or not to allow the app from printing during the test.
     * @return bool|null
    */
    public function getAllowPrinting(): ?bool {
        return $this->allowPrinting;
    }

    /**
     * Gets the allowScreenCapture property value. Indicates whether or not to allow screen capture capability during a test.
     * @return bool|null
    */
    public function getAllowScreenCapture(): ?bool {
        return $this->allowScreenCapture;
    }

    /**
     * Gets the allowTextSuggestion property value. Indicates whether or not to allow text suggestions during the test.
     * @return bool|null
    */
    public function getAllowTextSuggestion(): ?bool {
        return $this->allowTextSuggestion;
    }

    /**
     * Gets the configurationAccount property value. The account used to configure the Windows device for taking the test. The user can be a domain account (domain/user), an AAD account (username@tenant.com) or a local account (username).
     * @return string|null
    */
    public function getConfigurationAccount(): ?string {
        return $this->configurationAccount;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'allowPrinting' => function (ParseNode $n) use ($o) { $o->setAllowPrinting($n->getBooleanValue()); },
            'allowScreenCapture' => function (ParseNode $n) use ($o) { $o->setAllowScreenCapture($n->getBooleanValue()); },
            'allowTextSuggestion' => function (ParseNode $n) use ($o) { $o->setAllowTextSuggestion($n->getBooleanValue()); },
            'configurationAccount' => function (ParseNode $n) use ($o) { $o->setConfigurationAccount($n->getStringValue()); },
            'launchUri' => function (ParseNode $n) use ($o) { $o->setLaunchUri($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the launchUri property value. Url link to an assessment that's automatically loaded when the secure assessment browser is launched. It has to be a valid Url (http[s]://msdn.microsoft.com/).
     * @return string|null
    */
    public function getLaunchUri(): ?string {
        return $this->launchUri;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('allowPrinting', $this->allowPrinting);
        $writer->writeBooleanValue('allowScreenCapture', $this->allowScreenCapture);
        $writer->writeBooleanValue('allowTextSuggestion', $this->allowTextSuggestion);
        $writer->writeStringValue('configurationAccount', $this->configurationAccount);
        $writer->writeStringValue('launchUri', $this->launchUri);
    }

    /**
     * Sets the allowPrinting property value. Indicates whether or not to allow the app from printing during the test.
     *  @param bool|null $value Value to set for the allowPrinting property.
    */
    public function setAllowPrinting(?bool $value ): void {
        $this->allowPrinting = $value;
    }

    /**
     * Sets the allowScreenCapture property value. Indicates whether or not to allow screen capture capability during a test.
     *  @param bool|null $value Value to set for the allowScreenCapture property.
    */
    public function setAllowScreenCapture(?bool $value ): void {
        $this->allowScreenCapture = $value;
    }

    /**
     * Sets the allowTextSuggestion property value. Indicates whether or not to allow text suggestions during the test.
     *  @param bool|null $value Value to set for the allowTextSuggestion property.
    */
    public function setAllowTextSuggestion(?bool $value ): void {
        $this->allowTextSuggestion = $value;
    }

    /**
     * Sets the configurationAccount property value. The account used to configure the Windows device for taking the test. The user can be a domain account (domain/user), an AAD account (username@tenant.com) or a local account (username).
     *  @param string|null $value Value to set for the configurationAccount property.
    */
    public function setConfigurationAccount(?string $value ): void {
        $this->configurationAccount = $value;
    }

    /**
     * Sets the launchUri property value. Url link to an assessment that's automatically loaded when the secure assessment browser is launched. It has to be a valid Url (http[s]://msdn.microsoft.com/).
     *  @param string|null $value Value to set for the launchUri property.
    */
    public function setLaunchUri(?string $value ): void {
        $this->launchUri = $value;
    }

}
